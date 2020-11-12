<?php

require 'models/Candidato.php';
require 'models/Status.php';
require 'models/Usuario.php';
require 'models/Notificaciones.php';
require 'models/Calificar.php';

class CalificarController 
{
    private $model;
	private $Status;
	private $Usuario;
	private $Notificaciones;
	
    
    public function __construct()
	{
		$this->model  = new Calificar;	
		$this->Status = new	Status;
		$this->Usuario  = new Usuario;
		$this->Notificaciones = new Notificaciones;	
    }
    
    public function index()
	{	
			if (isset($_SESSION['user'])) {
			
				
				$Calificar = $this->model->getAll();
				
				$usuarios   = $this->Usuario->getAll();
				$estados    = $this->Status->getAll();
				$notificaciones = $this->Notificaciones->getAll();
				require 'views/layout2.php';
				require 'views/calificar/list.php';
				
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
			
			$this->model->newCalificacion($_REQUEST);
			header("Location:?controller=calificar");

		}else{

			require 'views/login.php';
		}



    }
    
    public function edit(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idCandidato'])) {
			$id = $_REQUEST['idCandidato'];
			$data       = $this->model->getCalificacionById($id);
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
			$data       = $this->model->getCalificacionById($id);
			$usuarios   = $this->Usuario->getAll();
			
			
			require 'views/calificar/hojaedit.php';
			
			
		} else {
			echo "Error";
		}
						
		}else{

			require 'views/login.php';
		}
	}
	

	public function editFormatoHJ2(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idCandidato'])) {
			$id = $_REQUEST['idCandidato'];
			$data       = $this->model->getCalificacionById2($id);
			$usuarios   = $this->Usuario->getAll();
			
			
			require 'views/calificar/hojaedit2.php';
			
			
		} else {
			echo "Error";
		}
						
		}else{

			require 'views/login.php';
		}
    }
    
    public function update(){
		if (isset($_POST)) {
		$this->model->editCalificacion($_POST);
		header("Location: ?controller=calificar");
		} else {
			echo "Error";
		}
	}
	
	
	public function delete(){
		
		if (isset($_SESSION['user'])) {
			
			$this->model->deleteCalificacion($_REQUEST);
			header("Location: ?controller=calificar");
		}else{

			require 'views/login.php';
		}

	}

    
}
