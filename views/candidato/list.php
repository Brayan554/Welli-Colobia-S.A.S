<html>
	<head>

		<title>Candidatos</title>


		<script type="text/javascript" src="Datatable/js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="Datatable/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="Datatable/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="Datatable/js/tablas.js"></script>
		<script type="text/javascript" src="js/validacionForms.js"></script>
	    <script src="js/jquery.steps.js"></script>
      <script src="js/form.js"></script>


		<link rel="stylesheet" type="text/css" href="Datatable/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="Datatable/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/modalcss/modal.css">
		<link
      	rel="stylesheet"
      	href="fonts/material-design-iconic-font/css/material-design-iconic-font.css"
   		/>
   		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css" />
   		<link rel="stylesheet" href="css/style.css" />
   		<style>
			.boton{
				margin: -5% auto auto 90%;			
			}

			th {

			}
		</style>
	</head>
<body>

	<main class="container">
	<section class="row col-md-12 offset-md-0 col-sm-11 offset-sm-1  border rounded p-3 bg-white">

		<h2 class="font-family">Candidatos</h2>
		<div class="boton">
		
		
		<!-- <a href="?controller=candidato&method=new" class="btn btn-success"><i class="fa fa-address-book" aria-hidden="true"></i></a>	 -->
		<button  class="btn btn-danger" onclick="ventanaSecundaria('http://localhost/NuevoWelli/?controller=candidato&method=new')"><i class="fa fa-print" aria-hidden="true"></i></button>
		<button  class="btn btn-primary" onclick="ventanaSecundaria('http://localhost/NuevoWelli/hojav/grafica.php')"><i class="fa fa-bar-chart" aria-hidden="true"></i></button>
			<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-address-book" aria-hidden="true"></i></button> -->

		
		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
	<?php
		if( $_SESSION['user']->idcargo == 1 || $_SESSION['user']->idcargo == 4 ){

		
	?>		
	<table id="data" class="display responsive nowrap"   style="width:100%">
        <thead>
             <tr>
			 	  <th>Candidato</th>
				  <th></th>
			      <th>#</th>
			      <th>Identificacion</th>
			      <th>Nombres</th>
			      <th>Apellidos</th>
			      <th>Direccion</th>
			      <th>Telefono</th>
			      <th>Email</th>
			      <th>años Experiencia</th>
			      <th>descripcion Referencia Laboral</th>
			      <th>contacto Referencia</th>
			      <th>direccion Referencia</th>
			      <th>nombre Referencia</th>
			      <th>estudios</th>
			      <th>Usuario</th>
			      <th>Estado</th>
			      <th>Acciones</th>
				  <th>Cambiar Foto</th>
			</tr>
        </thead>
        <tbody>
						
            <?php foreach ($candidatos as $candidato) : ?> 

						
						
			    <tr>
				  <td>
				  	<img src="imagen/foto_<?php echo $candidato->idCandidato?>.jpg?<?php echo rand(0,1000)?> " width="70px" height="50px" >
				  <td>
			      <td><?php echo $candidato->idCandidato?></td>
			      <td><?php echo $candidato->NumeroIdentificacionCandidato?></td>
			      <td><?php echo $candidato->nombreCandidato?></td>
			      <td><?php echo $candidato->apellidoCandidato?></td>
			      <td><?php echo $candidato->direccionCandidato?></td>
			      <td><?php echo $candidato->telefonoCandidato?></td>
			      <td><?php echo $candidato->emailCandidato?></td>
			      <td><?php echo $candidato->anosExperiencia?></td>
			      <td><?php echo $candidato->descripcionReferenciaLaboral?></td>
			      <td><?php echo $candidato->contactoReferencia?></td>
			      <td><?php echo $candidato->direccionReferencia?></td>
			      <td><?php echo $candidato->nombreReferencia?></td>
			      <td><?php echo $candidato->estudios?></td>
			       <td><?php echo $candidato->nombreuser?></td>
			      <td><?php echo $candidato->nombreEstado?></td>
			      <td>
			      	<a type="button" data-toggle="modal" data-target="#exampleModal<?php echo $candidato->idCandidato?>" href="?controller=candidato&method=edit&idCandidato=<?php echo $candidato->idCandidato?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>


			      	<a href="?controller=candidato&method=delete&idCandidato=
							  <?php echo $candidato->idCandidato ?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>

							 
				<a href="?controller=candidato&method=editFormatoHJ&idCandidato=<?php
			    	echo $candidato->idCandidato?>" class="btn btn-danger"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

				<a href="?controller=calificar&method=editFormatoHJ&idCandidato=<?php
			    	echo $candidato->idCandidato?>" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a>


						
			      </td>
				  <td>
							<form action="?controller=candidato&method=save1" enctype="multipart/form-data" method="post" >
										<div>

											<input type="hidden" name="idCandidato" value=<?php echo $candidato->idCandidato?>>
											<input type="hidden"  id="NumeroIdentificacionCandidato" name="NumeroIdentificacionCandidato" value=<?php echo $candidato->NumeroIdentificacionCandidato?>>
											<input type="hidden"  id="nombreCandidato" name="nombreCandidato" value=<?php echo $candidato->nombreCandidato?>>
											<input type="hidden"  id="apellidoCandidato" name="apellidoCandidato" value=<?php echo $candidato->apellidoCandidato?>>
											<input type="hidden"  id="direccionCandidato" name="direccionCandidato" value=<?php echo $candidato->direccionCandidato?>>
											<input type="hidden"  id="telefonoCandidato" name="telefonoCandidato" value=<?php echo $candidato->telefonoCandidato?>>
											<input type="hidden"  id="emailCandidato" name="emailCandidato" value=<?php echo $candidato->emailCandidato?>>
											<input type="hidden"  id="anosExperiencia" name="anosExperiencia" value=<?php echo $candidato->anosExperiencia?>>
											<input type="hidden"  id="descripcionReferenciaLaboral" name="descripcionReferenciaLaboral" value=<?php echo $candidato->descripcionReferenciaLaboral?>>
											<input type="hidden"  id="contactoReferencia" name="contactoReferencia" value=<?php echo $candidato->contactoReferencia?>>
											<input type="hidden"  id="direccionReferencia" name="direccionReferencia" value=<?php echo $candidato->direccionReferencia?>>
											<input type="hidden"  id="nombreReferencia" name="nombreReferencia" value=<?php echo $candidato->nombreReferencia?>>
											<input type="hidden"  id="estudios" name="estudios" value=<?php echo $candidato->estudios?>>
											<input type="hidden"  id="estudiosSegundarios" name="estudiosSegundarios" value=<?php echo $candidato->estudiosSegundarios?>>
											<input type="hidden"  id="estudiosSuperiores" name="estudiosSuperiores" value=<?php echo $candidato->estudiosSuperiores?>>
											<input type="hidden"  id="CantidadTitulos" name="CantidadTitulos" value=<?php echo $candidato->CantidadTitulos?>>
											


											<strong>Imagen</strong></br>
											<input type="file" name="imagen" id="imagen"></br></br>
											<button type="submit">Actualizar </button>
									
										</div>
							</form></br></br>
					</td>
			      	
			     
			      

			    </tr>
			  
			  <?php endforeach?>
        	</tbody>
    	</table>

			<?php
			}elseif($_SESSION['user']->idcargo == 3 || $_SESSION['user']->idcargo == 2){

			
			?>
				<table id="data" class="display responsive nowrap"   style="width:100%">
        <thead>
             <tr>
			 	  <th>Candidato</th>
				  <th></th>
			      <th>#</th>
			      <th>Identificacion</th>
			      <th>Nombres</th>
			      <th>Apellidos</th>
			      <th>Direccion</th>
			      <th>Telefono</th>
			      <th>Email</th>
			      <th>años Experiencia</th>
			      <th>descripcion Referencia Laboral</th>
			      <th>contacto Referencia</th>
			      <th>direccion Referencia</th>
			      <th>nombre Referencia</th>
				  <th>estudios</th>
				  <th>Estudios Secundarios</th>
				  <th>Estudios Superiores</th>
				  <th>Cantidad de Titulos</th>
			      <th>Usuario</th>
			      <th>Estado</th>
			      <th>Acciones</th>
				  <th>mas</th>
				  <th>Prueba Cambio</th>
			</tr>
        </thead>
        <tbody>
						
            <?php foreach ($candidatos as $candidato) : ?> 

						<?php
							if($_SESSION['user']->iduser == $candidato->iduser){

							

							
						?>

							
						
			    <tr>
				   
				  <td>
				  	<img src="imagen/foto_<?php echo $candidato->idCandidato?>.jpg?<?php echo rand(0,1000)?> " width="70px" height="50px" >
				  <td>
			      <td><?php echo $candidato->idCandidato?></td>
			      <td><?php echo $candidato->NumeroIdentificacionCandidato?></td>
			      <td><?php echo $candidato->nombreCandidato?></td>
			      <td><?php echo $candidato->apellidoCandidato?></td>
			      <td><?php echo $candidato->direccionCandidato?></td>
			      <td><?php echo $candidato->telefonoCandidato?></td>
			      <td><?php echo $candidato->emailCandidato?></td>
			      <td><?php echo $candidato->anosExperiencia?></td>
			      <td><?php echo $candidato->descripcionReferenciaLaboral?></td>
			      <td><?php echo $candidato->contactoReferencia?></td>
			      <td><?php echo $candidato->direccionReferencia?></td>
			      <td><?php echo $candidato->nombreReferencia?></td>
				  <td><?php echo $candidato->estudios?></td>
				  <td><?php echo $candidato->estudiosSegundarios?></td>
				  <td><?php echo $candidato->estudiosSuperiores?></td>
				  <td><?php echo $candidato->CantidadTitulos?></td>
			       <td><?php echo $candidato->nombreuser?></td>
			      <td><?php echo $candidato->nombreEstado?></td>
			      <td>
			      	<a type="button" data-toggle="modal" data-target="#exampleModal<?php echo $candidato->idCandidato?>" href="?controller=candidato&method=edit&idCandidato=<?php echo $candidato->idCandidato?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							


			      	<a href="?controller=candidato&method=delete&idCandidato=
					      	<?php echo $candidato->idCandidato ?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      </td>
						<td>
						<a href="?controller=candidato&method=editFormatoHJ&idCandidato=<?php
			      	echo $candidato->idCandidato?>" class="btn btn-primary">Editar</a>
						</td>
					<td>
							<form action="?controller=candidato&method=save1" enctype="multipart/form-data" method="post" >
										<div>

											<input type="hidden" name="idCandidato" value=<?php echo $candidato->idCandidato?>>
											
											<strong>Imagen</strong></br>
											<input type="file" name="imagen" id="imagen"></br></br>
											<button type="submit">Actualizar </button>
									
										</div>
							</form></br></br>
					</td>

						

			      	
			     
			      

			    </tr>

				
						<?php
						}
						?>
			  <?php endforeach?>
        	</tbody>
    	</table>
			<?php
				}
			?>

	  </section>

	</section>

			<?php
				foreach ($candidatos as $candidato) :
					include 'edit.php';
			?>
			<?php
				endforeach
			?>


<section>
		
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
    <div class="wrapper">
      <form action="?controller=candidato&method=save"  method="post" onsubmit="return validarCandidato();" id="wizard">
        <!-- SECTION 1 -->
        <h4></h4>
        <section>
          <h3>Datos Basicos</h3>
          <div class="form-row">
            <div class="form-holder w-100">
              <i class="zmdi zmdi-account"></i>
              <input type="number"  id="NumeroIdentificacionCandidato" name="NumeroIdentificacionCandidato" class="form-control" placeholder="c.c" required>
              
            </div>
            <div class="form-holder w-100">
              <i class="zmdi zmdi-account"></i>
              <input type="text"  id="nombreCandidato" name="nombreCandidato" class="form-control" placeholder="Nombre " required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-holder w-100">
              <i class="zmdi zmdi-account-box-o"></i>
              <input type="text"  id="apellidoCandidato" name="apellidoCandidato" class="form-control" placeholder="apellido" required>
            </div>
            <div class="form-holder w-100">

              <i class="zmdi zmdi-pin"></i>
              <input type="text"  id="direccionCandidato" name="direccionCandidato" class="form-control" placeholder="EJ: cl 137a 153a 50"  required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-holder w-100">
              <i class="zmdi zmdi-smartphone-android"></i>
             <input type="number"  id="telefonoCandidato" name="telefonoCandidato" class="form-control" placeholder="Telefono" required>
            </div>
            <div class="form-group">
              <div class="form-holder w-100">
                <i class="zmdi zmdi-email"></i>
                <input type="email"  id="emailCandidato" name="emailCandidato" class="form-control" placeholder="..@gmail.com" required>
              </div>
              <div class="form-holder w-100">
                <i class="zmdi zmdi-plus-1"></i>
                <input type="number"  id="anosExperiencia" name="anosExperiencia" class="form-control" placeholder="años" required>
              </div>
            </div>
          </div>
         
        </section>

        <!-- SECTION 2 -->
        <h4></h4>
        <section>
          <h3>Referencia Laboral</h3>
          <div class="form-row">
            <div class="form-holder w-100">
              <textarea class="form-control" rows="3"  id="descripcionReferenciaLaboral" name="descripcionReferenciaLaboral" placeholder="Descripcion Referencia Laboral"></textarea required>
              <i class="zmdi zmdi-comment"></i>
            </div>
          </div>
          <div class="form-row">
            <div class="form-holder w-100">
              <input type="number"  id="contactoReferencia" name="contactoReferencia" class="form-control" placeholder="Contacto Laboral" required>
              <i class="zmdi zmdi-smartphone"></i>
            </div>
          </div>
          <div class="form-row">
            <div class="form-holder w-100">
              <input type="text"  id="direccionReferencia" name="direccionReferencia" class="form-control" placeholder="cl 137a n153a" required>
              <i class="zmdi zmdi-globe-alt"></i>
            </div>
          </div>
          <div class="form-row">
            <div class="form-holder w-100">
             <input type="text"  id="nombreReferencia" name="nombreReferencia" class="form-control" placeholder="nombre Referencia Laboral" required>
              <i class="zmdi zmdi-accounts-alt"></i>
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-holder w-100">
               <textarea class="form-control" rows="3"  id="estudios" name="estudios" placeholder="Estudios" required></textarea>
              <i class="zmdi zmdi-graduation-cap"></i>
            </div>
          </div>

          <div class="form-row">
            <div class="form-holder w-100">
          <select  id="iduser" name="iduser" class="form-control" required>
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
				 <i class="zmdi zmdi-account"></i> 
				 </div>
          </div>

        </section>

        <!-- SECTION 3 -->
				
				<!-- SECTION 4 -->
				<button class="btn btn-warning"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
      </form>
    </div>
    </div>
  </div>
</div>
	</section>






















	<!-- <section>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Nuevo Candidato</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span onclick="window.location.href='?controller=candidato'" aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

		        <form action="?controller=candidato&method=save"        method="post" onsubmit="return validarCandidato();">
								<div class="form-group">
									<label># Identificacion</label>
									<input type="number"  id="NumeroIdentificacionCandidato" name="NumeroIdentificacionCandidato" class="form-control" placeholder="c.c" required>
								</div>
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text"  id="nombreCandidato" name="nombreCandidato" class="form-control" placeholder="Nombre " required>
								</div>
								<div class="form-group">
									<label>Apellido:</label>
									<input type="text"  id="apellidoCandidato" name="apellidoCandidato" class="form-control" placeholder="apellido" required>
								</div>
								<div class="form-group">
									<label>Direccion</label>
									<input type="text"  id="direccionCandidato" name="direccionCandidato" class="form-control" placeholder="EJ: cl 137a 153a 50"  required>
								</div>
								<div class="form-group">
									<label>Celular</label>
									<input type="number"  id="telefonoCandidato" name="telefonoCandidato" class="form-control" placeholder="ej:311.." required>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email"  id="emailCandidato" name="emailCandidato" class="form-control" placeholder="..@gmail.com" required>
								</div>
								
								<div class="form-group">
									<label>años de Experiencia</label>
									<input type="number"  id="anosExperiencia" name="anosExperiencia" class="form-control" placeholder="años" required>
								</div>
								
								<div class="form-group">
									<label>Descripcion Laboral </label>
									<textarea class="form-control" rows="3"  id="descripcionReferenciaLaboral" name="descripcionReferenciaLaboral" placeholder="Referencia Laboral"></textarea required>
								</div>
								<div class="form-group">
									<label>Celular de la persona de Referencia Laboral </label>
									<input type="number"  id="contactoReferencia" name="contactoReferencia" class="form-control" placeholder="Contacto Laboral" required>
								</div>
								<div class="form-group">
									<label>Direccion Referencia </label>
									<input type="text"  id="direccionReferencia" name="direccionReferencia" class="form-control" placeholder="Direccion" required>
								</div>
								<div class="form-group">
									<label>Nombre Referencia </label>
									<input type="text"  id="nombreReferencia" name="nombreReferencia" class="form-control" placeholder="nombre" required>
								</div>
								<div class="form-group">
									<label>Estudios</label>
									
									<textarea class="form-control" rows="3"  id="estudios" name="estudios" placeholder="Estudios" required></textarea>
								</div>
			<div>
				<label>Usuario</label>
				 <select  id="iduser" name="iduser" class="form-control" required>
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
			</div></br>
							
							
		      <div class="modal-footer">
		        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=candidato'" /> 
						<input type="submit" value="Guardar" class="btn btn-success">
			       
			        </form>		
			      </div>
			    </div>
			  </div>
			</div>

	</section> -->
	

</main>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>



