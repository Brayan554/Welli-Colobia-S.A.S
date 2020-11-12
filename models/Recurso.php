<?php

/**
 * 
 */
class Recurso
{
	
	private $idRecursosHumanos;
	private $NumeroIdentificacionRecursosHumanos;
	private $nombreRecursosHumanos;
	private $ApellidoRecursosHumanos;
	private $emailRecursosHumanos;
	private $idCargo;
	private $idEstados;
	private $iduser;

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
			
			$strSql= "SELECT * FROM consultarRecurso";
				$query = $this->pdo->select($strSql);
				return $query;
				
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	 public function newRecurso($data){

		try {
			  $data['idEstados'] = 1;
			  $data['idCargo'] = 2;
			  $this->pdo->insert('recursoshumanos', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function getRecursoById($id){
		try {
			 
		$strSql = "SELECT * FROM recursoshumanos WHERE idRecursosHumanos = :idRecursosHumanos";
			 $arrayData = ['idRecursosHumanos' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editRecurso($data){

		try {
			 $strWhere='idRecursosHumanos='.$data['idRecursosHumanos'];
			$this->pdo->update('recursoshumanos', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deleteRecurso($data){

		try {
			
			$strWhere = 'idRecursosHumanos= ' .$data['idRecursosHumanos'];
			$this->pdo->delete('recursoshumanos', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

}