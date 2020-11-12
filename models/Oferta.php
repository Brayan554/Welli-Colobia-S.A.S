<?php

/**
 * 
 */
class Oferta 
{
	
	private $idOferta;
	private $nombreOferta;
	private $FechaInicial;
	private $FechaLimite;
	private $idEstados;

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
			
			$strSql = "SELECT o.*, s.nombreEstado as nombreEstado from ofertas o inner Join estados s on s.idEstados = o.idEstados  order by idOferta";
			$query  = $this->pdo->select($strSql);
			return $query;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	
	public function getAllUsu(){
		try {
			
			$strSql = "SELECT * from consultaOferta ";
			$query  = $this->pdo->select($strSql);
			return $query;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newOferta($data){

		try {
				$data['idEstados'] = 1;
				
				$this->pdo->insert('ofertas', $data);	
				$this->pdo->insert('notificaciones', $data);					
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function getOfertaById($id){
		try {
			 
		$strSql = "SELECT * FROM ofertas WHERE idOferta = :idOferta";
			 $arrayData = ['idOferta' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editStatus($data){
		try{
			$strWhere = 'idOferta = '. $data['idOferta'];
			$this->pdo->update('ofertas', $data, $strWhere);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function editOferta($data){

		try {

			$strWhere='idOferta='.$data['idOferta'];
			
			$this->pdo->update('ofertas', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deleteOferta($data){

		try {
			$strWhere = 'idOferta= ' .$data['idOferta'];
			$this->pdo->delete('ofertas', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deleteNotificacion($data){

		try {
			$strWhere = 'idOferta= ' .$data['idOferta'];
			$this->pdo->delete('notificaciones', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

}