<main class="container">
	<section>
		<div class="modal fade" id="exampleModal<?php echo $factura->idFactura?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Factura.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=factura&method=update"        method="post">

          <input type="hidden" name="idFactura" 
          value="<?php echo $factura->idFactura ?>">


            <div class="form-group">
              <label>Descripcion Factura</label>
              <input type="text" name="descripcionFactura" class="form-control"  
              value="<?php echo $factura->descripcionFactura ?>">
            </div>
            <div class="form-group">
              <label>Fecha Parcial</label>
              <input type="text" name="fechaParcial" class="form-control"  
              value="<?php echo $factura->fechaParcial ?>">
            </div>
            
            <div class="form-group">
              <label>Precio Parcial</label>
              <input type="number" name="precioParcial" class="form-control"  
              value="<?php echo $factura->precioParcial ?>">
            </div>
            <div class="form-group">
              <label>Impuestos</label>
              <input type="text" name="impuestos" class="form-control"  
              value="<?php echo $factura->impuestos ?>">
            </div>
            <div class="form-group">
              <label>Descuento</label>
              <input type="text" name="Descuento" class="form-control"  
              value="<?php echo $factura->Descuento ?>">
            </div>
            <div class="form-group">
              <label>Total A Pagar</label>
              <input type="text" name="TotalAPagar" class="form-control"  
              value="<?php echo $factura->TotalAPagar ?>">
            </div>
            
            
  <div>
    <label>Empleados</label>
     <select name="idEmpleado" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($empleados  as $empleado) 
        {
             if ($empleado->idEmpleado == $factura->idEmpleado)
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
    <label>Estado</label>
     <select name="idEstados" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($estados  as $estado) 
        {
             if ($estado->idEstados == $factura->idEstados)
              {
          ?>
                <option selected value="<?php echo $estado->idEstados ?>"><?php echo $estado->nombreEstado?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $estado->idEstados ?>"><?php echo $estado->nombreEstado?></option>     
          <?php
                 }
        }
          ?>
     </select>
  </div>

  <div>
    <label>Cliente</label>
     <select name="idCliente" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($clientes  as $cliente) 
        {
             if ($cliente->idCliente == $factura->idCliente)
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
    <label>Pago</label>
     <select name="idPago" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($pagos  as $pago) 
        {
             if ($pago->idPago == $factura->idPago)
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
     <select name="idServicio" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($Servicios  as $Servicio) 
        {
             if ($Servicio->idServicio == $factura->idServicio)
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
     <select name="iduser" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($usuarios  as $usuario) 
        {
             if ($usuario->iduser == $factura->idUser)
              {
          ?>
                <option selected value="<?php echo $usuario->iduser?>"><?php echo $usuario->nombreuser?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $usuario->iduser?>"><?php echo $usuario->nombreuser?></option>     
          <?php
                 }
        }
          ?>
     </select>
  </div>
            
           
     	<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary">Actualizar</button>
       
        </form>		


      </div>
    </div>
  </div>
</div>
	</section>
	
</main>