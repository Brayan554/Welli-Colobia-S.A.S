<main class="container">
	<section>	
			<div class="modal fade" id="exampleModal<?php echo $Servicio->idServicio?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Servicio.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=servicio&method=update"        method="post">

          <input type="hidden" name="idServicio" 
          value="<?php echo $Servicio->idServicio ?>">


            <div class="form-group">
              <label>Nombre</label>
              <input type="text" name="nombreServicio" class="form-control"  
              value="<?php echo $Servicio->nombreServicio ?>">
            </div>
            <div class="form-group">
              <label>Duracion Servicio</label>
              <input type="text" name="duracionServicio" class="form-control"  
              value="<?php echo $Servicio->duracionServicio ?>">
            </div>
            
            <div class="form-group">
              <label>Costo Servicio</label>
              <input type="number" name="costoServicio" class="form-control"  
              value="<?php echo $Servicio->costoServicio ?>">
            </div>
            <div class="form-group">
              <label>Novedades Servicio</label>
              <input type="text" name="novedadesServicio" class="form-control"  
              value="<?php echo $Servicio->novedadesServicio ?>">
            </div>
            
  <div>
    <label>Empleados</label>
     <select name="idEmpleado" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($empleados as $empleado) 
        {
             if ($empleado->idEmpleado == $Servicio->idEmpleado)
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
             if ($cliente->idCliente == $Servicio->idCliente)
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
    <label>Estado</label>
     <select name="idEstados" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($estados  as $estado) 
        {
             if ($estado->idEstados == $Servicio->idEstados)
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