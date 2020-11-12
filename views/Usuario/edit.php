<main class="container">
	<section>
		
<div class="modal fade" id="exampleModal<?php echo $Usuario->iduser?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=usuario&method=update"        method="post">

          <input type="hidden" name="iduser" 
          value="<?php echo $Usuario->iduser ?>">

            <div class="form-group">
              <label>Nombre Usuario</label>
              <input type="text" name="nombreuser" class="form-control"  
              value="<?php echo $Usuario->nombreuser ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="emailuser" class="form-control"  
              value="<?php echo $Usuario->emailuser ?>">
            </div>
            <div class="form-group">
              <label>Contraseña:</label>
              <input type="password" name="contrasena" class="form-control"  
              value="<?php echo $Usuario->contrasena ?>">
            </div>
            
            
            
  <div>
    <label>Cargos</label>
     <select name="idcargo" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($cargos as $cargo) 
        {
             if ($cargo->idCargo == $Usuario->idcargo)
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
  <div>
    <label>Estado</label>
     <select name="idestado" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($estados  as $estado) 
        {
             if ($estado->idEstados == $Usuario->idestado)
              {
          ?>
                <option selected value="<?php echo $estado->idEstados ?>"><?php echo $estado->nombreEstado?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $estado->idEstados?>"><?php echo $estado->nombreEstado?></option>      
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