<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Usuario;
use Validator;

class UsuarioController extends Controller
{
    protected function validarUsuario($request){
        $validator = Validator::make($request->all(), [
            "nome" => "required",
            "email" => "required",
            "senha" => "required"
        ]);
        return $validator;
    }

    public function __construct(){
        header('Acesses-Control-Allow-Origin:*');
        }

     /*   protected function validarMarca($request){
            $validator = Validator::make($request->all(), [
                "nome" => "required"
            ]);
            return $validator;
        }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return response()->json(['data'=>$usuario, 'status'=>true]);

        /////

        $qtd = $request['qtd'] ?: 2;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];

        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });

        if($buscar){
            $usuarios = Usuario::where('nome','=', $buscar)->paginate($qtd);
        }else{  
            $usuarios = Usuario::paginate($qtd);

        }
        $usuarios = $usuarios->appends(Request::capture()->except('page'));
        return view('usuarios.index', compact('usuarios'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::all();
        return view('usuarios.create', compact('usuarios'));
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
        $usuarios = Usuario::create($dados); 

        if($usuarios){
        return response()->json(['data' =>$usuarios, 'status'=>true]);
        }else{
        return response()->json(['data' =>'Erro ao criar usuario', 'status'=>false]);
        }
        ////
        $validator = $this->validarUsuario($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }
        $dados = $request->all();
        Usuario::create($dados);

        return redirect()->route('welcome');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        
        return view('usuarios.edit', compact('usuario'));
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
        $validator = $this->validarUsuario($request);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $usuario = Usuario::find($id);
        $dados = $request->all();
        $usuario->update($dados);
        
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Usuario::where('usuario_id', '=', $id)->count()){
            $msg = "Não é possível excluir esse usuario. Os produtos com id ( ";
            $produtos = Usuario::where('usuario_id', '=', $id)->get();
            foreach($produtos as $produto){
                $msg .= $produto->id." ";
            }
            $msg .= " ) estão relacionados com esta marca";

            \Session::flash('mensagem', ['msg'=>$msg]);
            return redirect()->route('usuario.remove', $id);
        }
        
        Marca::find($id)->delete();
        return redirect()->route('marcas.index');
    }
    public function remover($id)
    {    
        $usuario = Usuario::find($id);
        return view('usuarios.remove', compact('usuario'));
    }

    public function usuarios($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.index', compact('usuario'));
    }
}
