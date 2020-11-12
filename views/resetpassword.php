<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="assets/css/nuevo.css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icons/">



    <link rel="icon" type="image/png" href="imageslogin/icons/favicon.ico"/>
<!--===============================================================================================-->
  
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fontslogin/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fontslogin/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendorlogin/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendorlogin/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendorlogin/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendorlogin/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendorlogin/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
   
    <style>
      body{
            background-image: url(assets/images/login.jpg);

            background-repeat: no-repeat;
            background-size: auto 100%;

            background-attachment:fixed;

      }
    </style>
  </head>
  <body>
    <header id="header" class="site-header header-style-2">
      <nav class="navigation navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="open-btn">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-2.html"
              ><img src="assets/images/welly.png" alt
            /></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse navigation-holder">
            <button class="close-navbar"><i class="ti-close"></i></button>
            <ul class="nav navbar-nav">
              
              <li><a href="about.html">Nosotros</a></li>
              <li class="menu-item-has-children">
                <a href="#">Paginas</a>
                <ul class="sub-menu">
                  <li><a href="about.html">Nosotros</a></li>
                  <li><a href="contact.html">Contactos</a></li>
                  <li><a href="testimonials.html">Testimonios</a></li>
                  
                  <li><a href="team.html">Profesionales</a></li>
                  
                  
                  <li><a href="shop.html">Servicios</a></li>
               
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Servicios</a>
                <ul class="sub-menu">
                  <li><a href="services.html">Services</a></li>
                 
                    <a href="service-single.html">Instalaciones</a>
                  </li>
                  <li>
                    <a href="shop.html">Tipos de Trabajos</a>
                  </li>
                  
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Proyectos</a>
                <ul class="sub-menu">
                  
                  <li><a href="services.html">Nuestros Trabajos</a></li>
                  
                </ul>
              </li>
             
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
          <!-- end of nav-collapse -->

          <div class="search-contact">
            <div class="header-search-area">
              <div class="header-search-form">
                <form class="form">
                  <div>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search here"
                    />
                  </div>
                  <button type="submit" class="btn">
                    <i class="ti-search"></i>
                  </button>
                </form>
              </div>
              
            </div>
            <div class="contact">
              <div class="call">
                <a href="?controller=Home" class="theme-btn">Volver</a>
              </div>      
            </div>
          </div>
        </div>
        <!-- end of container -->
      </nav>
    </header>
    
    <div class="limiter">
    <div class="container-login100" >
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
        <form action="?controller=usuario&method=resetpassword" method="post" class="login100-form validate-form">

      


          <span class="login100-form-title p-b-49">
           Cambiar Contraseña
          </span>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Ingresar Email">

            <span class="label-input100">Contraseña Actual</span>
            <input class="input100" type="password" name="claveactual" placeholder="Actual">
          
          </div>

          <div  class="wrap-input100 validate-input" data-validate="Ingresar Contraseña">
            <span class="label-input100">Nueva Contraseña<i class=" fa fa-eye" id="show"></i></span>

            <input id="contrasena"  class="input100" type="password" name="clavenueva" placeholder="*****">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
          </div>
          
          <div class="text-right p-t-4 p-b-31">
          <button type="submit" class="loginhny-btn btn" name="editar">Cambiar</button>
          </div>
             
         
          
    
        </form>
      </div>
    </div>
  </div>

    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/boojs"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>

    <script src="vendorlogin/jquery/jquery-3.2.1.min.js"></script>


<!--===============================================================================================-->
  <script src="vendorlogin/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendorlogin/bootstrap/js/popper.js"></script>
  <script src="vendorlogin/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendorlogin/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendorlogin/daterangepicker/moment.min.js"></script>
  <script src="vendorlogin/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendorlogin/countdowntime/countdowntime.js"></script>
<!--=======================================================
    -->
    <script src="js/mainLogin.js"></script>
    <script type="text/javascript" src="js/validacionForms.js"></script>
  </body>
</html>
