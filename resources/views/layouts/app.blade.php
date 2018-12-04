<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Login.blade.php -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Kingdom Play</title> 
    <meta name="description" content=""> 
    <meta name="robots" content="all,follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
     <!-- Login.blade.php -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/thstylesheet.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/favicon.ico">

</head>
<body>
    <!-- Login.blade.php -->
    <nav class="navbar">
        <div class="navbar-brand" href="#">
            <img src="imgs/logo.png" width="60" class="d-inline-block align-top" alt="">
            <label style="margin-top:20px; font-size: 26px; font-weight: bold; color:#cc0000">&nbspKingdom Play</label>
        </div>
    </nav>

    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">

          <div class="row">
              <div class="col-md-4">
              <img src="imgs/imagenzinha.png" alt="">
              </div>
              <div class="col-md-3"></div>
            <div class="col-md-5">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="get" class="form-validate">
                    <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">Usuário</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Senha</label>
                    </div><a id="login" href="index.html" class="btn btn-primary">Entrar</a>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Esqueceu sua senha?</a><br><small>Não possui conta? </small>

                
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastra-se') }}</a>
                  
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>

    <!-- <div id="app"> -->
       <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">  -->
        
            <!-- <div class="container">  -->
                  <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>   -->

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ml-auto"> -->
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li> -->
                        @else
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
                        @endguest
                    <!-- </ul> -->
                <!-- </div> -->
            <!-- </div> -->
         <!-- </nav> -->

        <main class="py-4">
            @yield('content')
        </main>
    <!-- </div> -->
</body>
</html>
