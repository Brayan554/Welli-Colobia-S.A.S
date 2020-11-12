<html>
	<head>

		<title>Areas</title>


		<script type="text/javascript" src="Datatable/js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="Datatable/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="Datatable/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="Datatable/js/tablas.js"></script>
		<script type="text/javascript" src="js/validacionForms.js"></script>


		<link rel="stylesheet" type="text/css" href="Datatable/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="Datatable/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/modalcss/modal.css">
		 <link
      href="assets/css/cambiodeestado.min.css"
      rel="stylesheet"
      media="all"
    />
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

		<h2 class="font-family">Areas</h2>
		<div class="boton">
			
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fa fa-window-restore"></i></button>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
             <tr>
			      <th>#</th>
			      <th>Nombre De La Area</th>
			      <th>Descripcion</th>
			      <th>Estado</th>
			      <th>Recursos Humanos</th>
			      <th> Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach ($areas as $area) : ?> 
			    <tr>
			    
			      <td><?php echo $area->idArea?></td>
			      <td><?php echo $area->nombreArea?></td>
			      <td><?php echo $area->descripcionArea?></td>
			      <td><?php echo $area->nombreEstados?></td>
			      <td><?php echo $area->nombreRecursosHumanos?></td>
			      <td>


			      	<a type="button" data-toggle="modal"  data-target="#exampleModal<?php echo $area->idArea?>" href="?controller=area&method=edit&idArea=<?php
			      	echo $area->idArea?>" class="btn btn-primary"><span class="icon-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			      	
			      	<a href="?controller=area&method=delete&idArea=
					      	<?php echo $area->idArea?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>

			      </td>
			      	
			     
			      

			    </tr>
			  	
			  <?php endforeach?>   
        </tbody>
    </table>

		</section>

	</section>


		<?php
		  foreach ($areas as $area) :
		  	
		  	include 'edit.php';

		?>		
		<?php
			endforeach
		?>   




	<section>
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Nueva Area</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span onclick="window.location.href='?controller=area'"   aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				        <form action="?controller=area&method=save"        method="post" onsubmit="return validarArea();">
										<div class="form-group">
											<label>Nombre Area</label>
											<input type="text" id="nombreArea" name="nombreArea" class="form-control" placeholder="Nombre" required>
										</div>
										<div class="form-group">
											<label>Descripcion Area</label>
										
											<textarea class="form-control" rows="3" id="descripcionArea" name="descripcionArea" placeholder="Descripcion"  required></textarea>
										</div>
										
								<div>
									<label>Recursos H.</label>
									 <select id="idRecursosHumanos" name="idRecursosHumanos" class="form-control" required>
										 <option value="">Seleccione</option>
										  	<?php
												  foreach ($recursos  as $recursos) 
											{
													 if ($recursos->idRecursosHumanos == $data[0]->idRecursosHumanos)
													  {
												?>
															<option selected value="<?php echo $recursos->idRecursosHumanos ?>"><?php echo $recursos->nombreRecursosHumanos?></option>
												<?php
													  } else {
												?>
										 						<option  value="<?php echo $recursos->idRecursosHumanos ?>"><?php echo $recursos->nombreRecursosHumanos?></option>			
												<?php
															 }
											}
												?>
									 </select>
								</div>
												
				      <div class="modal-footer">
				      	<input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=area'" /> 
				       	<input type="submit" value="Guardar" class="btn btn-success">
				        </form>		
				      </div>
				    </div>
				  </div>
				</div>
	</section>
	

</main>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>



