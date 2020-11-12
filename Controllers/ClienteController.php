<?php 

require 'models/Cliente.php';
require 'models/Usuario.php';
require 'models/Status.php';
require 'models/Notificaciones.php';

class ClienteController
{
	 private  $model;
	 private  $Usuario;
	 private  $Status;
	 private $Notificaciones;

	 public  function __construct()
	{
		$this->model   =   new Cliente;	
		$this->Usuario =   new Usuario;
		$this->Status  =   new Status;
		$this->Notificaciones = new Notificaciones;
	}
	public function index()
	{
		if (isset($_SESSION['user'])) {
			
			
			$clientes = $this->model->getAll();
			$usuarios = $this->Usuario->getAll();
			$estados    = $this->Status->getAll();
			$notificaciones = $this->Notificaciones->getAll();	
			require 'views/layout2.php';
			require 'views/cliente/list.php';
			
		}else{

			require 'views/login.php';
		}

	}

	public function new(){
		if (isset($_SESSION['user'])) {
			
		require 'views/layout2.php';
		$clientes = $this->model->getAll();
		$usuarios = $this->Usuario->getAll();
		require 'views/cliente/new.php';
			
			
		}else{

			require 'views/login.php';
		}
	}

	public function save(){

		if (isset($_SESSION['user'])) {
		$this->model->newCliente($_REQUEST);
		header("Location: ?controller=cliente");
		}else{

			require 'views/login.php';
		}
	}

	public function edit(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idCliente'])) {
			$id = $_REQUEST['idCliente'];
			$data = $this->model->getClienteById($id);
			$estados    = $this->Status->getAll();
			$usuarios   = $this->Usuario->getAll();
			
			require 'views/layout2.php';
			require 'views/cliente/edit.php';
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
		$this->model->editCliente($_POST);
		header("Location: ?controller=cliente");
		} else {
			echo "Error";
		}
		}else{

			require 'views/login.php';
		}
	}

	public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteCliente($_REQUEST);
		header("Location: ?controller=cliente");
		}else{

			require 'views/login.php';
		}
	}

}