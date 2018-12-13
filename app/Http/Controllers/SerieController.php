<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Serie;
use Validator;

class SerieController extends Controller
{

    protected function validarSerie($request){
        $validator = Validator::make($request->all(), [
            "nomeSerie" => "required"
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
        /*$serie = Serie::all();
        return response()->json(['data'=>$serie, 'status'=>true]);*/

        ///

        $qtd = $request['qtd'] ?: 2;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];

        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });

        if($buscar){
            $series = Serie::where('nomeSerie','=', $buscar)->paginate($qtd);
        }else{  
            $series = Serie::paginate($qtd);

        }
        $series = $series->appends(Request::capture()->except('page'));
        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Serie::all();
        return view('series.create', compact('series'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   /*     $dados = $request->all();
$series = Serie::create($dados); 

if($series){
return response()->json(['data' =>$series, 'status'=>true]);
}else{
return response()->json(['data' =>'Erro ao criar a série', 'status'=>false]);
}*/
////
$validator = $this->validarSerie($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        $dados = $request->all();
        Serie::create($dados);

        return redirect()->route('series.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serie = Serie::find($id);
        
        return view('series.show', compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serie = Serie::find($id);
        
        return view('series.edit', compact('serie'));
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
        $validator = $this->validarSerie($request);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $serie = Serie::find($id);
        $dados = $request->all();
        $serie->update($dados);
        
        return redirect()->route('series.index');
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
            return redirect()->route('serie.remove', $id);
        }
        
        Serie::find($id)->delete();
        return redirect()->route('series.index');
    }
    public function remover($id)
    {    
        $serie = Serie::find($id);
        return view('series.remove', compact('serie'));
    }

    public function series($id)
    {
        $serie = Serie::find($id);
        return view('series.produtos', compact('serie'));
    }
}
