<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nuevo Usuario</h1> 
	</article>
		<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
			<div class="card w-75 m-auto">
				
			
 	<div class="card-body w-100">
	<form action="?controller=usuario&method=save" method="post">
						<div class="form-group">
							<label>Nombre Usuario</label>
							<input type="text" name="nombreuser" class="form-control" placeholder="Nombre">
						</div>
						<div class="form-group">
							<label>Email Usuario</label>
							<input type="email" name="emailuser" class="form-control" placeholder="@gmail.com">
						</div>
						<div class="form-group">
							<label>contraseña</label>
							<input type="password" name="contrasena" class="form-control" placeholder="****">
						</div>

	<div>
		<label>Cargo</label>
		  <select name="idCargo" class="form-control">
			  <option value="">Seleccione</option>
							<?php
						foreach ($cargos as $cargo) 
							{
								
								 ?>
								   <option  value="<?php echo $cargo->idCargo?>"><?php echo 
								   $cargo->nombreCargo
								    ?></option>			
							  <?php
													
							}
								 ?>
		  </select>
	</div></br>
						

	<div class="form-group">
	<button  class="btn btn-primary"  type="submit">Guardar</button>
	</div>
</form> 
			   </div>
			</div>
		</section>

</main>

