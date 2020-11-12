<?php

require 'models/Factura.php';
require 'models/Status.php';
require 'models/Empleado.php';
require 'models/Cliente.php';
require 'models/Pago.php';
require 'models/Servicio.php';
require 'models/Usuario.php';
require 'models/Notificaciones.php';
/**
 * 
 */
class FacturaController
{
	
	private $model;
	private $Status;
	private $Empleado;
	private $Cliente;
	private $Pago;
	private $Servicio;
	private $Usuario;
	private $Notificaciones;

	
	public function __construct()
	{
		$this->model    = new Factura;
		$this->Status   = new Status;
		$this->Empleado = new Empleado;
		$this->Cliente  = new Cliente;
		$this->Pago     = new Pago;
		$this->Servicio = new Servicio;
		$this->Usuario  = new Usuario;
		$this->Notificaciones = new Notificaciones;
	}

	public function index(){

		if (isset($_SESSION['user'])) {
			
			
			$facturas = $this->model->getAll();
			$empleados  = $this->Empleado->getAll();
			$pagos      = $this->Pago->getAll();
			$Servicios  = $this->Servicio->getAll();
			$estados    = $this->Status->getAll();
			$clientes   = $this->Cliente->getAll();
			$usuarios   = $this->Usuario->getAll();
			$notificaciones = $this->Notificaciones->getAll();
			require 'views/layout2.php';
			require 'views/factura/list.php';
		}else{

			require 'views/login.php';
		}

	}

	public function new(){
		if (isset($_SESSION['user'])) {
			
		require 'views/layout2.php';
		$facturas      = $this->model->getAll();	
		$empleados     = $this->Empleado->getAll();
		$clientes      = $this->Cliente->getAll();
		$pagos         = $this->Pago->getAll();
		$Servicios     = $this->Servicio->getAll();
		$usuarios      = $this->Usuario->getAll();
		require 'views/factura/new.php';
			
			
		}else{

			require 'views/login.php';
		}
	}

	public function save(){

		if (isset($_SESSION['user'])) {
		$this->model->newFactura($_REQUEST);
		header("Location: ?controller=factura");
		}else{

			require 'views/login.php';
		}
	}
	public function edit(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idFactura'])) {
			$id = $_REQUEST['idFactura'];
			$data = $this->model->getFacturaById($id);
			$facturas   = $this->model->getAll();
			$empleados  = $this->Empleado->getAll();
			$pagos      = $this->Pago->getAll();
			$Servicios  = $this->Servicio->getAll();
			$estados    = $this->Status->getAll();
			$clientes   = $this->Cliente->getAll();
			$usuarios   = $this->Usuario->getAll();
			
			require 'views/layout2.php';
			require 'views/factura/edit.php';
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
		$this->model->editFactura($_POST);
		header("Location: ?controller=factura");
		} else {
			echo "Error";
		}
		}else{

			require 'views/login.php';
		}
	}

	public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteFactura($_REQUEST);
		header("Location: ?controller=factura");
		}else{

			require 'views/login.php';
		}
	}
}