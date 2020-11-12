<?php

require 'models/Usuario.php';
require 'models/Status.php';
require 'models/Cargo.php';
require 'models/Notificaciones.php';
/**
 * 
 */
class UsuarioController
{
	
	private $model;
	private $Status;
	private $Cargo;
	private $Notificaciones;

	public function __construct()
	{
		$this->model   = new Usuario;
		$this->Status  = new Status;
		$this->Cargo   = new Cargo;
		$this->Notificaciones = new Notificaciones;
	}

	public function index(){
        
    if (isset($_SESSION['user'])) {
		
		$Usuarios = $this->model->getAll();
		$cargos = $this->Cargo->getAll();
		$estados = $this->Status->getAll();
		$notificaciones = $this->Notificaciones->getAll();
		require 'views/layout2.php';
		require 'views/Usuario/list.php';

		}else{

			require 'views/login.php';
		}
	}

	public function new(){

		if (isset($_SESSION['user'])) {
			
			require 'views/layout2.php';
			$cargos = $this->Cargo->getAll();
			require 'views/Usuario/new.php';
		}else{

			require 'views/login.php';
		}

	}

	public function create(){
		$nombre = $_POST['nombreuser'];	
		$correo = $_POST['emailuser'];	
		$enviar = $this->model->sendemail();
		$usuario = [$nombre, $correo];

	
		$registrar = $this->model->Registrar($usuario,$enviar);

		header('Location: ?controller=login');
		
}

// public function recuperar(){
	
// 	$enviar = $this->model->sendemail2();
// 	$usuario = [$_POST['emailuser'], $enviar];
// 	$correo = $_POST['emailuser'];
// 	header('Location: ?controller=login');
	
// }





		public function save(){

			if (isset($_SESSION['user'])) {
				
				$this->model->newUsuario($_REQUEST);
				header("Location: ?controller=usuario");
			}else{

				require 'views/login.php';
			}

		}

	public function edit(){

		if (isset($_REQUEST['iduser'])) {
			$id = $_REQUEST['iduser'];
			$data = $this->model->getUsuarioById($id);
			$cargos = $this->Cargo->getAll();
			$estados = $this->Status->getAll();
			require 'views/layout2.php';
			require 'views/Usuario/edit.php';
		} else {
			echo "Error";
		}
	}

	public function update()
	{
		if (isset($_POST)) {

		$this->model->editUsuario($_POST);
		header("location: ?controller=usuario");
			
		} else {
			echo "Error";
		}
	}

	public function delete()
 	{	
 		if (isset($_SESSION['user'])) {
			
	 		$this->model->deleteUsuario($_REQUEST);
	 		header("Location: ?controller=usuario");
		}else{

			require 'views/login.php';
		}
	}
	
	public function show(){
    require 'views/resetpassword.php';
	}

	public function resetpassword(){
		$clave_antigua = $_SESSION['user']->contrasena;
		$usuclave = $_POST['claveactual'];
		$clavenueva = $_POST['clavenueva'];
		if ($clave_antigua == $usuclave) {
				$this->model->updatepassword($clavenueva);
				header('Location: ?controller=login&method=logout');
		}else{
				echo "La contraseña no coincide";
		}
}

}