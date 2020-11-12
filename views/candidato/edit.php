<main class="container">
	
	<section >


		<div class="modal fade" id="exampleModal<?php echo $candidato->idCandidato?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Candidatos </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=candidato&method=update"        method="post">

					<input type="hidden" name="idCandidato" 
					value="<?php echo $candidato->idCandidato ?>">
					<center>
					
					<div class="form-group">
					<img width=150px; height=100px; src="imagen/foto_<?php echo  $candidato->idCandidato?>.jpg?<?php echo rand(0,1000)?>" >
					</div>
					</center>
						<div class="form-group">
							<label>Identificacion</label>
							<input type="number" name="NumeroIdentificacionCandidato" class="form-control"  
							value="<?php echo $candidato->NumeroIdentificacionCandidato ?>">
						</div>

						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombreCandidato" class="form-control"  
							value="<?php echo $candidato->nombreCandidato ?>">
						</div>
						<div class="form-group">
							<label>Apellido</label>
							<input type="text" name="apellidoCandidato" class="form-control"  
							value="<?php echo $candidato->apellidoCandidato ?>">
						</div>
						<div class="form-group">
							<label>Direccion:</label>
							<input type="text" name="direccionCandidato" class="form-control"  
							value="<?php echo $candidato->direccionCandidato ?>">
						</div>
						<div class="form-group">
							<label>Telefono</label>
							<input type="number" name="telefonoCandidato" class="form-control"  
							value="<?php echo $candidato->telefonoCandidato ?>">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="emailCandidato" class="form-control"  
							value="<?php echo $candidato->emailCandidato ?>">
						</div>
						<div class="form-group">
							<label>años Experiencia</label>
							<input type="text" name="anosExperiencia" class="form-control"  
							value="<?php echo $candidato->anosExperiencia ?>">
						</div>
						<div class="form-group">
							<label>descripcion Laboral</label>
							<input type="text" name="descripcionReferenciaLaboral" class="form-control"  
							value="<?php echo $candidato->descripcionReferenciaLaboral ?>">
						</div>
						<div class="form-group">
							<label>contacto Referencia</label>
							<input type="number" name="contactoReferencia" class="form-control"  
							value="<?php echo $candidato->contactoReferencia ?>">
						</div>
						<div class="form-group">
							<label>direccion Referencia</label>
							<input type="text" name="direccionReferencia" class="form-control"  
							value="<?php echo $candidato->direccionReferencia ?>">
						</div>
						<div class="form-group">
							<label>Nombre Referencia</label>
							<input type="text" name="nombreReferencia" class="form-control"  
							value="<?php echo $candidato->nombreReferencia ?>">
						</div>
						<div class="form-group">
							<label>estudios</label>
							<input type="text" name="estudios" class="form-control"  
							value="<?php echo $candidato->estudios ?>">
						</div>
	<div>
		<label>Usuarios</label>
		 <select name="iduser" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($usuarios as $usuario) 
				{
						 if ($usuario->iduser == $candidato->iduser)
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
		<label>Estado</label>
		 <select name="idEstados" class="form-control">
			 <option value="">Seleccione</option>
			  	<?php
					  foreach ($estados  as $estado) 
				{
						 if ($estado->idEstados == $candidato->idEstados)
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
        <button class="btn btn-primary">Actualizar</button>
       
        </form>		


      </div>
    </div>
  </div>
</div>

	</section>
</main>