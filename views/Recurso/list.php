<html>
	<head>

		<title>Recursos H.</title>


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

		<h2 class="font-family">Recursos H.</h2>
		<div class="boton">
			
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fas fa-user"></i></button>
		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			      <th>#</th>
			      <th># Identificacion</th>
			      <th>nombre</th>
			      <th>Apellido</th>
			      <th>email</th>
			      <th>cargo</th>
			      <TH>estados</TH>
			      <TH>usuario</TH>
			      <th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach ($Recursos as $Recurso) : ?> 
			    <tr>
			    
			      <td><?php echo $Recurso->idRecursosHumanos?></td>
			      <td><?php echo $Recurso->NumeroIdentificacionRecursosHumanos?></td>
			      <td><?php echo $Recurso->nombreRecursosHumanos?></td>
			      <td><?php echo $Recurso->ApellidoRecursosHumanos?></td>
			      <td><?php echo $Recurso->emailRecursosHumanos?></td>
			      <td><?php echo $Recurso->nombreCargo?></td>
			      <td><?php echo $Recurso->nombreEstado?></td>
			      <td><?php echo $Recurso->nombreUser?></td>
			      
			      <td>
				    <a type="button" data-toggle="modal"  data-target="#exampleModal<?php echo $Recurso->idRecursosHumanos?>" href="?controller=recurso&method=edit&idRecursosHumanosd=<?php
			      	echo $Recurso->idRecursosHumanos?>" class="btn btn-primary"><span class="icon-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>  	

			      	<a href="?controller=recurso&method=delete&idRecursosHumanos=<?php echo $Recurso->idRecursosHumanos ?>" class="btn btn-warning"><span class="icon-times"><i class="fa fa-trash" aria-hidden="true"></i></a>

			      </td>
			      	
			     
			      

			    </tr>
			  	
			  <?php endforeach?>
			    
        </tbody>
    </table>

		</section>

	</section>
		<?php
			foreach ($Recursos as $Recurso) :
				include 'edit.php';
		?>
		<?php
			endforeach
		?>
	<section>	
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Recursos H.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=recurso'"   aria-hidden="true" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=recurso&method=save"        method="post" onsubmit="return validarRecurso();">
            <div class="form-group">
              <label># Identificacion</label>
              <input type="number" id="NumeroIdentificacionRecursosHumanos" name="NumeroIdentificacionRecursosHumanos" class="form-control" placeholder="c.c" required>
            </div>
            <div class="form-group">
              <label>Nombre:</label>
              <input type="text" id="nombreRecursosHumanos" name="nombreRecursosHumanos" class="form-control" placeholder="Nombre " required>
            </div>
            <div class="form-group">
              <label>Apellido:</label>
              <input type="text" id="ApellidoRecursosHumanos" name="ApellidoRecursosHumanos" class="form-control" placeholder="apellido" required>
            </div>
            
            
            <div class="form-group">
              <label>Email</label>
              <input id="emailRecursosHumanos" type="email" name="emailRecursosHumanos" class="form-control" placeholder="@gmail.com" required>
            </div>
  <div>
    <label>Usuario</label>
     <select id="iduser" name="iduser" class="form-control" required>
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
  </div>
            
           
     	<div class="modal-footer">
        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=recurso'" /> 
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



