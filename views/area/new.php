<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nueva Area</h1> 
	</article>
	<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				
				<div class="card-body">
					<form action="?controller=area&method=save"        method="post">
						<div class="form-group">
							<label>Nombre Area</label>
							<input type="text" name="nombreArea" class="form-control" placeholder="Nombre"required>
						</div>
						<div class="form-group">
							<label>Descripcion Area</label>
							<input type="text" name="descripcionArea" class="form-control" placeholder="Descripcion"required>
						</div>
						
				<div>
					<label>Recursos H.</label>
					 <select name="idRecursosHumanos" class="form-control">
						 <option value="">Seleccione</option>
						  	<?php
								  foreach ($recursos  as $recursos) 
							{
									 if ($recursos->idRecursosHumanos == $data[0]->idRecursosHumanos)
									  {
								?>
											<option selected value="<?php echo $recursos->idRecursosHumanos ?>"><?php echo $recursos->nombreRecursosHumanos?></option>
								<?php
									  } else {
								?>
						 						<option  value="<?php echo $recursos->idRecursosHumanos ?>"><?php echo $recursos->nombreRecursosHumanos?></option>			
								<?php
											 }
							}
								?>
					 </select>
				</div></br>
					
						<div class="form-group">
							<button class="btn btn-primary">Guardar</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>