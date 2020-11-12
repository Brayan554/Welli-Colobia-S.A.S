<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nuevo Estado</h1> 
	</article>
		<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
			<div class="card w-75 m-auto">
				
			
 	<div class="card-body w-100">
	<form action="?controller=status&method=save" method="post">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombreEstado" class="form-control" placeholder="Estado">
						</div>
						<div>
		<label>Tipo de Estado</label>
		  <select name="idTipo" class="form-control">
			  <option value="">Seleccione</option>
							<?php
						foreach ($types as $type) 
							{
								
								 ?>
								   <option  value="<?php echo $type->idTipo?>"><?php echo 
								   $type->nombreTipo
								    ?></option>			
							  <?php
													
							}
								 ?>
		  </select>
	</div></br>
						

	<div class="form-group">
	<button  class="btn btn-primary"  id="submit">Guardar</button>
	</div>
</form> 
			   </div>
			</div>
		</section>

</main>

