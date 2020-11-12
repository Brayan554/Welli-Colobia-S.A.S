<!DOCTYPE html>
<html>
<head>
	<title>Modal Formulario Oferta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="assets/modalcss/modal.css">
	
</head>
<body>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nueva Area</button>









<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div  class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=usuario&method=update"        method="post">

          <input type="hidden" name="iduser" 
          value="<?php echo $data[0]->iduser ?>">

            <div class="form-group">
              <label>Nombre Usuario</label>
              <input type="text" name="nombreuser" class="form-control"  
              value="<?php echo $data[0]->nombreuser ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="emailuser" class="form-control"  
              value="<?php echo $data[0]->emailuser ?>">
            </div>
            <div class="form-group">
              <label>Contraseña:</label>
              <input type="password" name="contrasena" class="form-control"  
              value="<?php echo $data[0]->contrasena ?>">
            </div>
            
            
            
  <div>
    <label>Cargos</label>
     <select name="idcargo" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($cargos as $cargo) 
        {
             if ($cargo->idCargo == $data[0]->idcargo)
              {
          ?>
                <option selected value="<?php echo $cargo->idCargo ?>"><?php echo $cargo->nombreCargo?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $cargo->idCargo ?>"><?php echo $cargo->nombreCargo?></option>      
          <?php
                 }
        }
          ?>
     </select>
  </div>
  <div>
    <label>Estado</label>
     <select name="idestado" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($estados  as $estado) 
        {
             if ($estado->idEstados == $data[0]->idestado)
              {
          ?>
                <option selected value="<?php echo $estado->idEstados ?>"><?php echo $estado->nombreEstado?></option>
          <?php
              } else {
          ?>
                  <option  value="<?php echo $estado->idEstados?>"><?php echo $estado->nombreEstado?></option>      
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




	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>