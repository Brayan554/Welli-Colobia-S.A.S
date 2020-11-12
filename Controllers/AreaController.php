<?php


require 'models/Area.php';
require 'models/Status.php';
require 'models/Recurso.php';
require 'models/Notificaciones.php';

/**
 * 
 */
class AreaController
{
	private $model;
	private $Status;
	private $Recurso;
	private $Notificaciones;


	public function __construct()
	{
		$this->model   = new Area;
		$this->status  = new Status;
		$this->recurso = new Recurso;
		$this->Notificaciones = new Notificaciones;		
	}

	public function index(){

		if (isset($_SESSION['user'])) {
		
		$areas = $this->model->getAll();
		$recursos  = $this->recurso->getAll();
		$estados    = $this->status->getAll();
		$notificaciones = $this->Notificaciones->getAll();
		require 'views/layout2.php';
		require 'views/area/list.php';

		}else{

			require 'views/login.php';
		}
	}


	public function new(){
		
			
		if (isset($_SESSION['user'])) {

			require 'views/layout2.php';

			$areas     = $this->model->getAll();	
			$recursos  = $this->recurso->getAll();
			$estados    = $this->status->getAll();

			require 'views/area/new.php';

		}else{

			require 'views/login.php';
		}
	}
	

	public function save(){


		if (isset($_SESSION['user'])) {

			$this->model->newArea($_REQUEST);
			header("Location: ?controller=area");

		}else{

			require 'views/login.php';
		}


	}

	public function edit(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idArea'])) {
			$id = $_REQUEST['idArea'];
			$data       = $this->model->getAreaById($id);

			

			require 'views/layout2.php';
			
			
		} else {
			echo "Error";
		}
						
		}else{

			require 'views/login.php';
		}
	}


	public function update(){
		if (isset($_POST)) {
		$this->model->editArea($_POST);
		header("Location: ?controller=area");
		} else {
			echo "Error";
		}
	}

	public function delete(){

		if (isset($_SESSION['user'])) {
			
			$this->model->deleteArea($_REQUEST);
			header("Location: ?controller=area");
		}else{

			require 'views/login.php';
		}

	}

	
}