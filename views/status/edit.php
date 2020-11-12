<main class="container">
	<section>
		<div class="modal fade" id="exampleModal<?php echo $status->idEstados?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Candidatos </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=status&method=update" method="post">
						
						<input type="hidden" name="idEstados"
						 value="<?php echo $status->idEstados?>" >
						   
						<div class="form-group">
							<label>Nombre </label>
							<input type="text" name="nombreEstado" class="form-control" placeholder="Ingrese Nombre Del Estado"
							value="<?php echo $status->nombreEstado?>">
						</div>
	<div>
		<label>Tipos de Estado</label>
		 <select name="idTipo" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($types  as $type) 
				{
						 if ($type->idTipo == $status->idTipo)
						  {
					?>
								<option selected value="<?php echo $type->idTipo ?>"><?php echo $type->nombreTipo?></option>
					<?php
						  } else {
					?>
			 						<option  value="<?php echo $type->idTipo ?>"><?php echo $type->nombreTipo?></option>			
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