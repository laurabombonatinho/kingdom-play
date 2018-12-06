<!--
    <html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>-->

<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kingdom Play</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
	  
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="/" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Kingdom</strong><strong>Play</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">K</strong><strong>P</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="glyphicon glyphicon-menu-hamburger"></i></button>
          </div>
           
		   <!-- Input Pesquisar -->
		  <div class="input-group col-sm-6">
			<input type="text" class="form-control" >
				<div class="input-group-append">  
				 <button class="btn btn-success" style="background:#cc0000; border:#cc0000" type="submit">Pesquisar</button>  
				</div>
		  </div>	
		  <!-- End Input Pesquisar -->
		  
		  <!-- Megamenu-->
            <div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Categorias </i></a>
              <div class="dropdown-menu megamenu text-center">
                <div class="row">
                  <div class="col-lg-3 col-md-3"><strong class="text-uppercase"></strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Animação</a></li>
                      <li><a href="#">Aventura</a></li>
                      <li><a href="#">Ação</a></li>
                      <li><a href="#">Cinema TV</a></li>
                      <li><a href="#">Comédia</a></li>
                      <li><a href="#">Crime</a></li>
                      <li><a href="#">Documentário</a></li>
                      <li><a href="#">Drama</a></li>
					  
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-3"><strong class="text-uppercase"></strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Família</a></li>
					            <li><a href="#">Fantasia</a></li>
                      <li><a href="#">Faroeste</a></li>
                      <li><a href="#">Ficção Científica</a></li>
                      <li><a href="#">Guerra</a></li>
                      <li><a href="#">História</a></li>
                      <li><a href="#">Mistério</a></li>
                      <li><a href="#">Músicas</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-md-3"><strong class="text-uppercase"></strong>
                    <ul class="list-unstyled mb-3">
                      <li><a href="#">Romance</a></li>
                      <li><a href="#">Terror</a></li>
                      <li><a href="#">Thriller</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Megamenu end     -->
		  
           
            <!-- Log out -->
            <div class="list-inline-item logout"><a id="logout" href="login" class="nav-link">Sair <i class="icon-logout"></i></a></div>
			<!-- End Log out -->
			
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
           
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Início </a></li>
                <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li> -->
                <!-- <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li> -->
                <!-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a> -->
                  <!-- <ul id="exampledropdownDropdown" class="collapse list-unstyled "> -->
                    <!-- <li><a href="#">Page</a></li> -->
                    <!-- <li><a href="#">Page</a></li> -->
                    <!-- <li><a href="#">Page</a></li> -->
                  <!-- </ul> -->
                <!-- </li> -->
                <!-- <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li> -->
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-list-1"></i>Minha lista </a></li>
		  <li> <a href="#"> <i class="icon-chart"></i>Estatisticas </a></li>
          <li> <a href="#"> <i class="icon-light-bulb"></i>Sugestões </a></li>
          <li> <a href="#"> <i class="fas fa-fire"></i>Novidades </a></li>
		  <li> <a href="#"> <i class="far fa-clock"></i>Recentes </a></li>
		  <li> <a href="#"> <i class="fas fa-splotch"></i>Populares </a></li>
		<li><a href="#"> <i class="icon-logout"></i>Sair </a></li>          	
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
	  
	  <div class="container">
            @yield('content')
        </div>

        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <!--<p class="no-margin-bottom">2018 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>-->
            </div>
          </div>
        </footer>
		
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>