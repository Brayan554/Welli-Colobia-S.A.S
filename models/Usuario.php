<?php

/**
 * 
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

class Usuario
{
	private $iduser;
	private $nombreuser;
	private $emailuser;
	private $contrasena;
	private $idCargo;
	private $idestado;


	public function __construct()
	{
		try {

			$this->pdo = new Database;
			
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAll(){
		try {
			
			$strSql="SELECT * FROM consultarUsuarios";

			$query = $this->pdo->select($strSql);
			return $query;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getUsuarioById($id){
		try {
			$strSql = "SELECT * FROM user WHERE iduser = :iduser";
			$arrayData = ['iduser' => $id];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newUsuario($data){
		try {
				$data['idestado'] = 1;

				$this->pdo->insert('user', $data);
				} catch (PDOException $e) {
				die($e->getMessage());
				}
	       }

	 public function editUsuario($data){
		try {
			$strWhere = 'iduser =' .$data['iduser'];
			$this->pdo->update('user', $data , $strWhere);

			
		} catch (PDOException $e) {
			die($e->getMessage());
		}

	}

	



	public function deleteUsuario($data){
		
		try {

			$strWhere = 'iduser =' .$data['iduser'];
			$this->pdo->delete('user' , $strWhere);

			
		} catch (PDOException $e) {
			die($e->getMessage());
			
		}
	}


	public function Registrar($usuario,$enviar)
    {
        try {
            
            			$data['nombreuser']=$usuario[0];
						$data['emailuser']=$usuario[1];
						$data['idcargo']=3;
						$data['idestado']=1;
						$data['contrasena'] = $enviar;
											
            $this->pdo->insert('user', $data);
            return $pass;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
		}



	
		


public function sendemail(){ 
			try{
				
	$mail = new PHPMailer(true);

	$nombre = $_POST['nombreuser'];
	$correo = $_POST['emailuser']; 

	try{
		$mail->SMTPOptions = array(
						'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true

					)
				);

			$longitud = 8; 
	$pass = substr(md5(rand()),0,$longitud);
	


		 $mail->SMTPDebug = 0;                      // Enable verbose debug output
	$mail->isSMTP();                                            // Send using SMTP
	$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	$mail->Username   = 'wellicolombias.a.s@gmail.com';                     // SMTP username
	$mail->Password   = '3143089714';                               // SMTP pass
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryptionword; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port       = 587;                               // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	//Recipients
	$mail->setFrom('wellicolombias.a.s@gmail.com', 'Welli Colombia S.A.S');
	$mail->addAddress($correo, $nombre);     // Add a recipient

	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Hola A Welli Colombia S.A.S';
	$mail->Body    = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<table style="border: 1px solid black;width: 100%;">
	<thead>
			<tr>
					<td style="text-align: center;background: #ED1111 ;color: #FFFF" colspan="2">
							<h1>BIENVENIDO A Welli Colombia S.A.S - '.$nombre.'</h1>
					</td>
			</tr>
			<tr>
					<td style="text-align: left;" width="28%">
					<i class="fas fa-user width="100" height="100""></i>
					
					</td>
					<td style="text-align: left;"  align="justify"><span style="font-size: 25px;">Bienvenidos A Welli Colombia S.A.S!<br><br><p>Su contraseña es:  '.$pass.'</p>       </span>
					</td>
			</tr>
	</thead>
</table>
</body>
</html>';
$mail->send();
return $pass ;

	}catch(Exeption $e){
				return false;
				die($e->getMessage());
	}   
	
			}catch(Exception $e){
					return false;
					die($e->getMessage());
			}
	}
	
	





// 	public function sendemail2(){
// 		try{
// $mail = new PHPMailer(true);


// $correo = $_POST['emailuser']; 
// $longitud = 8; 
// $pass = substr(md5(rand()),0,$longitud);


// try{
// 	 $mail->SMTPDebug = 0;                      // Enable verbose debug output
// $mail->isSMTP();                                            // Send using SMTP
// $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
// $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
// $mail->Username   = 'wellicolombias.a.s@gmail.com';                     // SMTP username
// $mail->Password   = '3143089714';                               // SMTP password
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
// $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

// //Recipients
// $mail->setFrom('wellicolombias.a.s@gmail.com', 'Welli Colombia S.A.S');
// $mail->addAddress($correo);     // Add a recipient

// // Content
// $mail->isHTML(true);                                  // Set email format to HTML
// $mail->Subject = 'Hola A Welli Colombia S.A.S';
// $mail->Body    = '<!DOCTYPE html>
// <html lang="en">
// <head>
// <meta charset="utf-8">
// <meta name="viewport" content="width=device-width, initial-scale=1.0">
// <title>Document</title>
// </head>
// <body>
// <table style="border: 1px solid black;width: 100%;">
// <thead>
// 		<tr>
// 				<td style="text-align: center;background: #ED1111 ;color: #FFFF" colspan="2">
// 						<h1>Recuperar A Welli Colombia S.A.S -</h1>
// 				</td>
// 		</tr>
// 		<tr>
// 				<td style="text-align: left;" width="28%">
// 				<i class="fas fa-user width="100" height="100""></i>
				
// 				</td>
// 				<td style="text-align: left;" align="justify"><span style="font-size: 25px;">Bienvenidos A Welli Colombia S.A.S!<br><br><p>Su contraseña es:  '.$pass.'</p>       </span>
// 				</td>
// 		</tr>
// </thead>
// </table>
// </body>
// </html>';
// $mail->send();
// return $pass;

// }catch(Exeption $e){
// 			return false;
// 			die($e->getMessage());
// }   

// 		}catch(Exception $e){
// 				return false;
// 				die($e->getMessage());
// 		}
// }






	public function updatepassword($clavenueva){
		try {
					$data=$clavenueva;
					$strWhere =$_SESSION['user']->iduser;
					/* MySQL Conexion*/
					$link = mysqli_connect("localhost", "root", '', "welliactual");
					// Chequea coneccion
					if($link === false){
							die("ERROR: No pudo conectarse con la DB. " . mysqli_connect_error());
					}
					// Ejecuta la actualizacion del registro
					$sql = "UPDATE user SET contrasena = '$data' WHERE iduser='$strWhere'";
					if(mysqli_query($link, $sql)){
							//echo "Registro actualizado.";
					} else {
							echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
					}
					// Cierra la conexion
					mysqli_close($link);        
					return true;
			} catch(PDOException $e) {  
					die($e->getMessage());
			}       
	}
}