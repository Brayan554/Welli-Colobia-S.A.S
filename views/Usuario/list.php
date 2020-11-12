<html>
	<head>

		<title>Usuarios.</title>


		<script type="text/javascript" src="Datatable/js/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="Datatable/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="Datatable/js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="Datatable/js/tablas.js"></script>
		<script type="text/javascript" src="js/validacionForms.js"></script>
		


		<link rel="stylesheet" type="text/css" href="Datatable/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="Datatable/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/modalcss/modal.css">
		<link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
			.boton{
				margin: -5% auto auto 90%;			
			}

			th {

			}
		</style>
	</head>
<body>

	<main class="container">
		
	<section class="row col-md-12 offset-md-0 col-sm-11 offset-sm-1  border rounded p-3 bg-white">

		<h2 class="font-family">Usuarios.</h2>
		<div class="boton">
			
			<a type="button" data-toggle="modal" data-target="#exampleModal" href="?controller=pago&method=new"  class="btn btn-danger "><span class="icon-plus"></span><i class="fas fa-user-plus"></i></a>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			     <th>#</th>
			      <th>Nombre Usuario</th>
			      <th>email Usuario</th>
			      <th>Contraseña Usuario</th>
			      <th>Cargo Usuario</th>
			      <th>Estado Usuario</th>
			      <th>Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach($Usuarios as $Usuario) : ?> 
			    <tr>
			    
			      <td><?php echo $Usuario->iduser?></td>
			      <td><?php echo $Usuario->nombreuser?></td>
				  <td><?php echo $Usuario->emailuser?></td>
				  <td><?php echo $Usuario->contrasena?></td>
				   <td><?php echo $Usuario->nombreCargo?></td>
				    <td><?php echo $Usuario->nombreEstados?></td>

			 
			      <td>
			      	<a type="button" data-toggle="modal"
			      	data-target="#exampleModal<?php echo $Usuario->iduser?>" href="?controller=usuario&method=edit&iduser=<?php echo $Usuario->iduser?>" class="btn btn-primary"><span class="icon-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
			      	
			      	<a href="?controller=usuario&method=delete&iduser=<?php echo $Usuario->iduser ?>" class="btn btn-secondary"><span class="icon-times"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      	
			      </td>
			    </tr>
			  <?php endforeach?>
			    
        </tbody>
    </table>

		</section>

	</section>

		<?php
			foreach ($Usuarios as $Usuario):
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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=usuario'" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=usuario&method=save" method="post"  onsubmit="return validarUsuario();">
            <div class="form-group">
              <label>Nombre y Apellido </label>
              <input type="text" id="nombreuser" name="nombreuser" class="form-control" placeholder="Primer Nombres/ Primer Apellido" required>
            </div>
            <div class="form-group">
              <label>Email Usuario</label>
              <input type="email" id="emailuser" name="emailuser" class="form-control" placeholder="@gmail.com" required>
            </div>
            <div class="form-group">
              <label >contraseña</label><i class=" fa fa-eye" id="show"></i>
              <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="****" required>
            </div>

  <div>
    <label>Cargo</label>
      <select id="idCargo" name="idCargo" class="form-control" required>
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
  </div>
            
     	<div class="modal-footer">
       <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=usuario'" />
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



