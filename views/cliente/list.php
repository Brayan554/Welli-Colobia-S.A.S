<html>
	<head>

		<title>Clientes</title>


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

      th {

      }
    </style>
	</head>
<body>

	<main class="container">
	<section class="row col-md-12 offset-md-0 col-sm-11 offset-sm-1  border rounded p-3 bg-white">

		<h2 class="font-family">Clientes</h2>
		<div class="boton">
			
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fas fa-user-plus"></i></button>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">
			
	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			      <th >#</th>
			      <th>Identificaciòn</th>
			      <th >Nombre</th>
			      <th >Apellido</th>
			      <th >Direccion</th>
			      <th >Telefono</th>
			      <th >email</th>
			      <th>Estado</th>
			      <th>Usuario</th>
			      <th> Acciones</th>
			</tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente) : ?> 
			    <tr>
			    
			      <td><?php echo $cliente->idCliente?></td>
			      <td><?php echo $cliente->NumeroIdentificacionCliente?></td>
			      <td><?php echo $cliente->nombreCliente?></td>
			      <td><?php echo $cliente->apellidoCliente?></td>
			      <td><?php echo $cliente->direccionCliente?></td>
			      <td><?php echo $cliente->telefonoCliente?></td>
			      <td><?php echo $cliente->emailCliente?></td>
			       <td><?php echo $cliente->nombreEstado?></td>
			        <td><?php echo $cliente->nombreuser?></td>
			      
			      <td>

			      	<a type="button" data-toggle="modal"  data-target="#exampleModal<?php echo $cliente->idCliente?>" href="?controller=cliente&method=edit&idCliente=<?php
			      	echo $cliente->idCliente?>" class="btn btn-primary"><span class="icon-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>


			      	<a href="?controller=cliente&method=delete&idCliente=<?php echo $cliente->idCliente ?>" class="btn btn-warning"><span class="icon-times"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      </td>
			    </tr>
			  	
			  <?php endforeach?>
        </tbody>
    </table>

		</section>

	</section>
			
		<?php
			foreach ($clientes as $cliente) :
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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=cliente'"   aria-hidden="true" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=cliente&method=save"        method="post" onsubmit="return validarCliente();">
            <div class="form-group">
              <label># Identificacion</label>
              <input type="number" id="NumeroIdentificacionCliente" name="NumeroIdentificacionCliente" class="form-control" placeholder="c.c" required>
            </div>
            <div class="form-group">
              <label>Nombre:</label>
              <input type="text" id="nombreCliente" name="nombreCliente" class="form-control" placeholder="Nombre " required>
            </div>
            <div class="form-group">
              <label>Apellido:</label>
              <input type="text" id="apellidoCliente" name="apellidoCliente" class="form-control" placeholder="apellido" required>
            </div>
            <div class="form-group">
              <label>Direccion</label>
              <input type="text" id="direccionCliente" name="direccionCliente" class="form-control" placeholder=" ej: cl 125a 154a 25" required >
            </div>
            <div class="form-group">
              <label>Celular</label>
              <input type="number" id="telefonoCliente" name="telefonoCliente" class="form-control" placeholder="ej:311.." required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" id="emailCliente" name="emailCliente" class="form-control" placeholder="@gmail.com" required>
            </div>
  <div>
    <label>Usuario</label>
     <select id="iduser" name="iduser" class="form-control" required>
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
  </div>

						
     	<div class="modal-footer">
        <input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=cliente'" /> 
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



