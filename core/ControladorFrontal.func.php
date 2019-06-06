<?php

	function cargarControlador($controller){
		$controlador = ucwords($controller).'Controller';
		$strFileController = "controller/".$controlador."php";
		
		if(!is_file($strFileController)){
			$strFileController="controller/".ucwords(CONTROLADOR_DEFECTO)."Controller.php";
		}
		require_once $strFileController;
		$controllerObj = new $controlador();
		return $controllerObj;
	}//cargarControlador

	function cargarControladorTicket(){
		$controlador = "TicketController.php";
		$strFileController = "controller/".$controlador;
		require_once $strFileController;
		$controllerObj = new TicketController();
		return $controllerObj;
	}

	function cargarAction($controllerObj,$action){
		$accion = $action;
		$controllerObj->$accion();
	}//cargarAction

	function lanzarAccion($controllerObj){
		if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
			cargarAction($controllerObj,$_GET["action"]);
		}else{
			cargarAction($controllerObj,ACCION_DEFECTO);
		}
	}//lanzarAccion


?>