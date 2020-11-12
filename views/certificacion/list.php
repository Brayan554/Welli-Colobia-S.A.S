<?php
    include_once 'providers/Database.php';
    if(isset($_POST['subir'])){

    $nombre = $_FILES['arc']['name'];
    $tipo = $_FILES['arc']['type'];
    $tamanio = $_FILES['arc']['size'];
    $ruta = $_FILES['arc']['tmp_name'];
    $destino = "archivos/".$nombre;

        if($nombre != ""){  
            if(copy($ruta , $destino )){
                $titulo = $_POST['titulo'];
                $descri = $_POST['descripcion'];
                $user = $_SESSION['user']->iduser;
                // $db = new Database();
                $conexion = mysqli_connect("localhost","root","","welliactual");
                $sql = "INSERT INTO tbl_documentos( titulo, descripcion, tamanio, tipo, nombre_archivo, usuario) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre','$user')";
                $query = mysqli_query($conexion, $sql);
                if($query){
                    echo "Inserccion Correcta";
                }else{
                    echo "Error";    
                }

            }else{
                echo "Error";
            }
        }
    }


?>


<html>
	<head>

		<title>Certificaciones</title>


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
            
    
		<h2 class="font-family">Certificaciones</h2>
		<div class="boton">
			
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>

		</div>
		<section class="row col-md-12 offset-md-0  col-sm-11 offset-sm-1  border rounded p-3 bg-white table-responsive">


            <?php 

            if($_SESSION['user']->idcargo == 1 || $_SESSION['user']->idcargo == 4 ) {
            
            ?>


	<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			      <tr>
			      <th>#</th>
			      <td>Descripcion</td>
                  <td>Tamaño</td>
                  <td>Tipo</td>
                  <td>Nombre</td>
                  <th>Usuario</th>
			      <th>Acciones</th>

			    </tr>
			</tr>
        </thead>
        <tbody>
        <?php
        
        $conexion = mysqli_connect("localhost","root","","welliactual");
        $sql = "SELECT c.*, u.nombreuser as nombreuser from tbl_documentos c inner join user u on u.iduser = c.usuario ";
        $query = mysqli_query($conexion, $sql);
        while($datos = mysqli_fetch_array($query)){?>
			    <tr>
			    
                <td><?php echo $datos['titulo'];?></td>
                <td><?php echo $datos['descripcion'];?></td>
                <td><?php echo $datos['tamanio'];?></td>
                <td><?php echo $datos['tipo'];?></td>
                
                
                <td><a href="?controller=certificacion&method=indexCer&id=<?php echo $datos ['id_documento'] ?>"><?php echo $datos['nombre_archivo'];?></a></td>
                
			    <td><?php echo $datos['nombreuser'];?></td>
			      <td>
			      
			      	<a href="?controller=certificacion&method=delete&id_documento=<?php echo $datos ['id_documento'] ?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      	 
			      </td>
               
			    </tr>
        <?php
            }
        ?>   
        </tbody>
    </table>
    


            
    <?php 
            
        }elseif($_SESSION['user']->idcargo == 3){
             
    ?>

<table id="data" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
			      <tr>
			      <th>#</th>
                  <th>Titulo</tH>
			      <td>Descripcion</td>
                  <td>Tamaño</td>
                  <td>Tipo</td>
                  <td>Nombre</td>
                  <th>Usuario</th>
			      <th>Acciones</th>

			    </tr>
			</tr>
        </thead>
        <tbody>
        <?php
        
        $conexion = mysqli_connect("localhost","root","","welliactual");
        $sql = "SELECT c.*, u.nombreuser as nombreuser from tbl_documentos c inner join user u on u.iduser = c.usuario ";
        $query = mysqli_query($conexion, $sql);
        while($datos = mysqli_fetch_array($query)){?>
			    <tr>


            <?php 
                if($_SESSION['user']->iduser == $datos['usuario']){
            ?>

                <td><?php echo $datos['id_documento'];?></td>
                <td><?php echo $datos['titulo'];?></td>
                <td><?php echo $datos['descripcion'];?></td>
                <td><?php echo $datos['tamanio'];?></td>
                <td><?php echo $datos['tipo'];?></td>
                
                
                <td><a href="?controller=certificacion&method=indexCer&id=<?php echo $datos ['id_documento'] ?>"><?php echo $datos['nombre_archivo'];?></a></td>
                
			    <td><?php echo $datos['nombreuser'];?></td>
			      <td>
			      
			      	<a href="?controller=certificacion&method=delete&id_documento=<?php echo $datos ['id_documento'] ?>" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>
			      	 
			      </td>
               
			    </tr>


                <?php 
                    }
                ?>


        <?php
            }
        ?>   
        </tbody>
    </table>       


    <?php
        } 
    ?>




		</section>

	</section>

    		
			
	

	<section>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Certificacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span onclick="window.location.href='?controller=status'" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="" method="post" enctype="multipart/form-data">
       <table>
                <tr>    
                    <td><label for="">Titulo</label></td>
                    <td>
                        <input type="text" name="titulo">
                    </td>      
                </tr>
                <tr>
                    <td><label for="">Descripcion</label></td>
                    <td><textarea name="descripcion"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        
                    <input type="file" name="arc">
                </td>
                </tr>
                <tr>
                    <td><input type="submit" value="enviar" name="subir"></td>
                    
                </tr>                

            </table>			
        </form>		
      </div>
    </div>
  </div>
</div>
	</section>

</main>

</body>
</html>



