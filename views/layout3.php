<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="au theme template" />
    <meta name="author" content="Hau Nguyen" />
    <meta name="keywords" content="au theme template" />

    <!-- Title Page-->
    <title>Menu</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all" />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-5/css/fontawesome-all.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Bootstrap CSS-->
    <link
      href="vendor/bootstrap-4.1/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="assets/css/cambiodeestado.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Vendor CSS-->
    <link
      href="vendor/animsition/animsition.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet"
      media="all"
    />
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all" />
    <link
      href="vendor/css-hamburgers/hamburgers.min.css"
      rel="stylesheet"
      media="all"
    />
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all" />
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/perfect-scrollbar/perfect-scrollbar.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all" />

    
  </head>

  <body class="animsition" onload="mueveReloj()">
  <?php
    if ($_SESSION['user']->idcargo == 1) {
      
    
  ?>
  

    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a href="index.html" class="logo" 
              onmouseover="window.document['imagen1'].src = iluminada.src"
              onmouseout="window.document['imagen1'].src = apagada.src"
              >
                <img src="images/icon/welly.png" alt="CoolAdmin" name="imagen1"/>
              </a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li class="has-sub">
                <a class="js-arrow" href="?controller=area">
                  <i class="fas fa-tachometer-alt"></i>Areas</a
                >
              </li>
              <li>
                <a href="?controller=candidato">
                  <i class="fas fa-chart-bar"></i>Candidatos</a
                >
              </li>
              <li>
                <a href="table.html"> <i class="fas fa-table"></i>Tables</a>
              </li>
              <li>
                <a href="form.html">
                  <i class="far fa-check-square"></i>Forms</a
                >
              </li>
              <li>
                <a href="calendar.html">
                  <i class="fas fa-calendar-alt"></i>Calendar</a
                >
              </li>
              <li>
                <a href="map.html">
                  <i class="fas fa-map-marker-alt"></i>Maps</a
                >
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-copy"></i>Pages</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="login.html">Login</a>
                  </li>
                  <li>
                    <a href="register.html">Register</a>
                  </li>
                  <li>
                    <a href="forget-pass.html">Forget Password</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-desktop"></i>UI Elements</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="button.html">Button</a>
                  </li>
                  <li>
                    <a href="badge.html">Badges</a>
                  </li>
                  <li>
                    <a href="tab.html">Tabs</a>
                  </li>
                  <li>
                    <a href="card.html">Cards</a>
                  </li>
                  <li>
                    <a href="alert.html">Alerts</a>
                  </li>
                  <li>
                    <a href="progress-bar.html">Progress Bars</a>
                  </li>
                  <li>
                    <a href="modal.html">Modals</a>
                  </li>
                  <li>
                    <a href="switch.html">Switchs</a>
                  </li>
                  <li>
                    <a href="grid.html">Grids</a>
                  </li>
                  <li>
                    <a href="fontawesome.html">Fontawesome Icon</a>
                  </li>
                  <li>
                    <a href="typo.html">Typography</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
            <img src="images/icon/welly.png" alt="Cool Admin" />
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-window-restore"></i>Areas</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  
                  <li>
                    <a href="?controller=area">Todas</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="?controller=candidato">
                  <i class="fa fa-address-book"></i>Candidatos</a
                >
              </li>

              <li>
                <a href="?controller=status"> <i class="fas fa-toggle-on"></i>Estados </a>
              </li>
              <li>
                <a href="?controller=type_status"> <i class="fas fa-plus-circle"></i>Tipos Estados</a>
              </li>
              <li>
                <a href="?controller=cliente">
                  <i class="fas fa-user-plus"></i>Clientes</a
                >
              </li>
              <li>
                <a href="?controller=Recurso"> <i class="fas fa-user"></i>Recursos H.</a>
              </li>
              <li>
                <a href="?controller=empleado"> <i class="fas fa-users"></i>Empleados</a>
              </li>
              <li>
                <a href="?controller=servicio">
                  <i class="fas fa-truck"></i>Servicios</a
                >
              </li>
              <li>
                <a href="?controller=factura"> <i class="fas fa-envelope"></i>Facturas</a>
              </li>
              <li>
                <a href="?controller=cargo"> <i class="fas fa fa-sitemap"></i>Cargos</a>
              </li>
              <li>
                <a href="?controller=oferta"> <i class="fas fa fa-info"></i>Ofertas</a>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-credit-card"></i>Pagos</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="?controller=pago">Todos</a>
                  </li>
                  <li>
                    <a href="?controller=pago&method=new">Registrar</a>
                  </li>
                </ul>
              </li>
               <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-user-circle"></i>Usuarios</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="?controller=usuario">Todos</a>
                  </li>
                  
                </ul>
              </li>
              
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <div>
                <button class="switch" id="switch"> 
                  <span><i class="fa fa-sun-o" aria-hidden="true"></i></span>
                  <span><i class="fa fa-moon-o" aria-hidden="true"></i></span>
                </button>
                </div>
                
                <form name="form_reloj">
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                  <input class="reloj" type="text" name="reloj" size="10">
                </form>
                <form class="form-header" action="" method="POST"></form>

                <div class="header-button">
                  <div class="noti-wrap">
                    <div class="noti__item js-item-menu">
                      <i class="zmdi zmdi-notifications"></i>
                      <span class="quantity">3</span>
                      <div class="notifi-dropdown js-dropdown">
                      
                        
                          
                        <div class="notifi__title">
                          <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c1 img-cir img-40">
                            <i class="zmdi zmdi-email-open"></i>
                          </div>
                          <div class="content">
                            <p>You got a email notification</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c2 img-cir img-40">
                            <i class="zmdi zmdi-account-box"></i>
                          </div>
                          <div class="content">
                            <p>Your account has been blocked</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c3 img-cir img-40">
                            <i class="zmdi zmdi-file-text"></i>
                          </div>
                          <div class="content">
                            <p>You got a new file</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__footer">
                          <a href="#">All notifications</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#"><h5><?php echo $_SESSION['user']->nombreuser?></h5></a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                              <img
                                src="images/icon/avatar-01.jpg"
                                alt="John Doe"
                              />
                            </a>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#"><h5><?php echo $_SESSION['user']->nombreuser?></h5></a>
                            </h5>
                            <span class="email"><h6><?php echo $_SESSION['user']->cargo?></h6></span>
                          </div>
                        </div>
                        <div class="account-dropdown__body">
                          <div class="account-dropdown__item">
                            <a href="#"><h5><?php echo $_SESSION['user']->emailuser?></h5></a>
                          </div>
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-settings"></i>Setting</a
                            >
                          </div>
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-money-box"></i>Billing</a
                            >
                          </div>
                        </div>
                        <div class="account-dropdown__footer">
                          <a href="?controller=login&method=logout"> <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="overview-wrap">
                    
                  </div>
                </div>
              </div>

            
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>
    </div>

    <?php
    }elseif ($_SESSION['user']->idcargo == 2) {
   
 
    ?>


<div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a href="index.html" class="logo" 
              onmouseover="window.document['imagen1'].src = iluminada.src"
              onmouseout="window.document['imagen1'].src = apagada.src"
              >
                <img src="images/icon/welly.png" alt="CoolAdmin" name="imagen1"/>
              </a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li class="has-sub">
                <a class="js-arrow" href="?controller=area">
                  <i class="fas fa-tachometer-alt"></i>Areas</a
                >
              </li>
              
              
              
             
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
            <img src="images/icon/welly.png" alt="Cool Admin" />
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-window-restore"></i>Areas</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  
                  <li>
                    <a href="?controller=area">Todas</a>
                  </li>
                </ul>
              </li>
              

             
              
              <li>
                <a href="?controller=cliente">
                  <i class="fas fa-user-plus"></i>Clientes</a
                >
              </li>
               <li>
                <a href="?controller=servicio">
                  <i class="fas fa-truck"></i>Servicios</a
                >
              </li>
              </li>
             
               <li>
                <a href="?controller=factura"> <i class="fas fa-envelope"></i>Facturas</a>
              </li>
              
               
               <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-user-circle"></i>Usuarios</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="?controller=usuario">Todos</a>
                  </li>
                  
                </ul>
              </li>
              
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <div>
                <button class="switch" id="switch"> 
                  <span><i class="fa fa-sun-o" aria-hidden="true"></i></span>
                  <span><i class="fa fa-moon-o" aria-hidden="true"></i></span>
                </button>
                </div>
                
                <form name="form_reloj">
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                  <input class="reloj" type="text" name="reloj" size="10">
                </form>
                <form class="form-header" action="" method="POST"></form>

                <div class="header-button">
                  <div class="noti-wrap">
                    <div class="noti__item js-item-menu">
                      <i class="zmdi zmdi-notifications"></i>
                      <span class="quantity">3</span>
                      <div class="notifi-dropdown js-dropdown">
                      
                        
                          
                        <div class="notifi__title">
                          <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c1 img-cir img-40">
                            <i class="zmdi zmdi-email-open"></i>
                          </div>
                          <div class="content">
                            <p>You got a email notification</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c2 img-cir img-40">
                            <i class="zmdi zmdi-account-box"></i>
                          </div>
                          <div class="content">
                            <p>Your account has been blocked</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c3 img-cir img-40">
                            <i class="zmdi zmdi-file-text"></i>
                          </div>
                          <div class="content">
                            <p>You got a new file</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__footer">
                          <a href="#">All notifications</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#"><h5><?php echo $_SESSION['user']->nombreuser?></h5></a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                              <img
                                src="images/icon/avatar-01.jpg"
                                alt="John Doe"
                              />
                            </a>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#"><h5><?php echo $_SESSION['user']->nombreuser?></h5></a>
                            </h5>
                            <span class="email"><h6><?php echo $_SESSION['user']->cargo?></h6></span>
                          </div>
                        </div>
                        <div class="account-dropdown__body">
                          <div class="account-dropdown__item">
                            <a href="#"><h5><?php echo $_SESSION['user']->emailuser?></h5></a>
                          </div>
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-settings"></i>Setting</a
                            >
                          </div>
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-money-box"></i>Billing</a
                            >
                          </div>
                        </div>
                        <div class="account-dropdown__footer">
                          <a href="?controller=login&method=logout"> <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="overview-wrap">
                    
                  </div>
                </div>
              </div>

            
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>
    </div>



















    <?php
     }elseif ($_SESSION['user']->idcargo == 3) {
    ?>










<div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a href="index.html" class="logo" 
              onmouseover="window.document['imagen1'].src = iluminada.src"
              onmouseout="window.document['imagen1'].src = apagada.src"
              >
                <img src="images/icon/welly.png" alt="CoolAdmin" name="imagen1"/>
              </a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li class="has-sub">
                <a class="js-arrow" href="?controller=area">
                  <i class="fas fa-tachometer-alt"></i>Areas</a
                >
              </li>
              
              
              
             
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
            <img src="images/icon/welly.png" alt="Cool Admin" />
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
             
              

             
              
            
               <li>
                <a href="?controller=servicio">
                  <i class="fas fa-truck"></i>Servicios</a
                >
              </li>
               <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-credit-card"></i>Pagos</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="?controller=pago">Todos</a>
                  </li>
                  <li>
                    <a href="?controller=pago&method=new">Registrar</a>
                  </li>
                </ul>
              </li>
             
               <li>
                <a href="?controller=factura"> <i class="fas fa-envelope"></i>Facturas</a>
              </li>
              
               
              
              
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <div>
                <button class="switch" id="switch"> 
                  <span><i class="fa fa-sun-o" aria-hidden="true"></i></span>
                  <span><i class="fa fa-moon-o" aria-hidden="true"></i></span>
                </button>
                </div>
                
                <form name="form_reloj">
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                  <input class="reloj" type="text" name="reloj" size="10">
                </form>
                <form class="form-header" action="" method="POST"></form>

                <div class="header-button">
                  <div class="noti-wrap">
                    <div class="noti__item js-item-menu">
                      <i class="zmdi zmdi-notifications"></i>
                      <span class="quantity">3</span>
                      <div class="notifi-dropdown js-dropdown">
                      
                        
                          
                        <div class="notifi__title">
                          <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c1 img-cir img-40">
                            <i class="zmdi zmdi-email-open"></i>
                          </div>
                          <div class="content">
                            <p>You got a email notification</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c2 img-cir img-40">
                            <i class="zmdi zmdi-account-box"></i>
                          </div>
                          <div class="content">
                            <p>Your account has been blocked</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c3 img-cir img-40">
                            <i class="zmdi zmdi-file-text"></i>
                          </div>
                          <div class="content">
                            <p>You got a new file</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__footer">
                          <a href="#">All notifications</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#"><h5><?php echo $_SESSION['user']->nombreuser?></h5></a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                              <img
                                src="images/icon/avatar-01.jpg"
                                alt="John Doe"
                              />
                            </a>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#"><h5><?php echo $_SESSION['user']->nombreuser?></h5></a>
                            </h5>
                            <span class="email"><h6><?php echo $_SESSION['user']->cargo?></h6></span>
                          </div>
                        </div>
                        <div class="account-dropdown__body">
                          <div class="account-dropdown__item">
                            <a href="#"><h5><?php echo $_SESSION['user']->emailuser?></h5></a>
                          </div>
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-settings"></i>Setting</a
                            >
                          </div>
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-money-box"></i>Billing</a
                            >
                          </div>
                        </div>
                        <div class="account-dropdown__footer">
                          <a href="?controller=login&method=logout"> <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="overview-wrap">
                    
                  </div>
                </div>
              </div>

            
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>
    </div>








    <?php
    }elseif ($_SESSION['user']->idcargo == 4) {

    ?>


    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a href="index.html" class="logo" 
              onmouseover="window.document['imagen1'].src = iluminada.src"
              onmouseout="window.document['imagen1'].src = apagada.src"
              >
                <img src="images/icon/welly.png" alt="CoolAdmin" name="imagen1"/>
              </a>
              <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li class="has-sub">
                <a class="js-arrow" href="?controller=area">
                  <i class="fas fa-tachometer-alt"></i>Areas</a
                >
              </li>
              <li>
                <a href="?controller=candidato">
                  <i class="fas fa-chart-bar"></i>Candidatos</a
                >
              </li>
              <li>
                <a href="table.html"> <i class="fas fa-table"></i>Tables</a>
              </li>
              <li>
                <a href="form.html">
                  <i class="far fa-check-square"></i>Forms</a
                >
              </li>
              <li>
                <a href="calendar.html">
                  <i class="fas fa-calendar-alt"></i>Calendar</a
                >
              </li>
              <li>
                <a href="map.html">
                  <i class="fas fa-map-marker-alt"></i>Maps</a
                >
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-copy"></i>Pages</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="login.html">Login</a>
                  </li>
                  <li>
                    <a href="register.html">Register</a>
                  </li>
                  <li>
                    <a href="forget-pass.html">Forget Password</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-desktop"></i>UI Elements</a
                >
                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                  <li>
                    <a href="button.html">Button</a>
                  </li>
                  <li>
                    <a href="badge.html">Badges</a>
                  </li>
                  <li>
                    <a href="tab.html">Tabs</a>
                  </li>
                  <li>
                    <a href="card.html">Cards</a>
                  </li>
                  <li>
                    <a href="alert.html">Alerts</a>
                  </li>
                  <li>
                    <a href="progress-bar.html">Progress Bars</a>
                  </li>
                  <li>
                    <a href="modal.html">Modals</a>
                  </li>
                  <li>
                    <a href="switch.html">Switchs</a>
                  </li>
                  <li>
                    <a href="grid.html">Grids</a>
                  </li>
                  <li>
                    <a href="fontawesome.html">Fontawesome Icon</a>
                  </li>
                  <li>
                    <a href="typo.html">Typography</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
            <img src="images/icon/welly.png" alt="Cool Admin" />
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-window-restore"></i>Areas</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  
                  <li>
                    <a href="?controller=area">Todas</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="?controller=candidato">
                  <i class="fa fa-address-book"></i>Candidatos</a
                >
              </li>

            
             
              
             
              <li>
                <a href="?controller=empleado"> <i class="fas fa-users"></i>Empleados</a>
              </li>
             
              
              <li>
                <a href="?controller=cargo"> <i class="fas fa fa-sitemap"></i>Cargos</a>
              </li>
              <li>
                <a href="?controller=oferta"> <i class="fas fa fa-info"></i>Ofertas</a>
              </li>
             
               <li class="has-sub">
                <a class="js-arrow" href="#">
                  <i class="fas fa-user-circle"></i>Usuarios</a
                >
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                  <li>
                    <a href="?controller=usuario">Todos</a>
                  </li>
                  
                </ul>
              </li>
              
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <div>
                <button class="switch" id="switch"> 
                  <span><i class="fa fa-sun-o" aria-hidden="true"></i></span>
                  <span><i class="fa fa-moon-o" aria-hidden="true"></i></span>
                </button>
                </div>
                
                <form name="form_reloj">
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                  <input class="reloj" type="text" name="reloj" size="10">
                </form>
                <form class="form-header" action="" method="POST"></form>

                <div class="header-button">
                  <div class="noti-wrap">
                    <div class="noti__item js-item-menu">
                      <i class="zmdi zmdi-notifications"></i>
                      <span class="quantity">3</span>
                      <div class="notifi-dropdown js-dropdown">
                      
                        
                          
                        <div class="notifi__title">
                          <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c1 img-cir img-40">
                            <i class="zmdi zmdi-email-open"></i>
                          </div>
                          <div class="content">
                            <p>You got a email notification</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c2 img-cir img-40">
                            <i class="zmdi zmdi-account-box"></i>
                          </div>
                          <div class="content">
                            <p>Your account has been blocked</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__item">
                          <div class="bg-c3 img-cir img-40">
                            <i class="zmdi zmdi-file-text"></i>
                          </div>
                          <div class="content">
                            <p>You got a new file</p>
                            <span class="date">April 12, 2018 06:50</span>
                          </div>
                        </div>
                        <div class="notifi__footer">
                          <a href="#">All notifications</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image">
                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#"><h5><?php echo $_SESSION['user']->nombreuser?></h5></a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                              <img
                                src="images/icon/avatar-01.jpg"
                                alt="John Doe"
                              />
                            </a>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#"><h5><?php echo $_SESSION['user']->nombreuser?></h5></a>
                            </h5>
                            <span class="email"><h6><?php echo $_SESSION['user']->cargo?></h6></span>
                          </div>
                        </div>
                        <div class="account-dropdown__body">
                          <div class="account-dropdown__item">
                            <a href="#"><h5><?php echo $_SESSION['user']->emailuser?></h5></a>
                          </div>
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-settings"></i>Setting</a
                            >
                          </div>
                          <div class="account-dropdown__item">
                            <a href="#">
                              <i class="zmdi zmdi-money-box"></i>Billing</a
                            >
                          </div>
                        </div>
                        <div class="account-dropdown__footer">
                          <a href="?controller=login&method=logout"> <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="overview-wrap">
                    
                  </div>
                </div>
              </div>

            
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>
    </div>








    <?php
    }
    ?>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/modooscuro.js"></script>
  </body>
</html>
<!-- end document-->
