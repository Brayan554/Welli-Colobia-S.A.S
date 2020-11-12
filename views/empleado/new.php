<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nuevo Empleado</h1> 
	</article>
	<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				
				<div class="card-body">
					<form action="?controller=empleado&method=save"        method="post">
						<div class="form-group">
							<label># Identificacion</label>
							<input type="number" name="NumeroIdentificacionEmpleado" class="form-control" placeholder="c.c"required>
						</div>
						<div class="form-group">
							<label>Nombre:</label>
							<input type="text" name="nombreEmpleado" class="form-control" placeholder="Nombre "required>
						</div>
						<div class="form-group">
							<label>Apellido:</label>
							<input type="text" name="apellidoEmpleado" class="form-control" placeholder="apellido" required>
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="emailEmpleado" class="form-control" placeholder="@gmail.com" required>
						</div>
						<div class="form-group">
							<label>Telefono</label>
							<input type="number" name="telefonoEmpleado" class="form-control" placeholder="ej:311.." required>
						</div>
	<div>
		<label>Usuario</label>
		 <select name="iduser" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($usuarios as $usuario) 
				{
						 if ($usuario->iduser == $data[0]->iduser)
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
		<label>areas</label>
		 <select name="idArea" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($areas as $area) 
				{
						 if ($area->idArea == $data[0]->idArea)
						  {
					?>
								<option selected value="<?php echo $area->idArea ?>"><?php echo $area->nombreArea?></option>
					<?php
						  } else {
					?>
			 						<option  value="<?php echo $area->idArea ?>"><?php echo $area->nombreArea?></option>			
					<?php
								 }
				}
					?>
		 </select>
	</div>
	<div>
		<label>recursos</label>
		 <select name="idRecursosHumanos" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($recursos as $recurso) 
				{
						 if ($recurso->idRecursosHumanos == $data[0]->idRecursosHumanos)
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