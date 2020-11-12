<html>
	<head>

		<title>Ofertas</title>


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

         </style>
	</head>
<body>

	<main class="container">
	<section class="row col-md-12 offset-md-0 col-sm-11 offset-sm-1  border rounded p-3 bg-white">

		<h2 class="font-family">Ofertas</h2>
		<div class="boton">
			
	
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fas fa-user-plus"></i></button>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			      <th>#</th>
			      <th>nombre Oferta</th>
			      <th>Fecha Inicial</th>
			      <th>Fecha Limite</th>
			      <th>Estados</th>
						<th>Acciones</th>
						<th>Cambiar Estado</th>
			    </tr>
        </thead>
        <tbody>
						
            <?php foreach ($ofertas as $oferta) : ?> 
			    <tr>
			    
			      <td><?php echo $oferta->idOferta?></td>
			      <td><?php echo $oferta->nombreOferta?></td>
			      <td><?php echo $oferta->FechaInicial?></td>
			      <td><?php echo $oferta->FechaLimite?></td>
			      <td><?php echo $oferta->nombreEstado?></td>
			      

			    	<td>

			    		

			    		<a type="button" data-toggle="modal"  data-target="#exampleModal<?php echo $oferta->idOferta?>" href="?controller=oferta&method=edit&idOferta=<?php echo $oferta->idOferta?>" class="btn btn-primary"><span class="icon-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>


			      		<a href="?controller=oferta&method=delete&idOferta=<?php echo $oferta->idOferta ?>" class="btn btn-warning"><span class="icon-times"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
						
						 <?php
						 if($oferta->nombreEstado == 'Activado'){

						?>

							<td>
		      			<a href="?controller=movie&method=updateStatus&id_movie=<?php echo $movie->id_movie?>" class="btn btn-danger"><i class="fas fa-plus-circle"></i>Off</a>
		      		</td>
						 <?php
						 }elseif($oferta->nombreEstado == 'Desactivado'){
		 
						 ?>
						 
							<td>
		      			<a href="?controller=movie&method=updateStatus&id_movie=<?php echo $movie->id_movie?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i>ON</a>
		      		</td>
						 <?php
						 }
						 ?>
						

			    
			  	
			  <?php endforeach?>       
        </tbody>

    </table>

		</section>

	</section>

		
			      

		<?php
		  foreach ($ofertas as $oferta) :
		  	
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
        <h5 class="modal-title" id="exampleModalLabel">Nueva Oferta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=oferta'" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?controller=oferta&method=save"     method="post" onsubmit="return validarOferta();">

          <div class="form-group">
							<label>Descripcion Oferta</label>
							<input type="text" id="nombreOferta" name="nombreOferta" class="form-control" placeholder="Descripcion" required>
						</div>
						<div class="form-group">
							<label>Fecha Inicial:</label>
							<input type="date" id="FechaInicial" name="FechaInicial" class="form-control" placeholder="aaaa-mm-dd" required>
						</div>
						<div class="form-group">
							<label>Fecha Limite:</label>
							<input type="date" id="FechaLimite" name="FechaLimite" class="form-control" placeholder="aaaa-mm-dd" required>
						</div>				
						
        
      </div>
      <div class="modal-footer">
        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=oferta'" /> 
        <input type="submit" value="Guardar" class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
</div>
	</section>


	

</main>

</body>

	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>