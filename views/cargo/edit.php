<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $cargo->idCargo?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cargo.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=cargo&method=update"        method="post">

          <input type="hidden" name="idCargo" 
          value="<?php echo $cargo->idCargo ?>">

            <div class="form-group">
              <label>Nombre Area</label>
              <input type="text" name="nombreCargo" class="form-control"  
              value="<?php echo $cargo->nombreCargo ?>">
            </div>

            <div class="form-group">
              <label>descripcion Area</label>
              <input type="text" name="descripcionCargo" class="form-control"  
              value="<?php echo $cargo->descripcionCargo ?>">
            </div>
            
  
  <div>
    <label>Estado</label>
     <select name="idEstados" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($estados  as $estado) 
        {
             if ($estado->idEstados == $cargo->idEstados)
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