<?php 

class Type_statuses
{
	private $idTipo;
	private $nombreTipo;
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
			
			$strSql="SELECT * FROM tiposdeestados";
			$query = $this->pdo->select($strSql);
			return $query;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newType($data)
	{
		try {

			$data[0]->idTipo;
			$this->pdo->insert('tiposdeestados', $data);	
			} catch (PDOException $e) {
				die($e->getMessage());
			}
	}
	public function editType($data){
		try {
			
				$strWhere = 'idTipo = '. $data['idTipo'];
				$this->pdo->update('tiposdeestados', $data, $strWhere);
			} catch (PDOException $e) {
				die($e->getMessage());	
			}
	}

	public function getTypeById($id)
	{
		try {
			$strSql="SELECT * FROM tiposdeestados where idTipo = :idTipo";
			$arrayData = ['idTipo' => $id];
			$query = $this->pdo->select($strSql, $arrayData);
			return $query;	
		} catch (PDOException $e) {
			die($e->getMessage());
		}

	}

	public function deleteType($data){
		try {

			$strWhere = 'idTipo ='. $data['idTipo'];
			$this->pdo->delete('tiposdeestados', $strWhere);
			} catch (PDOException $e) {
				die($e->getMessage());	
			}
	}

}