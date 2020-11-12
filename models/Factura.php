<?php

/**
 * 
 */
class Factura
{
	private $idFactura;
	private $descripcionFactura;
	private $fechaParcial;
	private $precioParcial;
	private $impuestos;
	private $Descuento;
	private $TotalAPagar;
	private $idEmpleado;
	private $idEstados;
	private $idCliente;
	private $idPago;
	private $idServicio;
	private $idUser;
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
			
			$strSql = "SELECT * FROM consultaFactura";
			
			$query = $this->pdo->select($strSql);
			return $query;
			
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	 public function newFactura($data){

		try {
			  
			  $data['idEstados'] = 1;
			  $this->pdo->insert('facturas', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function getFacturaById($id){
		try {
			 
		$strSql = "SELECT * FROM facturas WHERE idFactura = :idFactura";
			 $arrayData = ['idFactura' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editFactura($data){

		try {

			 $strWhere='idFactura='.$data['idFactura'];
			$this->pdo->update('facturas', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function deleteFactura($data){

		try {
			$strWhere = 'idFactura= ' .$data['idFactura'];
			$this->pdo->delete('facturas', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}
}