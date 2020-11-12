<?php

class Calificar{
    

    private $idCandidato;
	private $NumeroIdentificacionCandidato;
	private $nombreCandidato;
	private $apellidoCandidato;
	private $dirreccionCandidato;
	private $telefonoCandidato;
	private $emailCandidato;
	private $anosExperiencia;
	private $descripcionReferenciaLaboral;
	private $contactoReferencia;
	private $direccionReferencia;
	private $nombreReferencia;
    private $estudios;
    private $estudiosSegundarios;
    private $estudiosSuperiores;
	private $CantidadTitulos;
	private $porcentajePuntuacion;
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

    public function getAll()
	{
		try {

			$strSql = "
			Select * from organizar";
			$query = $this->pdo->select($strSql);
			return $query;
			
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
    
    public function newCalificacion($data){

		try {
			  $data['idEstados'] = 1;
			  $this->pdo->insert('calificaciones', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
    }
    
    public function getCalificacionById($id){
		try {
			 
		$strSql = "SELECT * FROM candidatos WHERE idCandidato = :idCandidato";
			 $arrayData = ['idCandidato' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}
	
	public function getCalificacionById2($id){
		try {
			 
		$strSql = "SELECT * FROM calificaciones WHERE idCandidato = :idCandidato";
			 $arrayData = ['idCandidato' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
    }
    
    public function editCalificacion($data){

		try {
			  $strWhere='idCandidato='.$data['idCandidato'];
				$this->pdo->update('calificaciones', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
    }
    
    public function deleteCalificacion($data){

		try {
			$strWhere = 'idCandidato = ' .$data['idCandidato'];
			$this->pdo->delete('calificaciones', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

    

}