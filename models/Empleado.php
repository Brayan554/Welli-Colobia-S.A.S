<?php

/**
 * 
 */
class Empleado 
{
	private $idEmpleado;
	private $NumeroIdentificacionEmpleado;
	private $nombreEmpleado;
	private $apellidoEmpleado;
	private $emailEmpleado;
	private $telefonoEmpleado;
	private $idCargo;
	private $idArea;
	private $idRecursosHumanos;
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

	public function getAll(){
		try {
				$strSql="SELECT * FROM consultaEmpleados";

				$query = $this->pdo->select($strSql);
				return $query;
					
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	 public function newEmpleado($data){

		try {
			   $data['idEstados'] = 1;
			   $data['idCargo']   = 2;
			  $this->pdo->insert('empleados', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

		public function getEmpleadoById($id){
		try {
			 
		$strSql = "SELECT * FROM empleados WHERE idEmpleado = :idEmpleado";
			 $arrayData = ['idEmpleado' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editEmpleado($data){

		try {
			 $strWhere='idEmpleado='.$data['idEmpleado'];
			$this->pdo->update('empleados', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deleteEmpleado($data){

		try {
			$strWhere = 'idEmpleado= ' .$data['idEmpleado'];
			$this->pdo->delete('empleados', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}
}