<?php

require 'models/Servicio.php';
require 'models/Status.php';
require 'models/Cliente.php';
require 'models/Empleado.php';
require 'models/Notificaciones.php';


class ServicioController
{
	
	private $model;
	private $Status;
	private $Empleado;
	private $Cliente;
	private $Notificaciones;


	public function __construct()
	{
		$this->model     = new Servicio;
		$this->Status    = new Status;
		$this->Empleado  = new Empleado;
		$this->Cliente   = new Cliente;
		$this->Notificaciones = new Notificaciones;
	}

	public function index()
	{
		if (isset($_SESSION['user'])) {
			
			
			$Servicios = $this->model->getAll();
			$estados  = $this->Status->getAll();
			$empleados = $this->Empleado->getAll();
			$clientes = $this->Cliente->getAll();
			$notificaciones = $this->Notificaciones->getAll();
			require 'views/layout2.php';
			require 'views/Servicio/list.php';
			
		}else{

			require 'views/login.php';
		}
	}

	public function new(){
		if (isset($_SESSION['user'])) {
			
			require 'views/layout2.php';

			$empleados = $this->Empleado->getAll();
			$clientes = $this->Cliente->getAll();

			require 'views/Servicio/new.php';
			
			
		}else{

			require 'views/login.php';
		}
	}

	public function save(){

		if (isset($_SESSION['user'])) {
		$this->model->newServicio($_REQUEST);
		header("Location: ?controller=servicio");
		}else{

			require 'views/login.php';
		}
	}

	public function edit(){

		if (isset($_REQUEST['idServicio'])) {
			$id = $_REQUEST['idServicio'];
			$data = $this->model->getServicioById($id);
			$estados  = $this->Status->getAll();
			$empleados = $this->Empleado->getAll();
			$clientes = $this->Cliente->getAll();
			require 'views/layout2.php';
			require 'views/Servicio/edit.php';
		} else {
			echo "Error";
		}
	}


	public function update(){
		if (isset($_SESSION['user'])) {

		if (isset($_POST)) {
		$this->model->editServicio($_POST);
		header("Location: ?controller=servicio");
		} else {
			echo "Error";
		}
		}else{

			require 'views/login.php';
		}
	}

	public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteServicio($_REQUEST);
		header("Location: ?controller=servicio");
		}else{

			require 'views/login.php';
		}
	}
}