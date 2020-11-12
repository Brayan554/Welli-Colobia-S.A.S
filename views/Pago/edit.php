<main class="container">
	<section>
		<div class="modal fade" id="exampleModal<?php echo $pago->idPago?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Pago.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=pago&method=update"        method="post">

          <input type="hidden" name="idPago" 
          value="<?php echo $pago->idPago ?>">


            <div class="form-group">
              <label>Fecha Pago</label>
              <input type="text" name="fechaPago" class="form-control"  
              value="<?php echo $pago->fechaPago ?>">
            </div>
            <div class="form-group">
              <label>Devolucion Pago</label>
              <input type="text" name="DevolucionPago" class="form-control"  
              value="<?php echo $pago->DevolucionPago ?>">
            </div>
            
            <div class="form-group">
              <label>Fecha Inicial Pago</label>
              <input type="date" name="FechaInicialPago" class="form-control"  
              value="<?php echo $pago->FechaInicialPago ?>">
            </div>
            
  <div>
    <label>Estado</label>
     <select name="idEstados" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($estados  as $estado) 
        {
             if ($estado->idEstados == $pago->idEstados)
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
    <label>Empleados</label>
     <select name="idEmpleado" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($empleados  as $empleado) 
        {
             if ($empleado->idEmpleado == $pago->idEmpleado)
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
     <select name="idCliente" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($clientes  as $cliente) 
        {
             if ($cliente->idCliente == $pago->idCliente)
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
     <select name="idServicio" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($Servicios  as $Servicio) 
        {
             if ($Servicio->idServicio == $pago->idServicio)
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
     <select name="idUsuario" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($usuarios  as $usuario) 
        {
             if ($usuario->iduser == $pago->idUsuario)
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