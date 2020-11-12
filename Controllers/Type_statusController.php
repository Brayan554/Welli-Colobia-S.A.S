<?php

require 'models/Type_statuses.php';
require 'models/Notificaciones.php';

/**
 * 
 */
class Type_statusController
{
	private $model;
	private $Notificaciones;
	
	public function __construct()
	{
		$this->model = new type_statuses; 
		$this->Notificaciones = new Notificaciones;
	}

	public function index()
	{	
		if (isset($_SESSION['user'])) {
			
			
			$types = $this->model->getAll();
			$notificaciones = $this->Notificaciones->getAll();
			require 'views/layout2.php';
			require 'views/Type_statuses/list.php';
		}else{

			require 'views/login.php';
		}
	}

	public function new(){

		if (isset($_SESSION['user'])) {
			
			require 'views/layout2.php';
			require 'views/Type_statuses/new.php';
		}else{

			require 'views/login.php';
		}

	}

	public function save()
	{
		if (isset($_SESSION['user'])) {
			
			$this->model->newType($_REQUEST);
			header("Location: ?controller=type_status");
		}else{

			require 'views/login.php';
		}
	}

	public function edit()
	{
			
		if (isset($_REQUEST['idTipo'])) {
			$id = $_REQUEST['idTipo'];
			$data = $this->model->getTypeById($id);
			require 'views/layout2.php';
			require 'views/Type_statuses/edit.php';
		} else {
			
			echo "Error";
		}
		
		
	}
	public function update()
	{
		if (isset($_POST)) {
			$this->model->editType($_POST);
			header("Location: ?controller=type_status");
		} else {
			echo "Error";
		}
	}

	public function delete()
	{	
		if (isset($_SESSION['user'])) {
			
			$this->model->deleteType($_REQUEST);
			header("Location: ?controller=type_status");
		}else{

			require 'views/login.php';
		}
	}

}