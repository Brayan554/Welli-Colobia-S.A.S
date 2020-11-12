<?php

require 'models/Recurso.php';
require 'models/Cargo.php';
require 'models/Usuario.php';
require 'models/Status.php';
require 'models/Notificaciones.php';

/**
 * 
 */
class RecursoController
{
	
	private $model;
	private $Cargo;
	private $Usuario;
	private $Status;
	private $Notificacion;

	public function __construct()
	{
		$this->model   = new Recurso;		
		$this->Cargo   = new Cargo;
		$this->Usuario = new Usuario;
		$this->Status  = new Status;
		$this->Notificacion = new Notificaciones;
	}


	public function index(){

		if (isset($_SESSION['user'])) {
			
			
			$Recursos = $this->model->getAll();
			$usuarios = $this->Usuario->getAll();
			$estados  = $this->Status->getAll();
			$cargos   = $this->Cargo->getAll();
			$notificaciones = $this->Notificacion->getAll();
			require 'views/layout2.php';
			require 'views/Recurso/list.php';
			
		}else{

			require 'views/login.php';
		}
	}

	public function new(){
		if (isset($_SESSION['user'])) {
			
		require 'views/layout2.php';
		$usuarios = $this->Usuario->getAll();
		require 'views/Recurso/new.php';
			
			
		}else{

			require 'views/login.php';
		}
	}

	public function save(){

		if (isset($_SESSION['user'])) {
		$this->model->newRecurso($_REQUEST);
		header("Location: ?controller=Recurso");
		}else{

			require 'views/login.php';
		}
	}

	public function edit(){

		if (isset($_REQUEST['idRecursosHumanos'])) {
			$id = $_REQUEST['idRecursosHumanos'];
			$data = $this->model->getRecursoById($id);
			$usuarios = $this->Usuario->getAll();
			$estados  = $this->Status->getAll();
			$cargos   = $this->Cargo->getAll();
			require 'views/layout2.php';
			require 'views/Recurso/edit.php';
		} else {
			echo "Error";
		}
	}

	public function update(){
		if (isset($_SESSION['user'])) {

		if (isset($_POST)) {
		$this->model->editRecurso($_POST);
		header("Location: ?controller=recurso");
		} else {
			echo "Error";
		}
		}else{

			require 'views/login.php';
		}
	}


	public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteRecurso($_REQUEST);
		header("Location: ?controller=recurso");
		}else{

			require 'views/login.php';
		}
	}




}