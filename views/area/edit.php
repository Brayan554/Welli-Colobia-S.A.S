<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $area->idArea ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Areas </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=area&method=update"  method="post">
	
								<input type="hidden" name="idArea" 
								value="<?php echo $area->idArea ?>">
	
									<div class="form-group">
										<label>Nombre Area</label>
										<input type="text" name="nombreArea" class="form-control"  
										value="<?php echo $area->nombreArea ?>">
									</div>
	
									<div class="form-group">
										<label>descripcion Area</label>
										<input type="text" name="descripcionArea" class="form-control"  
										value="<?php echo $area->descripcionArea ?>">
									</div>
									
				<div>
					<label>Recursos H</label>
					 <select name="idRecursosHumanos" class="form-control">
						 <option value="">Seleccione</option>
								<?php
									foreach ($recursos as $recurso) 
							{
									 if ($recurso->idRecursosHumanos == $area->idRecursosHumanos)
										{
								?>
											<option selected value="<?php echo $recurso->idRecursosHumanos ?>"><?php echo $recurso->nombreRecursosHumanos?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $recurso->idRecursosHumanos ?>"><?php echo $recurso->nombreuser?></option>			
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
									 if ($estado->idEstados == $area->idEstados)
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
				</div></br>
									
														
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
		



</body>
</html>

