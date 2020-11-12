<?php

/**
 * 
 */
class Servicio
{
	private $idServicio;
	private $nombreServicio;
	private $duracionServicio;
	private $costoServicio;
	private $novedadesServicio;
	private $idEmpleado;
	private $idCliente;
	private $idEstado;
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
			  $sqlStr="SELECT * FROM  consultarServicio";
			  $query = $this->pdo->select($sqlStr);
			  return $query;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


	public function newServicio($data){

		try {
			  $data['idEstados'] = 1;
			  $this->pdo->insert('servicios', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function getServicioById($id){
		try {
			 
		$strSql = "SELECT * FROM servicios WHERE idServicio = :idServicio";
			 $arrayData = ['idServicio' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editServicio($data){

		try {
			 $strWhere='idServicio='.$data['idServicio'];
			$this->pdo->update('servicios', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}


	public function deleteServicio($data){

		try {
			
			$strWhere = 'idServicio= ' .$data['idServicio'];
			$this->pdo->delete('servicios', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

}