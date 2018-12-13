<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Temporada;
use Validator;


class TemporadaController extends Controller
{
    protected function validarTemporada($request){
        $validator = Validator::make($request->all(), [
            "QuantidadeTemp" => "required"
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
       /* $temporada = Temporada::all();
        return response()->json(['data'=>$temporada, 'status'=>true]);*/
                ////

                $qtd = $request['qtd'] ?: 2;
                $page = $request['page'] ?: 1;
                $buscar = $request['buscar'];
        
                Paginator::currentPageResolver(function () use ($page){
                    return $page;
                });
        
                if($buscar){
                    $temporadas = Temporada::where('QuantidadeTemp','=', $buscar)->paginate($qtd);
                }else{  
                    $temporadas = Temporada::paginate($qtd);
        
                }
                $temporadas = $temporadas->appends(Request::capture()->except('page'));
                return view('temporadas.index', compact('temporadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temporadas = Temporada::all();
        return view('temporadas.create', compact('temporadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $dados = $request->all();
        $temporadas = Temporada::create($dados); 

        if($temporadas){
        return response()->json(['data' =>$temporadas, 'status'=>true]);
        }else{
        return response()->json(['data' =>'Erro ao criar a temporada', 'status'=>false]);
        }*/
          ////
          $validator = $this->validarTemporada($request);
          if($validator->fails()){
              return redirect()->back()->withErrors($validator->errors());
          }
          $dados = $request->all();
          Temporada::create($dados);
  
          return redirect()->route('temporadas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $temporada = Temporada::find($id);
        
        return view('temporadas.show', compact('temporada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $temporada = Temporada::find($id);
        
        return view('temporadas.edit', compact('temporada'));
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
        $validator = $this->validarTemporada($request);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $temporada = Temporada::find($id);
        $dados = $request->all();
        $temporada->update($dados);
        
        return redirect()->route('temporadas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Temporada::where('filme_id', '=', $id)->count()){
            $msg = "Não é possível excluir esse filme Os produtos com id ( ";
            $produtos = Temporada::where('filme_id', '=', $id)->get();
            foreach($produtos as $produto){
                $msg .= $produto->id." ";
            }
            $msg .= " ) estão relacionados com esta marca";

            \Session::flash('mensagem', ['msg'=>$msg]);
            return redirect()->route('filme.remove', $id);
        }
        
        Temporada::find($id)->delete();
        return redirect()->route('temporadas.index');
    }
    public function remover($id)
    {    
        $temporada = Temporada::find($id);
        return view('temporadas.remove', compact('temporada'));
    }

    public function temporadas($id)
    {
        $temporada = Temporada::find($id);
        return view('temporadas.produtos', compact('temporada'));
    }
}
