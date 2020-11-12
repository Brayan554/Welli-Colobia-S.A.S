<html>
	<head>

		<title>Estados</title>


		<script type="text/javascript" src="Datatable/js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="Datatable/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="Datatable/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="Datatable/js/tablas.js"></script>
		<script type="text/javascript" src="js/validacionForms.js"></script>


		<link rel="stylesheet" type="text/css" href="Datatable/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="Datatable/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/modalcss/modal.css">


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

		<h2 class="font-family">Estados</h2>
		<div class="boton">
			
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fas fa-toggle-on"></i></button>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			      <tr>
			      <th>#</th>
			      <th>Nombre Estado</th>
			      <th>tipo de estado</th>
			      <th>Acciones</th>
			    </tr>
			</tr>
        </thead>
        <tbody>
            <?php foreach($statuses as $status) : ?> 
			    <tr>
			    
			      <td><?php echo $status->idEstados?></td>
			      <td><?php echo $status->nombreEstado?></td>
				  <td><?php echo $status->name_type_statuses?></td>

			 
			      <td>
			      	<a  type="button" data-toggle="modal" data-target="#exampleModal<?php echo $status->idEstados?>" href="?controller=status&method=edit&idEstados=<?php
			      	echo $status->idEstados?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

			      	<a href="?controller=status&method=delete&idEstados=<?php echo $status->idEstados?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      	
			      </td>
			    </tr>
			  <?php endforeach?>     
        </tbody>
    </table>

		</section>

	</section>
			
	<?php 
		foreach ($statuses as $status) :
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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Estado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=status'" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form action="?controller=status&method=save" method="post" onsubmit="return validarEstado();">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" id="nombreEstado" name="nombreEstado" class="form-control" placeholder="Estado"required>
						</div>
			<div>
						<label>Tipo de Estado</label>
						  <select id="idTipo" name="idTipo" class="form-control" required>
							  <option value="">Seleccione</option>
											<?php
										foreach ($types as $type) 
											{
												
												 ?>
												   <option  value="<?php echo $type->idTipo?>"><?php echo 
												   $type->nombreTipo
												    ?></option>			
											  <?php
																	
											}
												 ?>
						  </select>
			</div>
						


								
     	<div class="modal-footer">
        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=status'" /> 
        <input type="submit" value="Guardar" class="btn btn-success">
       
        </form>		
      </div>
    </div>
  </div>
</div>
	</section>

</main>

</body>
</html>



