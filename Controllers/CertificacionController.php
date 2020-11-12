<?php
require 'models/Certificaciones.php';
require 'models/Notificaciones.php';
require 'models/Usuario.php';


class CertificacionController{


    private $model;
    private $notificaciones;
    private $usuario;
    
    public function __construct()
	{
		$this->model  = new Certificacion;	
		$this->Usuario  = new Usuario;
		$this->Notificaciones = new Notificaciones;	
	}


    public function index(){
        if (isset($_SESSION['user'])) {
            
            
            $notificaciones = $this->Notificaciones->getAll();
            require 'views/layout2.php';
            require 'views/certificacion/list.php';

        }else{
            require 'views/login.php';
        }
    }

    public function indexCer(){
        if (isset($_SESSION['user'])) {

            require 'views/certificacion/archivo.php';

        }else{
            require 'views/login.php';
        }
    }


    public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteCertificacion($_REQUEST);
		header("Location: ?controller=certificacion");
		}else{

			require 'views/login.php';
		}
	}

    
}