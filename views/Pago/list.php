<html>
	<head>

		<title>Pagos.</title>


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

		<h2 class="font-family">Pagos.</h2>
		<div class="boton">
			
			<a type="button" data-toggle="modal" data-target="#exampleModal" href="?controller=pago&method=new"  class="btn btn-danger"><span class="icon-plus"></span><i class="fas fa-user-plus"></i></a>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			     <th>#</th>
			      <th>fecha </th>
			      <th>Devolucion </th>
			      <th>Fecha Inicial Pago</th>
			      <th>Estado</th>
			      <th>Empleado</th>
			      <TH>Cliente</TH>
			      <TH>Servicio</TH>
			      <TH>Usuario</TH>
			      <th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach ($pagos as $pago) : ?>
			    <tr>
			    
			      <td><?php echo $pago->idPago?></td>
			      <td><?php echo $pago->fechaPago?></td>
			      <td><?php echo $pago->DevolucionPago?></td>
			      <td><?php echo $pago->FechaInicialPago?></td>
			      <td><?php echo $pago->nombreEstado?></td>
			      <td><?php echo $pago->nombreEmpleado?></td>
			      <td><?php echo $pago->nombreCliente?></td>
			      <td><?php echo $pago->nombreServicio?></td>
			      <td><?php echo $pago->nombreuser?></td>
			      <td>
			      	<a type="button" data-toggle="modal" data-target="#exampleModal<?php echo $pago->idPago?>" href="?controller=pago&method=edit&idPago=<?php echo $pago->idPago?>" class="btn btn-primary"><span class="icon-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			      	
			      	<a href="?controller=pago&method=delete&idPago=<?php echo $pago->idPago ?>" class="btn btn-warning"><span class="icon-times"><i class="fa fa-trash" aria-hidden="true"></i></a>

			      </td>
			      	
			     
			      

			    </tr>
			  	
			  <?php endforeach?>
			    
        </tbody>
    </table>

		</section>

	</section>

		<?php
			foreach ($pagos as $pago) :
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
		        <h5 class="modal-title" id="exampleModalLabel">Nuevo Pago.</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span onclick="window.location.href='?controller=pago'"  aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">



		       <form action="?controller=pago&method=save"        method="post" onsubmit="return validarPago();">
		            <div class="form-group">
		              <label>Fecha Pago</label>
		              <input type="date" id="fechaPago" name="fechaPago" class="form-control" placeholder="aaaa/mm/dd" required>
		            </div>
		            <div class="form-group">
		              <label>Devolucion Pago:</label>
		              <input type="number" id="DevolucionPago" name="DevolucionPago" class="form-control" placeholder=" $ Devolucion  " required>
		            </div>
		            <div class="form-group">
		              <label>Fecha Inicial Pago:</label>
		              <input type="date" id="FechaInicialPago" name="FechaInicialPago" class="form-control" placeholder="aaaa/mm/dd" required>
		            </div>
		            

		  <div>
		    <label>Empleado</label>
		     <select id="idEmpleadoPago" name="idEmpleado" class="form-control" required>
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
		     <select id="idClientePago" name="idCliente" class="form-control" required>
		       <option value="">Seleccione</option>
		          <?php
		            foreach ($clientes  as $cliente) 
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
		  
		  <div>
		    <label>Servicio</label>
		     <select id="idServicioPago" name="idServicio" class="form-control" required>
		       <option value="">Seleccione</option>
		          <?php
		            foreach ($Servicios as $Servicio) 
		        {
		             if ($Servicio->idServicio == $data[0]->idServicio)
		              {
		          ?>
		                <option selected value="<?php echo $Servicio->idServicio ?>"><?php echo $Servicio->nombreServicio?></option>
		          <?php
		              } else {
		          ?>
		                  <option  value="<?php echo $Servicio->idServicio ?>"><?php echo $Servicio->nombreServicio?></option>      
		          <?php
		                 }
		        }
		          ?>
		     </select>
		  </div>
		  <div>
		    <label>Usuario</label>
		     <select id="idUsuarioPago" name="idUsuario" class="form-control" required>
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
		     	<input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=pago'" /> 
						<input type="submit" value="Guardar" class="btn btn-success">
		       
		        </form>		
		       </div>

		      </div>
		    </div>
		  </div>
		</div>

	
	</section>
	

</main>

</body>
</html>



