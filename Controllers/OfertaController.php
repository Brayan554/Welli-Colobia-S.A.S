<?php

require 'models/Oferta.php';
require 'models/Status.php';
require 'models/Notificaciones.php';
/**
 * 
 */
class OfertaController
{
	
	private $model;
	private $Status;
	private $Notificaciones;

	public function __construct()
	{		
		$this->model  = new Oferta;
		$this->Status = new Status;		
		$this->Notificaciones = new Notificaciones;		
	}

	public function index()
	{
		if (isset($_SESSION['user'])) {
			
			
			$ofertas = $this->model->getAll();
			$estados  = $this->Status->getAll();
			$notificaciones = $this->Notificaciones->getAll();
			
			require 'views/layout2.php';
			require 'views/EjemploOferta.php';
			

		}else{

			require 'views/login.php';
		}
	}

	public function new(){
		if (isset($_SESSION['user'])) {
			
		require 'views/layout2.php';
		$ofertas = $this->model->getAll();
		require 'views/oferta/new.php';
			
			
		}else{

			require 'views/login.php';
		}
	}

	public function save(){

		if (isset($_SESSION['user'])) {
		$this->model->newOferta($_REQUEST);
		header("Location: ?controller=oferta");
		}else{

			require 'views/login.php';
		}
	}


	public function edit(){

		if (isset($_SESSION['user'])) {
			
		if (isset($_REQUEST['idOferta'])) {
			
			$id = $_REQUEST['idOferta'];


			$data = $this->model->getOfertaById($id);

			require 'views/layout2.php';
			require 'views/oferta/edit.php';

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

		$this->model->editOferta($_POST);
		header("Location: ?controller=oferta");
		} else {
			echo "Error";
		}
		}else{

			require 'views/login.php';
		}
	}

	public function delete(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteOferta($_REQUEST);
		header("Location: ?controller=oferta");
		}else{

			require 'views/login.php';
		}
	}

	public function deleteNotificacion(){
		
		if (isset($_SESSION['user'])) {
		$this->model->deleteNotificacion($_REQUEST);
		header("Location: ?controller=oferta");
		}else{

			require 'views/login.php';
		}
	}

	public function updateStatus(){
		$oferta = $this->model->getOfertaById($_REQUEST['idOferta']);
		$data = [];

		if($oferta[0]->idEstados == 1){
			$data = [
				'idOferta' => $oferta[0]->idOferta,
				'idEstados' => 2
			];
		}elseif($oferta[0]->idEstados == 2){
			
			$data = [
				'idOferta'  => $oferta[0]->idOferta,
				'idEstados' => 1
			];
		}
		$this->model->editStatus($data);
		header("Location: ?controller=oferta");


	}


}