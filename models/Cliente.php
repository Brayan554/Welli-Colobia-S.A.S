<?php


class Cliente
{
	private $idCliente;
	private $NumeroIdentificacionCliente;
	private $nombreCliente;
	private $apellidoCliente;
	private $direccionCliente;
	private $telefonoCliente;
	private $emailCliente;
	private $idEstados;
	private $iduser;
	private $pdo;


	public function __construct()
	{
		try {

		$this->pdo = new Database;
			
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		
	}

	 public function getAll()
	 {
	 	try {
	 		$strSql = "SELECT * FROM consultarCliente";

	 		$query = $this->pdo->select($strSql);
	 		return $query;
	 		
	 	} catch (PDOException $e) {
	 		die($e->getMessage());
	 	}

	 }


	 public function newCliente($data){

		try {
			   $data['idEstados'] = 1;
			  $this->pdo->insert('clientes', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

		public function getClienteById($id){
		try {
			 
		$strSql = "SELECT * FROM clientes WHERE idCliente = :idCliente";
			 $arrayData = ['idCliente' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editCliente($data){

		try {
			 $strWhere='idCliente='.$data['idCliente'];
			$this->pdo->update('clientes', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deleteCliente($data){

		try {
			$strWhere = 'idCliente= ' .$data['idCliente'];
			$this->pdo->delete('clientes', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}


}