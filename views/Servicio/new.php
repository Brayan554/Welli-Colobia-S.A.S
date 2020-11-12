<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nuevo Servicio</h1> 
	</article>
	<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				
				<div class="card-body">
					<form action="?controller=servicio&method=save"        method="post">
						
						<div class="form-group">
							<label>Nombre:</label>
							<input type="text" name="nombreServicio" class="form-control" placeholder="Nombre "required>
						</div>
						<div class="form-group">
							<label>Duracion Servicio:</label>
							<input type="text" name="duracionServicio" class="form-control" placeholder="Horas/Dias/Meses" required>
						</div>
						
						
						<div class="form-group">
							<label>Costo Servicio</label>
							<input type="number" name="costoServicio" class="form-control" placeholder="$...." required>
						</div>
						<div class="form-group">
							<label>Novedades Servicio</label>
							<input type="text" name="novedadesServicio" class="form-control" placeholder=".ninguna." required>
						</div>
	<div>
		<label>Empleado</label>
		 <select name="idEmpleado" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($empleados as $empleado) 
				{
						 if ($empleado->idEmpleado == $data[0]->idEmpleado)
						  {
					?>
								<option selected value="<?php echo $empleado->idEmpleado ?>"><?php echo $empleado->nombreEmpleado?></option>
					<?php
						  } else {
					?>
			 						<option  value="<?php echo $empleado->idEmpleado ?>"><?php echo $empleado->nombreEmpleado?></option>			
					<?php
								 }
				}
					?>
		 </select>
	</div>
<div>
		<label>Cliente</label>
		 <select name="idCliente" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($clientes as $cliente) 
				{
						 if ($cliente->idCliente == $data[0]->idCliente)
						  {
					?>
								<option selected value="<?php echo $cliente->idCliente ?>"><?php echo $cliente->nombreCliente?></option>
					<?php
						  } else {
					?>
			 						<option  value="<?php echo $cliente->idCliente ?>"><?php echo $cliente->nombreCliente?></option>			
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