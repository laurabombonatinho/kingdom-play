<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Filme;
use Validator;

class FilmeController extends Controller
{
    protected function validarFilme($request){
        $validator = Validator::make($request->all(), [
            "nomeFilme" => "required",
            "duracaoFilme" => "required"
        ]);
        return $validator;
    }

    public function __construct(){
        header('Acesses-Control-Allow-Origin:*');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
      /*  $filme = Filme::all();
        return response()->json(['data'=>$filme, 'status'=>true]);*/

        ////

        $qtd = $request['qtd'] ?: 2;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];

        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });

        if($buscar){
            $filmes = Filme::where('nomeFilme','=', $buscar)->paginate($qtd);
        }else{  
            $filmes = Filme::paginate($qtd);

        }
        $filmes = $filmes->appends(Request::capture()->except('page'));
        return view('filmes.index', compact('filmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filmes = Filme::all();
        return view('filmes.create', compact('filmes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $filmes = Filme::create($dados); 
        
        if($filmes){
        return response()->json(['data' =>$filmes, 'status'=>true]);
        }else{
        return response()->json(['data' =>'Erro ao criar filme', 'status'=>false]);
        }
           ////
        $validator = $this->validarFilme($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        $dados = $request->all();
        Filme::create($dados);

        return redirect()->route('filmes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filme = Filme::find($id);
        
        return view('filmes.show', compact('filme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filme = Filme::find($id);
        
        return view('filmes.edit', compact('filme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validarFilme($request);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $filme = Filme::find($id);
        $dados = $request->all();
        $filme->update($dados);
        
        return redirect()->route('filmes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Filme::where('filme_id', '=', $id)->count()){
            $msg = "Não é possível excluir esse filme Os produtos com id ( ";
            $produtos = Filme::where('filme_id', '=', $id)->get();
            foreach($produtos as $produto){
                $msg .= $produto->id." ";
            }
            $msg .= " ) estão relacionados com esta marca";

            \Session::flash('mensagem', ['msg'=>$msg]);
            return redirect()->route('filme.remove', $id);
        }
        
        Filme::find($id)->delete();
        return redirect()->route('filmes.index');
    }
    public function remover($id)
    {    
        $filme = Filme::find($id);
        return view('filmes.remove', compact('filme'));
    }

    public function filmes($id)
    {
        $filme = Filme::find($id);
        return view('filmes.produtos', compact('filme'));
    }
}
