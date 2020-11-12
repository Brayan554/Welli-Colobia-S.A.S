<main class="container">
	<section>	
			<div class="modal fade" id="exampleModal<?php echo $empleado->idEmpleado?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color"  class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Empleado.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=empleado&method=update"        method="post">

          <input type="hidden" name="idEmpleado" 
          value="<?php echo $empleado->idEmpleado ?>">

            <div class="form-group">
              <label>Identificacion</label>
              <input type="number" name="NumeroIdentificacionEmpleado" class="form-control"  
              value="<?php echo $empleado->NumeroIdentificacionEmpleado ?>">
            </div>

            <div class="form-group">
              <label>Nombre</label>
              <input type="text" name="nombreEmpleado" class="form-control"  
              value="<?php echo $empleado->nombreEmpleado ?>">
            </div>
            <div class="form-group">
              <label>Apellido</label>
              <input type="text" name="apellidoEmpleado" class="form-control"  
              value="<?php echo $empleado->apellidoEmpleado ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="emailEmpleado" class="form-control"  
              value="<?php echo $empleado->emailEmpleado ?>">
            </div>
        
            <div class="form-group">
              <label>Telefono</label>
              <input type="number" name="telefonoEmpleado" class="form-control"  
              value="<?php echo $empleado->telefonoEmpleado ?>">
            </div>
            
  <div>
    <label>Usuarios</label>
     <select name="iduser" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($usuarios as $usuario) 
        {
             if ($usuario->iduser == $empleado->iduser)
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
    <label>Estado</label>
     <select name="idEstados" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($estados  as $estado) 
        {
             if ($estado->idEstados == $empleado->idEstados)
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
    <label>Recursos Humanos</label>
     <select name="idRecursosHumanos" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($recursos  as $recurso) 
        {
             if ($recurso->idRecursosHumanos == $empleado->idRecursosHumanos)
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

  <div>
    <label>Area</label>
     <select name="idArea" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($areas  as $area) 
        {
             if ($area->idArea == $empleado->idArea)
              {
          ?>
                <option selected value="<?php echo $area->idArea ?>"><?php echo $area->nombreArea?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $area->idArea ?>"><?php echo $estado->nombreArea?></option>      
          <?php
                 }
        }
          ?>
     </select>
  </div>
  <div>
    <label>Cargos</label>
     <select name="idCargo" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($cargos  as $cargo) 
        {
             if ($cargo->idCargo == $empleado->idCargo)
              {
          ?>
                <option selected value="<?php echo $cargo->idCargo ?>"><?php echo $cargo->nombreCargo?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $cargo->idCargo ?>"><?php echo $cargo->nombreCargo?></option>      
          <?php
                 }
        }
          ?>
     </select>
  </div>
            
           
     	<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-success">Actualizar</button>
       
        </form>		


      </div>
    </div>
  </div>
</div>
	</section>
</main>