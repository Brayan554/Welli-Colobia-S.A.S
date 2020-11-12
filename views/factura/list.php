<html>
	<head>

		<title>Facturas</title>


		
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

		<h2 class="font-family">Facturas</h2>
		<div  class="boton">
			
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fas fa-envelope"></i></button>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			     <th>#</th>
			      <th>descripcion Factura</th>
			      <th>fecha Parcial</th>
			      <th>precio Parcial</th>
			      <th>impuestos</th>
			      <th>Descuento</th>
			      <th>Total A Pagar</th>
			      <th>Empleado</th>
			      <th>Estado Factura</th>
			      <th>Cliente</th>
			      <th>Fecha Pago</th>
			      <th>Servicio</th>
			      <th>Usuario</th>
			      <th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach ($facturas as $factura) : ?> 
			    <tr>
			    
			      <td><?php echo $factura->idFactura?></td>
			      <td><?php echo $factura->descripcionFactura?></td>
			      <td><?php echo $factura->fechaParcial?></td>
			      <td><?php echo $factura->precioParcial?></td>
			      <td><?php echo $factura->impuestos?></td>
			      <td><?php echo $factura->Descuento?></td>
			      <td><?php echo $factura->TotalAPagar?></td>
			      <td><?php echo $factura->nombreEmpleado?></td>
			      <td><?php echo $factura->nombreEstado ?></td>
			      <td><?php echo $factura->nombreCliente?></td>
			      <td><?php echo $factura->fechaPago?></td>
			      <td><?php echo $factura->nombreServicio?></td>
			      <td><?php echo $factura->nombreuser?></td>
			      <td>
			      		<a type="button" data-toggle="modal" data-target="#exampleModal<?php echo $factura->idFactura?>" href="?controller=factura&method=edit&idFactura=<?php echo $factura->idFactura?>" class="btn btn-primary"><span class="icon-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

			      		<a href="?controller=factura&method=delete&idFactura=<?php echo $factura->idFactura ?>" class="btn btn-warning"><span class="icon-times"><i class="fa fa-trash" aria-hidden="true"></i></a>
			    </td>
			      	
			     
			      

			    </tr>
			  	
			  <?php endforeach?>
			    
        </tbody>
    </table>

		</section>

	</section>

	<?php
		foreach ($facturas as $factura) :
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
        <h5 class="modal-title" id="exampleModalLabel">Nueva Factura.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=factura'" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=factura&method=save"        method="post" onsubmit="return validarFactura();">
            <div class="form-group">
              <label>Descripcion Factura</label>
              <input type="text" id="descripcionFactura" name="descripcionFactura" class="form-control" placeholder="Descripcion" required>
            </div>
            <div class="form-group">
              <label>Fecha Parcial:</label>
              <input type="date" id="fechaParcial" name="fechaParcial" class="form-control" placeholder="aaaa-mm-dd" required>
            </div>
            <div class="form-group">
              <label>Precio Parcial:</label>
              <input type="text" id="precioParcial" name="precioParcial" class="form-control" placeholder="$%" required>
            </div>
            
            
            <div class="form-group">
              <label>Impuestos</label>
              <input type="text" id="impuestos" name="impuestos" class="form-control" placeholder="$%" required>
            </div>
            <div class="form-group">
              <label>Descuento</label>
              <input type="text" id="Descuento" name="Descuento" class="form-control" placeholder="$%" required>
            </div>
            <div class="form-group">
              <label>Total A Pagar</label>
              <input type="text" id="TotalAPagar" name="TotalAPagar" class="form-control" placeholder="$" required>
            </div>

  <div>
    <label>Empleado</label>
     <select id="idEmpleadoFactura" name="idEmpleado" class="form-control" required>
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
     <select id="idClienteFactura" name="idCliente" class="form-control" required>
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
    <label>Pagos</label>
     <select id="idPagoFactura" name="idPago" class="form-control" required>
       <option value="">Seleccione</option>
          <?php
            foreach ($pagos as $pago) 
        {
             if ($pago->idPago == $data[0]->idPago)
              {
          ?>
                <option selected value="<?php echo $pago->idPago ?>"><?php echo $pago->fechaPago?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $pago->idPago ?>"><?php echo $pago->fechaPago?></option>     
          <?php
                 }
        }
          ?>
     </select>
  </div>
  <div>
    <label>Servicio</label>
     <select id="idServicioFactura" name="idServicio" class="form-control" required>
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
     <select id="idUserFactura" name="idUser" class="form-control" required>
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
        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=factura'" /> 
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



