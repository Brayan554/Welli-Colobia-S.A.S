<?php

 class Certificacion{

    private $id_documento;
    private $titulo;
    private $descripcion;
    private $tamanio;
    private $tipo;
    private $nombre_archivo;
    private $usuario;
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
      try{
      $strSql = "SELECT c.*, u.nombreuser as nombreuser from tbl_documentos c inner join user u on u.iduser = c.usuario ";
      $query  = $this->pdo->select($strSql);
      return $query;

      }catch (PDOException $e){
         die($e->getMessage());
      }
   }


   public function deleteCertificacion($data){

		try {
			$strWhere = 'id_documento = ' .$data['id_documento'];
			$this->pdo->delete('tbl_documentos', $strWhere);
			} catch (PDOException $e) {
			die($e->getMessage());
			}
	}


 }


?>