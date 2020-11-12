<main class="container">
	<section>	
			<div class="modal fade" id="exampleModal<?php echo $cliente->idCliente?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="color" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



       <form action="?controller=cliente&method=update"        method="post">

          <input type="hidden" name="idCliente" 
          value="<?php echo $cliente->idCliente ?>">

            <div class="form-group">
              <label>Identificacion</label>
              <input type="number" name="NumeroIdentificacionCliente" class="form-control"  
              value="<?php echo $cliente->NumeroIdentificacionCliente ?>">
            </div>

            <div class="form-group">
              <label>Nombre</label>
              <input type="text" name="nombreCliente" class="form-control"  
              value="<?php echo $cliente->nombreCliente ?>">
            </div>
            <div class="form-group">
              <label>Apellido</label>
              <input type="text" name="apellidoCliente" class="form-control"  
              value="<?php echo $cliente->apellidoCliente ?>">
            </div>
            <div class="form-group">
              <label>Direccion:</label>
              <input type="text" name="direccionCliente" class="form-control"  
              value="<?php echo $cliente->direccionCliente ?>">
            </div>
            <div class="form-group">
              <label>Telefono</label>
              <input type="number" name="telefonoCliente" class="form-control"  
              value="<?php echo $cliente->telefonoCliente ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="emailCliente" class="form-control"  
              value="<?php echo $cliente->emailCliente ?>">
            </div>
            
  <div>
    <label>Usuarios</label>
     <select name="iduser" class="form-control">
       <option value="">Seleccione</option>
          <?php
            foreach ($usuarios as $usuario) 
        {
             if ($usuario->iduser == $cliente->iduser)
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
             if ($estado->idEstados == $cliente->idEstados)
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