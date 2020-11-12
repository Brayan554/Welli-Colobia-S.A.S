<?php

require 'models/Aplicar.php';
require 'models/Oferta.php';

/**
 * 
 */
class AplicarController
{
	
	private $model;
	

	public function __construct()
	{		
		$this->model  = new Aplicar;
		$this->Oferta = new Oferta;
					
	}

	public function index()
	{

			require 'views/ofert.php';
	}
	public function traer()
	{
		
			$ofertas  =  $this->Oferta->getAllUsu();
			require 'views/aplicar.php';
	}
	public function crear()
	{

			require 'views/crear.php';
	}

	public function olvidar(){
		require 'views/olvidar.php';
	}

	
	public function save(){

		
			$this->model->newUsuario($_REQUEST);
			header("Location: ?controller=login");

	}

	
}