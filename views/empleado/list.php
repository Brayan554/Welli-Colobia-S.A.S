<html>
	<head>

		<title>Empleados</title>


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

		<h2 class="font-family">Empleados</h2>
		<div class="boton">
			
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fas fa-users"></i></button>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			     <th>#</th>
			      <th>Identificacion</th>
			      <th>Nombre</th>
			      <th>Apellido</th>
			      <th>Email</th>
			      <th>Telefono</th>
			      <th>Cargo</th>
			      <th>Area</th>
			      <th>Recursos H.</th>
			      <th>Estado</th>
			      <th>Usuario</th>
			      <th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado) : ?> 
			    <tr>
			    
			      <td><?php echo $empleado->idEmpleado?></td>
			      <td><?php echo $empleado->NumeroIdentificacionEmpleado?></td>
			      <td><?php echo $empleado->nombreEmpleado?></td>
			      <td><?php echo $empleado->apellidoEmpleado?></td>
			      <td><?php echo $empleado->emailEmpleado?></td>
			      <td><?php echo $empleado->telefonoEmpleado?></td>
			      <td><?php echo $empleado->nombreCargo?></td>
			      <td><?php echo $empleado->nombreArea?></td>
			      <td><?php echo $empleado->nombreRecursosHumanos?></td>
			      
			      <td><?php echo $empleado->nombreEstado?></td>
			      <td><?php echo $empleado->nombreuser?></td>
			      <td>
			      	<a type="button" data-toggle="modal" data-target="#exampleModal<?php echo $empleado->idEmpleado?>" href="?controller=empleado&method=edit&idEmpleado=<?php echo $empleado->idEmpleado?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>


			      	<a href="?controller=empleado&method=delete&idEmpleado=
					      	<?php echo $empleado->idEmpleado ?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      </td>
			      	
			     
			      

			    </tr>
			  	
			  <?php endforeach?>
			    
        </tbody>
    </table>

		</section>

	</section>

		<?php
			foreach ($empleados as $empleado) :
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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Empleado.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span  onclick="window.location.href='?controller=empleado'" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=empleado&method=save"        method="post" onsubmit="return validarEmpleado();">
            <div class="form-group">
              <label># Identificacion</label>
              <input type="number" id="NumeroIdentificacionEmpleado" name="NumeroIdentificacionEmpleado" class="form-control" placeholder="c.c" required>
            </div>
            <div class="form-group">
              <label>Nombre:</label>
              <input type="text" id="nombreEmpleado" name="nombreEmpleado" class="form-control" placeholder="Nombre " required>
            </div>
            <div class="form-group">
              <label>Apellido:</label>
              <input type="text" id="apellidoEmpleado" name="apellidoEmpleado" class="form-control" placeholder="apellido" required>
            </div>
            
            <div class="form-group">
              <label>Email</label>
              <input type="email" id="emailEmpleado" name="emailEmpleado" class="form-control" placeholder="@gmail.com" required>
            </div>
            <div class="form-group">
              <label>Celular</label>
              <input type="number" id="telefonoEmpleado" name="telefonoEmpleado" class="form-control" placeholder="ej:311.." required>
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
  <div>
    <label>areas</label>
     <select id="idArea" name="idArea" class="form-control" required>
       <option value="">Seleccione</option>
          <?php
            foreach ($areas as $area) 
        {
             if ($area->idArea == $data[0]->idArea)
              {
          ?>
                <option selected value="<?php echo $area->idArea ?>"><?php echo $area->nombreArea?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $area->idArea ?>"><?php echo $area->nombreArea?></option>      
          <?php
                 }
        }
          ?>
     </select>
  </div>
  <div>
    <label>recursos</label>
     <select id="idRecursosHumanos" name="idRecursosHumanos" class="form-control" required>
       <option value="">Seleccione</option>
          <?php
            foreach ($recursos as $recurso) 
        {
             if ($recurso->idRecursosHumanos == $data[0]->idRecursosHumanos)
              {
          ?>
                <option selected value="<?php echo $recurso->idRecursosHumanos ?>"><?php echo $recurso->nombreRecursosHumanos?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $recurso->idRecursosHumanos ?>"><?php echo $recurso->nombreRecursosHumanos?></option>      
          <?php
                 }
        }
          ?>
     </select>
  </div>
            
           
     	<div class="modal-footer">
        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=empleado'" /> 
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



