<?php

require 'models/Status.php';
require 'models/Type_statuses.php';
require 'models/Notificaciones.php';

/**
 * 
 */
class StatusController
{
	private $model;
	private $type_statuses;
	private $Notificaciones;

	public function __construct()
	{
		$this->model = new Status;
		$this->type_statuses = new Type_statuses;
		$this->Notificaciones = new Notificaciones;
	}

	public function index(){

		if (isset($_SESSION['user'])) {
			
			
			$statuses = $this->model->getAll();
			$types = $this->type_statuses->getAll();
			$notificaciones = $this->Notificaciones->getAll();
			require 'views/layout2.php';
			require 'views/status/list.php';
		}else{

			require 'views/login.php';
		}
	}

	public function new(){

		if (isset($_SESSION['user'])) {
			
			require 'views/layout2.php';
			$types = $this->type_statuses->getAll();
			require 'views/status/new.php';
		}else{

			require 'views/login.php';
		}

	}

	public function save(){

		if (isset($_SESSION['user'])) {
			
			$this->model->newStatus($_REQUEST);
			header("Location: ?controller=status");
		}else{

			require 'views/login.php';
		}

	}

	public function edit(){

		if (isset($_REQUEST['idEstados'])) {
			$id = $_REQUEST['idEstados'];
			$data = $this->model->getstatusById($id);
			$types = $this->type_statuses->getAll();
			require 'views/layout2.php';
			require 'views/status/edit.php';
		} else {
			echo "Error";
		}
	}

	public function update()
	{
		if (isset($_POST)) {

		$this->model->editStatus($_POST);
		header("location: ?controller=status");
			
		} else {
			echo "Error";
		}
	}

	public function delete()
 	{	
 		if (isset($_SESSION['user'])) {
			
	 		$this->model->deleteStatus($_REQUEST);
	 		header("Location: ?controller=status");
		}else{

			require 'views/login.php';
		}
  	}
}