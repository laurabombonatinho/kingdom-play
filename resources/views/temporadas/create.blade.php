<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kingdom Play</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="{{ URL::asset('css/thstylesheet.css') }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ URL::asset('css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" id="theme-stylesheet" href="{{ URL::asset('css/style.default.css') }}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" id="theme-stylesheet" href="{{ URL::asset('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
       <nav class="navbar">

          <div class="navbar-brand" href="#">
            <!-- <label style="margin-top:20px; font-size: 26px; font-weight: bold; color:#cc0000">&nbspKingdom Play</label> -->
          </div>
        </nav>

    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">

          <div class="row">
              <div class="col-md-4">
              <img src="{{ URL::asset('imgs/imagenzinha.png') }}" alt="">
              </div>
              <div class="col-md-3"></div>
            <div class="col-md-5">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <!-- <form method="get" class="form-validate"> -->
                  <form method="post" action="{{route ('temporadas.store')}}">
                {{ csrf_field() }}
                    <div class="form-group">
                      <input id="login-username" type="text" name="quantTemporada" required data-msg="Informe seu nome" class="input-material">
                      <label for="login-username" class="label-material">quantTemporada</label>
                    </div>
                    <div class="form-group">
                      <input id="login-email" type="text" name="statusTemporada"  data-msg="Informe seu e-mail" class="input-material">
                      <label for="login-email" class="label-material">statusTemporada</label>
                    </div>
                    <div class="form-group">
                      <input id="login-email" type="text" name="avaliacaoTemporada"  data-msg="Informe seu e-mail" class="input-material">
                      <label for="login-email" class="label-material">avaliacaoTemporada</label>
                    </div>
                    <div class="form-group">
                      <input id="login-email" type="text" name="series_id"  data-msg="Informe seu e-mail" class="input-material">
                      <label for="login-email" class="label-material">series_id</label>
                    </div>
                        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a> 
                       <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
              </div>
              </div>
            </div>
          </div>
          
        </div>
      </div> 
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
      </div>
    </div>
    <!-- JavaScript files-->
    <link rel="stylesheet" id="theme-stylesheet" src="{{ URL::asset('vendor/jquery/jquery.min.js') }}">
    <link rel="stylesheet" src="{{ URL::asset('vendor/popper.js/umd/popper.min.js') }}">
    <link rel="stylesheet" src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}">
    <link rel="stylesheet" src="{{ URL::asset('vendor/jquery.cookie/jquery.cookie.js') }}">
    <link rel="stylesheet" src="{{ URL::asset('vendor/chart.js/Chart.min.js') }}">
    <link rel="stylesheet" src="{{ URL::asset('vendor/jquery-validation/jquery.validate.min.js') }}">
    <link rel="stylesheet" src="{{ URL::asset('js/front.js') }}">
  </body>
</html>
