<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
<link type="text/css" rel="stylesheet" href="hojav/css/brown.css" />
<link type="text/css" rel="stylesheet" href="hojav//css/print.css" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="hojav/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="hojav/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="hojav/js/cufon.yui.js"></script>
<script type="text/javascript" src="hojav/js/scrollTo.js"></script>
<script type="text/javascript" src="hojav/js/myriad.js"></script>
<script type="text/javascript" src="hojav/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="hojav/js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
<script src="hojav/js/fun.js"></script>
<script src="js/validacionForms.js"></script>

</head>
<body>



<form action="?controller=candidato&method=update"  method="post" onsubmit="return validarCandidato();" id="wizard">

<input type="hidden" name="idCandidato"
 value="<?php echo $data[0]->idCandidato?>" >

<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="imagen/foto_<?php echo  $data[0]->idCandidato?>.jpg?<?php echo rand(0,1000)?>" >
          
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name">Formato Cv <br />
              <span>Welli Colombia S.A.S</span></h1>
            <ul>
              <li class="ad">Zona Rosa, Cl. 83, Bogotá </li>
              <li class="mail">jh@welli.com</li>
              <li class="tel">+57 3214578</li>
              <li class="web">www.welliColombia.com</li>
             
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="#" title="Download .pdf"><img src="hojav/images/icn-save.jpg" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="hojav/images/icn-print.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="Follow me on Twitter"><img src="hojav/images/icn-twitter.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="My Facebook Profile"><img src="hojav/images/icn-facebook.jpg" alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        
        <div class="entry">
          <h2>OBJECTIVO</h2>
          <p>Te Damos la Bienvenida A Nuestra Empresa , por favor Complete Los Siguiente Datos Personales los cuales nos permiten saber tu perfil personal para evaluar las diferentes habilidades personales. </p>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>D. Personales</h2>
          <div class="content">
            <h3>Identificacion</h3>
            <input type="number" id="NumeroIdentificacionCandidato" name="NumeroIdentificacionCandidato" 
            value="<?php echo $data[0]->NumeroIdentificacionCandidato ?>"
            class="form-control" placeholder="c.c" onKeyDown="valida_longitud2()"
            onKeyUp="valida_longitud2()">
          </div>
          <div class="content">
            <h3>Nombre</h3>
            <input type="text"  id="nombreCandidato" name="nombreCandidato"
            value="<?php echo $data[0]->nombreCandidato ?>"
            class="form-control" placeholder="Nombre " onKeyDown="valida_longitud3()"
              onKeyUp="valida_longitud3()">
          
          </div>
          <div class="content">
            <h3>Apellido</h3>
            <input type="text"  id="apellidoCandidato" 
            value="<?php echo $data[0]->apellidoCandidato ?>"
            name="apellidoCandidato" class="form-control" placeholder="apellido"onKeyDown="valida_longitudApe()"
              onKeyUp="valida_longitudApe()">
          </div>
          <div class="content">
            <h3>direccion</h3>
            <input type="text"  id="direccionCandidato" name="direccionCandidato"
            value="<?php echo $data[0]->direccionCandidato ?>"
             class="form-control" placeholder="EJ: cl 137a 153a 50" onKeyDown="valida_longitudDire()"
              onKeyUp="valida_longitudDire()" >
          </div>
          <div class="content">
            <h3>Telefono</h3>
            <input type="number"  id="telefonoCandidato" name="telefonoCandidato" 
            value="<?php echo $data[0]->telefonoCandidato ?>"
            class="form-control" placeholder="Telefono" onKeyDown="valida_longitudTel()"
              onKeyUp="valida_longitudTel()">
          </div>
          <div class="content">
            <h3>Correo</h3>
            <input type="email"  id="emailCandidato" name="emailCandidato"
            value="<?php echo $data[0]->emailCandidato ?>"
             class="form-control" placeholder="..@gmail.com" onKeyDown="valida_longitudEma()"
              onKeyUp="valida_longitudEma()">
          </div>
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>EXPERIENCE</h2>
          <p>En esta parte es necesario aclarar datos de los ultimos empleos, personas los cuales garanticen su labor en la empresa , den una refencia de su perfil  . </p>
          <div class="content">
            <h3>Años de Experiencia</h3>
            <p>Su Años en la empresa a la Cual Genero su Ultimo Servicio <br />
              </p>
            <ul class="info">
              <li>años de experiencia
                <input type="number"  id="anosExperiencia" name="anosExperiencia" 
                value="<?php echo $data[0]->anosExperiencia?>"
                class="form-control" placeholder="años" onKeyDown="valida_longitudAno()"
              onKeyUp="valida_longitudAno()"></li>
              <li>Descripcion de referencia laboral
          
              <input type="text"  id="descripcionReferenciaLaboral" name="descripcionReferenciaLaboral" 
                 value="<?php echo $data[0]->descripcionReferenciaLaboral?>" 
                 class="form-control" placeholder="nombre Referencia Laboral" onKeyDown="valida_longitud21()"
              onKeyUp="valida_longitud21()"
      >
              </li>
              <li>menos de 50 caracteres en Descripcion 
              <input type="text" id=caracteres2 size=4>
            </li>
            </ul>
          </div>
          <div class="content">
            <h3>Datos R.Laboral</h3>
            <p>En esta Parte se debe ser claros con los datos de la persona derefencia laboral , para comunicarnos con ella <br />
              <em>Datos Referencia Laboral</em></p>
            <ul class="info">
              <li>Contacto  referencia Laboral
                <input type="number"  id="contactoReferencia" name="contactoReferencia"
                value="<?php echo $data[0]->contactoReferencia?>" class="form-control" placeholder="Contacto Laboral"onKeyDown="valida_longitudCont()"
              onKeyUp="valida_longitudCont()" ></li>
              <li>direccion referencia Laboral 
                <input type="text"  id="direccionReferencia" name="direccionReferencia" 
                value="<?php echo $data[0]->direccionReferencia?>" 
                class="form-control" placeholder="cl 137a n153a" onKeyDown="valida_longitudDRefe()"
              onKeyUp="valida_longitudDRefe()" >

              <li>nombre referencia Laboral
                 <input type="text"  id="nombreReferencia" name="nombreReferencia" 
                 value="<?php echo $data[0]->nombreReferencia?>" 
                 class="form-control" placeholder="nombre Referencia Laboral" onKeyDown="valida_longitudNRefe()"
                 onKeyUp="valida_longitudNRefe()">
            </li>
           
      
                       
            </ul>
          </div>
        </div>
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        






        <div class="entry">
          <h2>Estudios</h2>
          <p>En Esta Seccion se enfoca en la Vida Academica Del Usuario</p>
          
          <div class="content">
            <h3>Estudios Vida Academica</h3>
            <p>Complete su Informacion Academica <br />
              <em>Academica</em></p>
            <ul class="info">
              
            <li>Estudios Basicos
            
   
            <input type="text"  id="estudios" name="estudios" 
                 value="<?php echo $data[0]->estudios?>" 
                 class="form-control" placeholder="nombre Referencia Laboral"  onKeyDown="valida_longitud5()"
            onKeyUp="valida_longitud5()"
      >
            </li>
            <li>menos de 50 caracteres en estudios
            <input type="text" id=caracteres size=4>
            </li>
            <li>Estudios Segundario(Tecnicos,Tecnologos)
            
            
             <input type="text"  id="estudiosSegundarios" name="estudiosSegundarios" 
                 value="<?php echo $data[0]->estudiosSegundarios?>" 
                 class="form-control" placeholder="nombre Referencia Laboral" 
      >
            </li>
            <li>Estudios Segundario(Tecnicos,Tecnologos)
            
            
             <input type="text"  id="estudiosSuperiores" name="estudiosSuperiores" 
                 value="<?php echo $data[0]->estudiosSuperiores?>" 
                 class="form-control" placeholder="nombre Referencia Laboral" 
      >
            </li>

            <li>Cantidad De Titulos
            
            

             <input type="text"  id="CantidadTitulos" name="CantidadTitulos" 
                 value="<?php echo $data[0]->CantidadTitulos?>" 
                 class="form-control" placeholder="nombre Referencia Laboral" 
              >
            </li>

            <li>Usuario
            <select name="iduser" class="form-control">
			      <option value="">Seleccione</option>
			  	<?php
					  foreach ($usuarios as $usuario) 
				    {
						 if ($usuario->iduser == $data[0]->iduser)
						  {
					?>
								<option selected value="<?php echo $usuario->iduser ?>"><?php echo $usuario->nombreuser?></option>
					<?php
						  } else {
					?>
			 						<option  value="<?php echo $usuario->iduser ?>"><?php echo $usuario->nombreuser?></option>			
					<?php
								 }
				  }
					?>
		     </select>
            </li>            
            </ul>
          </div>
        </div>








        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
      
        </form>
       
      
        <input type="checkbox" id="myCheck">
  
        <!-- Begin 5th Row -->
       </div>
      <div class="clear"></div>
       <div class="paper-bottom"></div>
        <button>Guardar Datos</button>

    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Enviar</a></div>


<!-- End Wrapper -->
</body>
</html>
