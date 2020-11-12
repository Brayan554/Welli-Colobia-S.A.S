<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nuevo Cargo</h1> 
	</article>
	<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				
				<div class="card-body">
					<form action="?controller=cargo&method=save"        method="post">
						<div class="form-group">
							<label>Nombre Cargo</label>
							<input type="text" name="nombreCargo" class="form-control" placeholder="Nombre"required>
						</div>
						<div class="form-group">
							<label>Descripcion Cargo</label>
							<input type="text" name="descripcionCargo" class="form-control" placeholder="Descripcion"required>
						</div>
						

					
						<div class="form-group">
							<button class="btn btn-primary">Guardar</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>