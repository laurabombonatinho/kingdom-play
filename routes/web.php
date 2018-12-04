<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/create', function () {
    return view('Usuario/create');
});


/*
    
    Route::get('/ola', function () {
    return "<h1>Seja bem vindo!</h1>";
    });
    
    Route::get('/olavisitante', function () {
    return "<h1>Olá, Seja bem vindo visitante!</h1>";
    });
    //Com parametros.../
    Route::get('/nome/{nome}', function ($nome) {
    return "<h1>Olá $nome ! Seja bem vindo !</h1>";
    });
    //Com dois parametros /
    /*Route::get('/nomesobrenome/{nome}/{sobrenome}', function ($nome,$sobrenome) {
    return "<h1>Olá $nome $sobrenome ! Seja bem vindo !</h1>";
    });/*/
    
  /*  Route::get('/nomesobrenome/{nome}/{sobrenome}', function ($nome,$sobrenome) {
    for($i=0;$i<10;$i++) {
    echo "<h1>Olá $nome $sobrenome ! Seja bem vindo !</h1>";
    }
    });*/
    //Usando o for/
    /*Route::get('/nomevezes/{nome}/{num}', function ($nome,$num) {
    if(is_integer($num)){
    for($i=0;$i<$num;$i++) {
    echo "<h1>Olá $nome ! Seja bem vindo !</h1>";
    }
    }else{
    echo "Deu ruim em amigão...";
    echo "Tenta um número da próxima vez";
    }
    
    });*/
    
   /* Route::get('/nomevezes/{nome}/{num}', function ($nome,$num) {
    
        for($i=0;$i<$num;$i++) {
            echo "<h1>Olá $nome ! Seja bem vindo !</h1>";
           }  
    })->where('num','[0-9]+')->where('nome','[A-Za-z]+');
    
    //? quer dizer que e parâmetro opcional/
    
    Route::get('/nomenull/{nome?}', function ($nome=null) {
    if(isset($nome)){
    echo "<h1>Olá $nome ! Seja bem vindo !</h1>";
    }else{
    echo "Você não passou nenhum parâmetro";
    }
    });
    
    //Varios gets/
    Route::prefix('app')->group(function () {
    Route::get('/', function () {
    return "pagina pricipal do App";
    });
    Route::get('profile', function () {
    return "Pagina profile";
    });
    Route::get('about', function () {
    return "Pagina about";
    });
    });
    
    //Redirecionar para uma outra Pagina/
    //301 - Redirecionamento permanente de URL/
    Route::redirect('/ola','/olavisitante',301);*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
