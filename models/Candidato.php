<?php


class Candidato
{
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

			$strSql = "SELECT  c.*, s.nombreEstado as nombreEstado , u.nombreuser as nombreuser from candidatos c inner join estados s on s.idEstados = c.idEstados inner join user u on u.iduser = c.iduser ";
			$query = $this->pdo->select($strSql);
			return $query;
			
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function newCandidato($data){

		try {
				$data['idEstados'] = 1;
				$data['iduser'] = $_SESSION['user']->iduser;
				$data['emailCandidato'] = $_SESSION['user']->emailuser;

			  $this->pdo->insert('candidatos', $data);	
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function Registrar($candidatosC){

		$data['NumeroIdentificacionCandidato'] = $candidatosC[0];
		$data['nombreCandidato'] = $candidatosC[1];
		$data['apellidoCandidato'] = $candidatosC[2];
		$data['direccionCandidato'] = $candidatosC[3];
		$data['telefonoCandidato'] = $candidatosC[4];	
		$data['anosExperiencia'] = $candidatosC[5];
		$data['descripcionReferenciaLaboral'] = $candidatosC[6];
		$data['contactoReferencia'] = $candidatosC[7];
		$data['direccionReferencia'] = $candidatosC[8];
		$data['nombreReferencia'] = $candidatosC[9];
		$data['estudios'] = $candidatosC[10];
		$data['estudiosSegundarios'] = $candidatosC[11];
		$data['estudiosSuperiores'] = $candidatosC[12];
		$data['CantidadTitulos'] = $candidatosC[13];
		$data['idEstados'] = 1;
		$data['iduser'] = $_SESSION['user']->iduser;
		$data['emailCandidato'] = $_SESSION['user']->emailuser;

		$this->pdo->insert('candidatos', $data);
	
	}
	

	
		public function getCandidatoById($id){
		try {
			 
		$strSql = "SELECT * FROM candidatos WHERE idCandidato = :idCandidato";
			 $arrayData = ['idCandidato' => $id];
			 $query = $this->pdo->select($strSql, $arrayData);
			 return $query;
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}

	public function editCandidato($data){

		try {
			  $strWhere='idCandidato='.$data['idCandidato'];
				$this->pdo->update('candidatos', $data, $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}
	public function deleteCandidato($data){

		try {
			$strWhere = 'idCandidato = ' .$data['idCandidato'];
			$this->pdo->delete('candidatos', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}


}