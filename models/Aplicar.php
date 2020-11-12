<?php

/**
 * 
 */
class Aplicar
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
				$data['contrasena'] = 123;
				$data['idCargo'] = 3;
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



}