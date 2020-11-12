<?php

require 'models/Candidato.php';
require 'models/Status.php';
require 'models/Usuario.php';
require 'models/Notificaciones.php';

class CandidatoController
{

	private $model;
	private $Status;
	private $Usuario;
	private $Notificaciones;

	public function __construct()
	{
		$this->model  = new Candidato;	
		$this->Status = new	Status;
		$this->Usuario  = new Usuario;
		$this->Notificaciones = new Notificaciones;	
	}
	public function index()
	{	
			if (isset($_SESSION['user'])) {
			
				
				$candidatos = $this->model->getAll();
				
				$usuarios   = $this->Usuario->getAll();
				$estados    = $this->Status->getAll();
				$notificaciones = $this->Notificaciones->getAll();
				
				require 'views/layout2.php';
				require 'views/candidato/list.php';
				
			}else{

			require 'views/login.php';
			}

	}

	
	public function new(){
		
		if (isset($_SESSION['user'])) {
			
			$candidatos = $this->model->getAll();	
			$usuarios   = $this->Usuario->getAll();
			require 'hojav/index.php';
		}else{

			require 'views/login.php';
		}
	}
	

	public function save(){

		if (isset($_SESSION['user'])) {
			
			$this->model->newCandidato($_REQUEST);
			header("Location: ?controller=candidato");

		}else{

			require 'views/login.php';
		}

	}

	public function save1(){

		if(!empty($_POST['idCandidato'])){
			$id_maximo = $_POST['idCandidato'];
			mysqli_query($conexion,"UPDATE candidatos set nombreCandidato = '$nombre' where idCandidato = '$id_maximo' ");
			echo 'Foto Cambiada Con Exito';

		}else{
			$NumeroIdentificacionCandidato = $_POST['NumeroIdentificacionCandidato'];
			$nombre= $_POST['nombreCandidato'];
			$apellidoCandidato = $_POST['apellidoCandidato'];
			$direccionCandidato = $_POST['direccionCandidato'];
			$telefonoCandidato = $_POST['telefonoCandidato'];
			$anosExperiencia = $_POST['anosExperiencia'];
			$descripcionReferenciaLaboral = $_POST['descripcionReferenciaLaboral'];
			$contactoReferencia = $_POST['contactoReferencia'];
			$direccionReferencia = $_POST['direccionReferencia'];
			$nombreReferencia = $_POST['nombreReferencia'];
			$estudios = $_POST['estudios'];
			$estudiosSegundarios = $_POST['estudiosSegundarios'];
			$estudiosSuperiores = $_POST['estudiosSuperiores'];
			$CantidadTitulos = $_POST['CantidadTitulos'];

			 $candidatosC = [$NumeroIdentificacionCandidato,$nombre,$apellidoCandidato
			,$direccionCandidato,$telefonoCandidato,$anosExperiencia,
			 $descripcionReferenciaLaboral,$contactoReferencia,$direccionReferencia,
			 $nombreReferencia,$estudios,$estudiosSegundarios,$estudiosSuperiores,$CantidadTitulos];
		

		$registrar = $this->model->Registrar($candidatosC);

		}
		$conexion = mysqli_connect("localhost","root","","welliactual");
			$ss=mysqli_query($conexion,"SELECT MAX(idCandidato) AS id_maximo from candidatos");
		      if($rr=mysqli_fetch_array($ss)){
		        $id_maximo = $rr['id_maximo'];
				 
					}
				$nameImagen=$_FILES['imagen']['name'];
				$tmpimagen=$_FILES['imagen']['tmp_name'];
				$urlnueva="imagen/foto_".$id_maximo.".jpg";
				if(is_uploaded_file($tmpimagen)){
				copy($tmpimagen,$urlnueva);
				echo 'imagen Cargada con exito';
				}else{
				echo 'Error al Cargar la Imagen';
				} 
		

		header("Location: ?controller=candidato");
		
		
		

        
	}

	public function update(){

		
		if (isset($_POST)) {
		$this->model->editCandidato($_POST);
		header("Location: ?controller=candidato");
		} else {
			echo "Error";
		}
	}
	

	


	public function edit(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idCandidato'])) {
			$id = $_REQUEST['idCandidato'];
			$data       = $this->model->getCandidatoById($id);
			require 'views/layout2.php';
			
			
		} else {
			echo "Error";
		}
						
		}else{

			require 'views/login.php';
		}
	}

	public function editFormatoHJ(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idCandidato'])) {
			$id = $_REQUEST['idCandidato'];
			$data       = $this->model->getCandidatoById($id);
			$usuarios   = $this->Usuario->getAll();
			
			
			require 'views/candidato/hojaedit.php';
			
			
		} else {
			echo "Error";
		}
						
		}else{

			require 'views/login.php';
		}
	}

	
	
	public function delete(){
		
		if (isset($_SESSION['user'])) {
			
			$this->model->deleteCandidato($_REQUEST);
			header("Location: ?controller=candidato");
		}else{

			require 'views/login.php';
		}

	}
	

}