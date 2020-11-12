<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
<?php
        
        $conexion = mysqli_connect("localhost","root","","welliactual");
        $sql = "select * from  tbl_documentos where id_documento =".$_GET['id'];
        $query = mysqli_query($conexion, $sql);
        if($datos = mysqli_fetch_array($query)){
            if($datos['nombre_archivo'] == ""){

            

            ?>
            <p>No tienes Archivos</p>
            <?php 
                }else{

                
            ?> 
           <iframe src="archivos/<?php echo $datos['nombre_archivo']; ?>" width=1250px; height=1000px;></iframe>
            
        <?php
         } }
        ?>
</body>
</html>