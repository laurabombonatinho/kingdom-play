<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kingdom Play</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="css/thstylesheet.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
      <!-- <nav class="navbar">

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
                      <input id="login-username" type="text" name="loginUsername" required data-msg="Informe seu nome" class="input-material">
                      <label for="login-username" class="label-material">Nome</label>
                    </div> -->
                    <!--<div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" required data-msg="Informe seu nome de usuário" class="input-material">
                      <label for="login-username" class="label-material">Nome de usuário</label>
                    </div>-->
                    <!-- <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" required data-msg="Informe seu e-mail" class="input-material">
                      <label for="login-username" class="label-material">E-mail</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" required data-msg="Informe sua senha" class="input-material">
                      <label for="login-password" class="label-material">Senha</label>
                    </div><a id="login" href="/" class="btn btn-primary">Cadastrar</a> -->
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                <!-- </div>
              </div>
            </div>
          </div>
          
        </div>
      </div> -->

 @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
    <div class="panel panel-default">

        <div class="panel-heading"><h3>Cadastre a marca</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route ('marcas.store')}}">
                {{ csrf_field() }}
                <h4>Dados da marca</h4>
                <hr>
                <div class="form-group">
                    <label for="descricao">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
