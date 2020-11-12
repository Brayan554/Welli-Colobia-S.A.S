

<main class="container">
	

<section>
		
<div class="modal fade" id="exampleModal<?php  echo $oferta->idOferta?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Oferta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form action="?controller=oferta&method=update"        method="post">

			<input type="hidden"  name="idOferta" value="<?php echo $oferta->idOferta?>" 
					>

						<div class="form-group">
							<label>Nombre Oferta</label>
							<input type="text" name="nombreOferta" class="form-control"  
							value="<?php echo $oferta->nombreOferta ?>">
						</div>

						<div class="form-group">
							<label>Fecha Inicial</label>
							<input type="text" name="FechaInicial" class="form-control"  
							value="<?php echo $oferta->FechaInicial ?>">
						</div>
						<div class="form-group">
							<label>Fecha Limite</label>
							<input type="text" name="FechaLimite" class="form-control"  
							value="<?php echo $oferta->FechaLimite ?>">
						</div>
						
						
						
						
	
	<div>
		<label>Estado</label>
		 <select name="idEstados" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($estados  as $estado) 
				{
						 if ($estado->idEstados == $oferta->idEstados)
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
        <button class="btn btn-success">Actualizar</button>
       
        </form>		
      </div>
    </div>
  </div>
</div>

	</section>
</main>







	