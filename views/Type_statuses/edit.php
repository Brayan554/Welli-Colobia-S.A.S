
<main class="container">
<section>	

			<div class="modal fade" id="exampleModal<?php echo $type->idTipo?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Tipo De Estado </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=Type_status&method=update" method="post">
						
						<input type="hidden" name="idTipo" value="<?php
						echo $type->idTipo ?>">

						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombreTipo" class="form-control" placeholder="Ingrese Nombre"
							value="<?php echo $type->nombreTipo?>">
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

