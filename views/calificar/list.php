<html>
	<head>

		<title>Calificaciones</title>


		<script type="text/javascript" src="Datatable/js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="Datatable/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="Datatable/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="Datatable/js/tablas.js"></script>
		<script type="text/javascript" src="js/validacionForms.js"></script>


		<link rel="stylesheet" type="text/css" href="Datatable/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="Datatable/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/modalcss/modal.css">
		 <style>
      .boton{
        margin: -5% auto auto 90%;      
      }

         </style>
	</head>
<body>

	<main class="container">
	<section class="row col-md-12 offset-md-0 col-sm-11 offset-sm-1  border rounded p-3 bg-white">

		<h2 class="font-family">Calificaciones</h2>
		
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			    <th>#</th>
			      <th>Identificacion Candidato</th>
			      <th>Nombre Candidato</th>
            <th>Puntuacion(0 a 100 aplicar)</th>
			      <th>Apellido Candidato</th>
                  <th>Direccion Candidato</th>
                  <th>Telefono Candidato</th>
                  <th>Email Candidato</th>
                  <th>años Experiencia</th>
                  <th>Descripcion Referencia Laboral</th>
                  <th>Contacto Referencial</th>
                  <th>Direccion Referencia</th>
                  <th>Nombre Referencia Laboral</th>
                  <th>Estudios</th>
                  <th>Estudios Segundarios</th>
                  <th>Estudios Superiores</th>
                  <th>Cantidad Titulos</th>
                  
                  <th>Estados</th>
                  <th>Usuarios</th>             
			      <th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach ($Calificar as $calificar) : ?> 
			    <tr>
			    
			      <td><?php echo $calificar->idCandidato?></td>
			      <td><?php echo $calificar->NumeroIdentificacionCandidato?></td>
			      <td><?php echo $calificar->nombreCandidato?></td>
                  <td><?php echo $calificar->porcentajePuntuacion?></td>
			      <td><?php echo $calificar->apellidoCandidato?></td>
			      <td><?php echo $calificar->direccionCandidato?></td>
                  <td><?php echo $calificar->telefonoCandidato?></td>
                  <td><?php echo $calificar->emailCandidato?></td>
                  <td><?php echo $calificar->anosExperiencia?></td>
                  <td><?php echo $calificar->descripcionReferenciaLaboral?></td>
                  <td><?php echo $calificar->contactoReferencia?></td>
                  <td><?php echo $calificar->direccionReferencia?></td>
                  <td><?php echo $calificar->nombreReferencia?></td>
                  <td><?php echo $calificar->estudios?></td>
                  <td><?php echo $calificar->estudiosSegundarios?></td>
                  <td><?php echo $calificar->estudiosSuperiores?></td>
                  <td><?php echo $calificar->CantidadTitulos?></td>
                  
                  <td><?php echo $calificar->nombreEstado?></td>
                  <td><?php echo $calificar->nombreuser?></td>
			      <td>
			      	
			      	<a href="?controller=calificar&method=delete&idCandidato=
					      	<?php echo $calificar->idCandidato?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>

                   <a href="?controller=calificar&method=editFormatoHJ2&idCandidato=<?php
			      	echo $calificar->idCandidato?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			      </td>
			      	
			     
			      

			    </tr>
			  	
			  <?php endforeach?>
			    
        </tbody>
    </table>

		</section>

	</section>
		<?php
			foreach ($Calificar as $calificar) :
				include 'edit.php';
		?>
		<?php
			endforeach
		?>

	<section>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cargo.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=cargo'" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=cargo&method=save"        method="post" onsubmit="return validarCargo();">
            <div class="form-group">
              <label>Nombre Cargo</label>
              <input id="nombreCargo" type="text" name="nombreCargo" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label>Descripcion Cargo</label>
              <textarea id="descripcionCargo" class="form-control" rows="3" name="descripcionCargo" placeholder="Descripcion" ></textarea>
            </div>
            
            
     	<div class="modal-footer">
        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=cargo'" /> 
        <input type="submit" value="Guardar" class="btn btn-success">
       
        </form>		


      </div>
    </div>
  </div>
</div>
	</section>

</main>

</body>
</html>



