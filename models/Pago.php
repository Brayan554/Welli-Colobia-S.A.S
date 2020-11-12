<?php

/**
 * 
 */
class Pago
{
	private $idPago;
	private $fechaPago;
	private $DevolucionPago;
	private $FechaInicialPago;
	private $idEstados;
	private $idEmpleado;
	private $idCliente;
	private $idServicio;
	private $idUsuario;
	private $pdo;

	public  function __construct()
	{	
		try {
			
			$this->pdo = new Database;
		} catch (PDOException $e) {
			die($e->getMessage());
		}

	}

	public function getAll(){
		$strSql="SELECT * FROM consultarPago";
		$query= $this->pdo->select($strSql);
		return $query;
	}

	 public function newPago($data){

		try {
			  $data['idEstados'] = 1;
			  $this->pdo->insert('pagos', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function getPagoById($id){
		try {
			 
		$strSql = "SELECT * FROM pagos WHERE idPago = :idPago";
			 $arrayData = ['idPago' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editPago($data){

		try {
			 $strWhere='idPago='.$data['idPago'];
			$this->pdo->update('pagos', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deletePago($data){

		try {
			$strWhere = 'idPago= ' .$data['idPago'];
			$this->pdo->delete('pagos', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

}