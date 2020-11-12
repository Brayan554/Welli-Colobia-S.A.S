<?php

require 'models/Empleado.php';
require 'models/Cargo.php';
require 'models/Area.php';
require 'models/Recurso.php';
require 'models/Status.php';
require 'models/Usuario.php';
require 'models/Notificaciones.php';


class EmpleadoController
{
	private $model;
	private $Cargo;
	private $Area;
	private $Recurso;
	private $Status;
	private $Usuario;
	private $Notificaciones;



	public function __construct()
	{
		$this->model    = new Empleado;
		$this->Cargo    = new Cargo;
		$this->Area     = new Area;
		$this->Recurso  = new Recurso;
		$this->Status   = new Status;
		$this->Usuario  = new Usuario;
		$this->Notificaciones = new Notificaciones;

	}

	public function index()
	{
		if (isset($_SESSION['user'])) {
			
			
			$empleados = $this->model->getAll();
			$cargos  = $this->Cargo->getAll();
			$areas     = $this->Area->getAll();
			$recursos  = $this->Recurso->getAll();
			$estados    = $this->Status->getAll();
			$usuarios   = $this->Usuario->getAll();
			$notificaciones = $this->Notificaciones->getAll();
			require 'views/layout2.php';
			require 'views/empleado/list.php';
		}else{

			require 'views/login.php';
		}
	}

	public function new(){
		if (isset($_SESSION['user'])) {
			
		require 'views/layout2.php';
		$empleados = $this->model->getAll();
		$usuarios  = $this->Usuario->getAll();
		$areas     = $this->Area->getAll();
		$recursos  = $this->Recurso->getAll();

		require 'views/empleado/new.php';
			
			
		}else{

			require 'views/login.php';
		}
	}

	public function save(){

		if (isset($_SESSION['user'])) {
		$this->model->newEmpleado($_REQUEST);
		header("Location: ?controller=empleado");
		}else{

			require 'views/login.php';
		}
	}

	public function edit(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idEmpleado'])) {
			$id = $_REQUEST['idEmpleado'];
			$data = $this->model->getEmpleadoById($id);
			$empleados = $this->model->getAll();
			$cargos  = $this->Cargo->getAll();
			$areas     = $this->Area->getAll();
			$recursos  = $this->Recurso->getAll();
			$estados    = $this->Status->getAll();
			$usuarios   = $this->Usuario->getAll();
			
			require 'views/layout2.php';
			require 'views/empleado/edit.php';
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
		$this->model->editEmpleado($_POST);
		header("Location: ?controller=empleado");
		} else {
			echo "Error";
		}
		}else{

			require 'views/login.php';
		}
	}


	public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteEmpleado($_REQUEST);
		header("Location: ?controller=empleado");
		}else{

			require 'views/login.php';
		}
	}



}