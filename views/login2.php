<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="assets/css/nuevo.css" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" />
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
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
                <a href="index.html" class="theme-btn">Volver</a>
              </div>      
            </div>
          </div>
        </div>
        <!-- end of container -->
      </nav>
    </header>
    
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        
        <form action="#">
          <h1>Crear Cuenta</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>o use su correo electrónico para registrarse</span>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Registrar</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#">
          
          <h1> iniciar sesión:</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <a href="#">haz olvidado tu contraseña?</a>
          <button class="ghost2" >Ingresar</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Comenzar!</h1>
            <p>
              Para mantenerse conectado con nosotros, inicie sesión con su información personal
            </p>
            <button class="ghost" id="signIn">iniciar sesión:</button>
          </div>
          <class class="overlay-panel overlay-right">
            <h1>Bienvenidos!</h1>
            <p>Crea Tu Cuenta y visualiza nuestros servicios disponibles:</p>
            <button class="ghost" id="signUp">Crear Cuenta</button>
          </class>
        </div>
        <div>
          
          <a class="volver" href="index.html">Volver</a>
        </div>
      </div>
    </div>

    <footer>
      <p>
        Created with <i class="fa fa-heart"></i> by
        <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
        - Read how I created this and how you can join the challenge
        <a
          target="_blank"
          href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/"
          >here</a
        >.
      </p>
    </footer>
    
    <script src="assets/js/nuevo.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
  </body>
</html>
