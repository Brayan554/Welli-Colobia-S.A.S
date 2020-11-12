<main class="container">
	<article class="text-center col-md-9 offset-md-1 border rounded p-3 bg-white">
					<h1 class="font-weight-bold">Nueva Oferta</h1> 
	</article>
	<section class="col-md-9 offset-md-1 border rounded p-3 mt-2 bg-white">
		<div class="card w-75 m-auto">
			<div class="card-header container">
				
				<div class="card-body">
					<form action="?controller=oferta&method=save"        method="post">

						<div class="form-group">
							<label>Nombre Oferta</label>
							<input type="text" name="nombreOferta" class="form-control" placeholder="Descripcion"required>
						</div>
						<div class="form-group">
							<label>Fecha Inicial:</label>
							<input type="date" name="FechaInicial" class="form-control" placeholder="Nombre "required>
						</div>
						<div class="form-group">
							<label>Fecha Limite:</label>
							<input type="date" name="FechaLimite" class="form-control" placeholder="$%" required>
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