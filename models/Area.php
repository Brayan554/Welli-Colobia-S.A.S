<?php

/**
 * 
 */
class Area 
{	

	private $idArea;
	private $nombreArea;
	private $descripcionArea;
	private $idEstado;
	private $idRecursosHumanos;
	private $pdo;

	
	 public function __construct()
	{
		try {
				$this->pdo = new Database;

				} catch (PDOException $e) {
					die($e->getMessage());
				}		# code...
	}

	public function getAll(){
		try {
				$strSql = "SELECT * FROM ConsultaAreas";
				$query  = $this->pdo->select($strSql);
				return $query;
				
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


	public function newArea($data){

		try {
			  $data['idEstados'] = 1;
			  $this->pdo->insert('areas', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

		public function getAreaById($id){
		try {
			 
		$strSql = "SELECT * FROM areas WHERE idArea = :idArea";
			 $arrayData = ['idArea' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editArea($data){

		try {
			  $strWhere='idArea='.$data['idArea'];
				$this->pdo->update('areas', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deleteArea($data){

		try {
			$strWhere = 'idArea = ' .$data['idArea'];
			$this->pdo->delete('areas', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}
}