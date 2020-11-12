<?php

require 'models/Cargo.php';
require 'models/Status.php';
require 'models/Notificaciones.php';

/**
 * 
 */
class CargoController
{
	private $model;
	private $Status;
	private $Notificaciones;
	
	public function __construct()
	{
		$this->model   = new Cargo;
		$this->Status  = new Status;
		$this->Notificaciones = new Notificaciones;
	}

	public function index(){
		if (isset($_SESSION['user'])) {
			
			
			$cargos = $this->model->getAll();
			$estados    = $this->Status->getAll();
			$notificaciones = $this->Notificaciones->getAll();
			require 'views/layout2.php';
			require 'views/cargo/list.php';
			
		}else{

			require 'views/login.php';
		}
	}

	public function new(){
		if (isset($_SESSION['user'])) {
			
		require 'views/layout2.php';
		$cargos = $this->model->getAll();
		require 'views/cargo/new.php';
			
			
		}else{

			require 'views/login.php';
		}
	}

	public function save(){

		if (isset($_SESSION['user'])) {
		$this->model->newCargo($_REQUEST);
		header("Location: ?controller=cargo");
		}else{

			require 'views/login.php';
		}
	}

	public function edit(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idCargo'])) {
			$id = $_REQUEST['idCargo'];
			$data = $this->model->getCargoById($id);
			$estados    = $this->Status->getAll();
			
			require 'views/layout2.php';
			require 'views/cargo/edit.php';
		} else {
			echo "Error";
		}
						
		}else{

			require 'views/login.php';
		}
	}

	public function update(){
		if (isset($_SESSION['user'])) {

		if (isset($_POST)) {
		$this->model->editCargo($_POST);
		header("Location: ?controller=cargo");
		} else {
			echo "Error";
		}
		}else{

			require 'views/login.php';
		}
	}

		public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteCargo($_REQUEST);
		header("Location: ?controller=cargo");
		}else{

			require 'views/login.php';
		}
	}
	
}
