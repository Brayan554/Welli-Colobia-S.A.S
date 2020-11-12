<?php

/**
 * 
 */
class Cargo
{	
	private $idCargo;
	private $nombreCargo;
	private $descripcionCargo;
	private $idEstados;
	private $pdo;

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
			
			$strSql = "SELECT * FROM consultaCargo";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}



	public function newCargo($data){

		try {
			  $data['idEstados'] = 1;
			  $this->pdo->insert('cargos', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function getCargoById($id){
		try {
			 
		$strSql = "SELECT * FROM cargos WHERE idCargo = :idCargo";
			 $arrayData = ['idCargo' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editCargo($data){

		try {
			 $strWhere='idCargo='.$data['idCargo'];
			$this->pdo->update('cargos', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deleteCargo($data){

		try {
			$strWhere = 'idCargo= ' .$data['idCargo'];
			$this->pdo->delete('cargos', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}
}