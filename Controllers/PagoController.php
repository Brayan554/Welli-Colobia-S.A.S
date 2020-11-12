<?php 

require 'models/Pago.php';
require 'models/Status.php';
require 'models/Empleado.php';
require 'models/Cliente.php';
require 'models/Servicio.php';
require 'models/Usuario.php';
require 'models/Notificaciones.php';

/**
 * 
 */
class PagoController
{
	private $model;
	private $Status;
	private $Empleado;
	private $Cliente;
	private $Servicio;
	private $Usuario;
	private $Notificaciones;

	
	public function __construct()
	{
		$this->model     = new Pago;
		$this->Status    = new Status;
		$this->Empleado  = new Empleado;
		$this->Cliente   = new Cliente;
		$this->Servicio  = new Servicio;
		$this->Usuario   = new Usuario;
		$this->Notificaciones = new Notificaciones;
	}

	public function index(){

		if (isset($_SESSION['user'])) {
			
			
			$pagos = $this->model->getAll();
			$estados   = $this->Status->getAll();
			$empleados = $this->Empleado->getAll();
			$clientes  = $this->Cliente->getAll();
			$Servicios = $this->Servicio->getAll();
			$usuarios  = $this->Usuario->getAll();
			$notificaciones = $this->Notificaciones->getAll();
			require 'views/layout2.php';
			require 'views/Pago/list.php';
			
		}else{

			require 'views/login.php';
		}

	}

	public function new(){
		if (isset($_SESSION['user'])) {
			
		require 'views/layout2.php';

		$empleados = $this->Empleado->getAll();
		$clientes  = $this->Cliente->getAll();
		$Servicios = $this->Servicio->getAll();
		$usuarios  = $this->Usuario->getAll();

		require 'views/Pago/new.php';
			
			
		}else{

			require 'views/login.php';
		}
	}

	public function save(){

		if (isset($_SESSION['user'])) {
		$this->model->newPago($_REQUEST);
		header("Location: ?controller=pago");
		}else{

			require 'views/login.php';
		}
	}


	public function edit(){

		if (isset($_REQUEST['idPago'])) {
			$id = $_REQUEST['idPago'];
			$data      = $this->model->getPagoById($id);
			$estados   = $this->Status->getAll();
			$empleados = $this->Empleado->getAll();
			$clientes  = $this->Cliente->getAll();
			$Servicios = $this->Servicio->getAll();
			$usuarios  = $this->Usuario->getAll();
			require 'views/layout2.php';
			require 'views/Pago/edit.php';
		} else {
			echo "Error";
		}
	}


	public function update(){
		if (isset($_SESSION['user'])) {

		if (isset($_POST)) {
		$this->model->editPago($_POST);
		header("Location: ?controller=pago");
		} else {
			echo "Error";
		}
		}else{

			require 'views/login.php';
		}
	}

	public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deletePago($_REQUEST);
		header("Location: ?controller=pago");
		}else{

			require 'views/login.php';
		}
	}



}
