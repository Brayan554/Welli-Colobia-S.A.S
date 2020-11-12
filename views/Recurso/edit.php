<main class="container">
	<section>
		<div class="modal fade" id="exampleModal<?php echo $Recurso->idRecursosHumanos?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Recursos H.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=recurso&method=update"        method="post">

          <input type="hidden" name="idRecursosHumanos" 
          value="<?php echo $Recurso->idRecursosHumanos ?>">

            <div class="form-group">
              <label>Identificacion</label>
              <input type="number" name="NumeroIdentificacionRecursosHumanos" class="form-control"  
              value="<?php echo $Recurso->NumeroIdentificacionRecursosHumanos ?>">
            </div>
            	
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" name="nombreRecursosHumanos" class="form-control"  
              value="<?php echo $Recurso->nombreRecursosHumanos ?>">
            </div>
            <div class="form-group">
              <label>Apellido</label>
              <input type="text" name="ApellidoRecursosHumanos" class="form-control"  
              value="<?php echo $Recurso->ApellidoRecursosHumanos ?>">
            </div>
            
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="emailRecursosHumanos" class="form-control"  
              value="<?php echo $Recurso->emailRecursosHumanos ?>">
            </div>
            
  <div>
    <label>Usuarios</label>
     <select name="iduser" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($usuarios as $usuario) 
        {
             if ($usuario->iduser == $Recurso->iduser)
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
             if ($estado->idEstados == $Recurso->idEstados)
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
    <label>Cargo</label>
     <select name="idCargo" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($cargos  as $cargo) 
        {
             if ($cargo->idCargo == $Recurso->idCargo)
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
        <button class="btn btn-primary">Actualizar</button>
       
        </form>		


      </div>
    </div>
  </div>
</div>

	</section>
</main>