<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nueva Factura</h1> 
	</article>
	<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				
				<div class="card-body">
					<form action="?controller=factura&method=save"        method="post">
						<div class="form-group">
							<label>Descripcion Factura</label>
							<input type="text" name="descripcionFactura" class="form-control" placeholder="Descripcion"required>
						</div>
						<div class="form-group">
							<label>Fecha Parcial:</label>
							<input type="date" name="fechaParcial" class="form-control" placeholder="Nombre "required>
						</div>
						<div class="form-group">
							<label>Precio Parcial:</label>
							<input type="number" name="precioParcial" class="form-control" placeholder="$%" required>
						</div>
						
						
						<div class="form-group">
							<label>Impuestos</label>
							<input type="number" name="impuestos" class="form-control" placeholder="$%" required>
						</div>
						<div class="form-group">
							<label>Descuento</label>
							<input type="number" name="Descuento" class="form-control" placeholder="$%" required>
						</div>
						<div class="form-group">
							<label>Total A Pagar</label>
							<input type="number" name="TotalAPagar" class="form-control" placeholder="$" required>
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
		<label>Pagos</label>
		 <select name="idPago" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($pagos as $pago) 
				{
						 if ($pago->idPago == $data[0]->idPago)
						  {
					?>
								<option selected value="<?php echo $pago->idPago ?>"><?php echo $pago->fechaPago?></option>
					<?php
						  } else {
					?>
			 						<option  value="<?php echo $pago->idPago ?>"><?php echo $pago->fechaPago?></option>			
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
		 <select name="idUser" class="form-control">
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