<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nuevo Candidato</h1> 
	</article>
	<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				
				<div class="card-body">
					<form action="?controller=candidato&method=save"        method="post">
						<div class="form-group">
							<label># Identificacion</label>
							<input type="number" name="NumeroIdentificacionCandidato" class="form-control" placeholder="c.c"required>
						</div>
						<div class="form-group">
							<label>Nombre:</label>
							<input type="text" name="nombreCandidato" class="form-control" placeholder="Nombre "required>
						</div>
						<div class="form-group">
							<label>Apellido:</label>
							<input type="text" name="apellidoCandidato" class="form-control" placeholder="apellido" required>
						</div>
						<div class="form-group">
							<label>Direccion</label>
							<input type="text" name="direccionCandidato" class="form-control" placeholder="direccion"  required>
						</div>
						<div class="form-group">
							<label>Telefono</label>
							<input type="number" name="telefonoCandidato" class="form-control" placeholder="ej:311.." required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="emailCandidato" class="form-control" placeholder="@gmail.com" required>
						</div>
						
						<div class="form-group">
							<label>años de Experiencia</label>
							<input type="number" name="anosExperiencia" class="form-control" placeholder="años" required>
						</div>
						<div class="form-group">
							<label>Descripcion Laboral </label>
							<input type="text" name="descripcionReferenciaLaboral" class="form-control" placeholder="Referencia Laboral" required>
						</div>
						<div class="form-group">
							<label>Contacto </label>
							<input type="number" name="descripcionReferenciaLaboral" class="form-control" placeholder="Contacto Laboral" required>
						</div>
						<div class="form-group">
							<label>Direccion Referencia </label>
							<input type="text" name="direccionReferencia" class="form-control" placeholder="Direccion" required>
						</div>
						<div class="form-group">
							<label>Nombre Referencia </label>
							<input type="text" name="nombreReferencia" class="form-control" placeholder="nombre" required>
						</div>
						<div class="form-group">
							<label>Estudios</label>
							<input type="text" name="estudios" class="form-control" placeholder="Estudios" required>
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
	</div></br>
					
						<div class="form-group">
							<button class="btn btn-success">Guardar</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>