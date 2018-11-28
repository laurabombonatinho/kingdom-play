<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstatisticaFilme;

class EstatisticaFilmeController extends Controller
{
    public function __construct(){
        header('Acesses-Control-Allow-Origin:*');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatisticafilme = EstatisticaFilme::all();
        return response()->json(['data'=>$estatisticafilme, 'status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $estatisticafilme = EstatisticaFilme::create($dados); 

        if($estatisticafilme){
        return response()->json(['data' =>$estatisticafilme, 'status'=>true]);
        }else{
        return response()->json(['data' =>'Erro ao criar a estatistica', 'status'=>false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
