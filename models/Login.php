<?php

/**
 * 
 */
class Login 
{
	
	public function __construct()
	{
		try {
			
			$this->pdo = new Database;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function validateUser($data)
	{
		try {
			
			
			$strSql = "SELECT u.*, s.nombreEstado as status , c.nombreCargo as cargo From user u INNER JOIN estados s on s.idEstados = u.idEstado INNER JOIN cargos c on c.idCargo = u.idcargo  WHERE u.emailuser = '{$data['email']}' AND u.contrasena = '{$data['contrasena']}' AND u.idEstado = 1 ";

			$query = $this->pdo->select($strSql);

			if (isset($query[0]->iduser)) {
				 if ($query[0]->idestado == 1) {
				 	
					$_SESSION['user'] = $query[0];
					return true;

				 }else{
				 	
				 	return 'Error al Iniciar Sesion , Su Usuario se encuentras desactivado';
				 }

			}else{
				
				return 'Error al Iniciar Sesion , Verifique sus Credenciales' ;
			}


		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


}