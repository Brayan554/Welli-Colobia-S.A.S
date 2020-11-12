<?php

/**
 * 
 */
class Notificaciones
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
			
			$strSql="SELECT * FROM notificaciones";

			$query = $this->pdo->select($strSql);
			return $query;

		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}


	

	



}