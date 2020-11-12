<?php

/**
 * 
 */
class Status
{
	private $idEstados;
	private $nombreEstado;
	private $idTipo;

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
			$strSql = "SELECT * FROM consultarEstados";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getstatusById($id){
		try {
			$strSql = "SELECT * FROM estados WHERE idEstados = :idEstados";
			$arrayData = ['idEstados' => $id];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newStatus($data){
		try {
				
				$this->pdo->insert('estados', $data);
				} catch (PDOException $e) {
				die($e->getMessage());
				}
	       }

	public function editStatus($data){
		try {
			$strWhere = 'idEstados =' .$data['idEstados'];
			$this->pdo->update('estados', $data , $strWhere);

			
		} catch (PDOException $e) {
			die($e->getMessage());
		}

	}

	public function deleteStatus($data){
		
		try {

			$strWhere = 'idEstados =' .$data['idEstados'];
			$this->pdo->delete('estados' , $strWhere);

			
		} catch (PDOException $e) {
			die($e->getMessage());
			
		}
	}
}