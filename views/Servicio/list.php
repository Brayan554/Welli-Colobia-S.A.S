<html>
	<head>

		<title>Servicios.</title>


		<script type="text/javascript" src="Datatable/js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="Datatable/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="Datatable/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="Datatable/js/tablas.js"></script>
    <script type="text/javascript" src="js/validacionForms.js"></script>
    <script src="js/form.js"></script>


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

		<h2 class="font-family">Servicios.</h2>
		<div class="boton">
			
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fas fa-truck"></i></button>
		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			     	<th>#</th>
			      <th>Nombre</th>
			      <th>Duracion</th>
			      <th>Costo Servicio</th>
			      <th>Novedades Servicio</th>
			      <th>Empleado</th>
			      <th>Cliente</th>
			      <th>Estado</th>
			      <th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach ($Servicios as $Servicio) : ?> 
			    <tr>
			    
			      <td><?php echo $Servicio->idServicio?></td>
			      <td><?php echo $Servicio->nombreServicio?></td>
			      <td><?php echo $Servicio->duracionServicio?></td>
			      <td><?php echo $Servicio->costoServicio?></td>
			      <td><?php echo $Servicio->novedadesServicio?></td>
			      <td><?php echo $Servicio->nombreEmpleado?></td>
			       <td><?php echo $Servicio->nombreCliente?></td>
			      <td><?php echo $Servicio->nombreEstado?></td>
			      
			      <td>
			      	<a type="button" data-toggle="modal"
			      	data-target="#exampleModal<?php echo $Servicio->idServicio?>" href="?controller=servicio&method=edit&idServicio=<?php echo $Servicio->idServicio?>" class="btn btn-primary"><span class="icon-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			      	
			      	<a href="?controller=servicio&method=delete&idServicio=<?php echo $Servicio->idServicio ?>" class="btn btn-warning"><span class="icon-times"><i class="fa fa-trash" aria-hidden="true"></i></a>

			      </td>
			      	
			     
			      

			    </tr>
			  	
			  <?php endforeach?>
			    
        </tbody>
    </table>

		</section>

	</section>
		<?php
			foreach ($Servicios as $Servicio) :
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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Servicio.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=servicio'" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=servicio&method=save"        method="post" onsubmit="return validarServicio();">
            
            <div class="form-group">
              <label>Nombre:</label>
              <input type="text" id="nombreServicio" name="nombreServicio" class="form-control" placeholder="Nombre " required>
            </div>
            <div class="form-group">
              <label>Duracion Servicio:</label>
              <input type="text" id="duracionServicio" name="duracionServicio" class="form-control" placeholder="Horas/Dias/Meses" required>
            </div>
            
            
            <div class="form-group">
              <label>Costo Servicio</label>
              <input type="number" id="costoServicio" name="costoServicio" class="form-control" placeholder="$...." required>
            </div>
            <div class="form-group">
              <label>Novedades Servicio</label>
              <input type="text"  id="novedadesServicio" name="novedadesServicio" class="form-control" placeholder=".ninguna." required>
            </div>
  <div>
    <label>Empleado</label>
     <select id="idEmpleadoServicioServicio" name="idEmpleado" class="form-control" required>
       <option value="">Seleccione</option>
          <?php
            foreach ($empleados as $empleado) 
        {
             if ($empleado->idEmpleado == $data[0]->idEmpleado)
              {
          ?>
                <option selected value="<?php echo $empleado->idEmpleado ?>"><?php echo $empleado->nombreEmpleado?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $empleado->idEmpleado ?>"><?php echo $empleado->nombreEmpleado?></option>      
          <?php
                 }
        }
          ?>
     </select>
  </div>
<div>
    <label>Cliente</label>
     <select id="idClienteServicio" name="idCliente" class="form-control" required>
       <option value="">Seleccione</option>
          <?php
            foreach ($clientes as $cliente) 
        {
             if ($cliente->idCliente == $data[0]->idCliente)
              {
          ?>
                <option selected value="<?php echo $cliente->idCliente ?>"><?php echo $cliente->nombreCliente?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $cliente->idCliente ?>"><?php echo $cliente->nombreCliente?></option>      
          <?php
                 }
        }
          ?>
          
     </select>
  </div>
            
           
     	<div class="modal-footer">
       
        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=servicio'" /> 
        <input type="submit" value="Guardar" class="btn btn-success">
        
       
        </form>		

        <button  class="btn btn-danger" onclick="ventanaSecundaria('http://localhost/NuevoWelli/CreacionServiciosProyecto/index.php')"><i class="fa fa-percent" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>

  </section>
</main>
</body>
</html>



