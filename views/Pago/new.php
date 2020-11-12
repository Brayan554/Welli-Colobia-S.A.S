<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nuevo Pago</h1> 
	</article>
	<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				
				<div class="card-body">
					<form action="?controller=pago&method=save"        method="post">
						<div class="form-group">
							<label>Fecha Pago</label>
							<input type="date" name="fechaPago" class="form-control" placeholder="dd/mm/aaaa"required>
						</div>
						<div class="form-group">
							<label>Devolucion Pago:</label>
							<input type="number" name="DevolucionPago" class="form-control" placeholder=" $ Devolucion  "required>
						</div>
						<div class="form-group">
							<label>Fecha Inicial Pago:</label>
							<input type="date" name="FechaInicialPago" class="form-control" placeholder="$%" required>
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
					  foreach ($clientes  as $cliente) 
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
	</div>
	
	<div>
		<label>Servicio</label>
		 <select name="idServicio" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($Servicios as $Servicio) 
				{
						 if ($Servicio->idServicio == $data[0]->idServicio)
						  {
					?>
								<option selected value="<?php echo $Servicio->idServicio ?>"><?php echo $Servicio->nombreServicio?></option>
					<?php
						  } else {
					?>
			 						<option  value="<?php echo $Servicio->idServicio ?>"><?php echo $Servicio->nombreServicio?></option>			
					<?php
								 }
				}
					?>
		 </select>
	</div>
	<div>
		<label>Usuario</label>
		 <select name="idUsuario" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($Usuarios as $usuario) 
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