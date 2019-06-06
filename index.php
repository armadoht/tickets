<?php
/*	Sistema de Tickets */
require_once('config/global.php');
require_once('core/ControladorBase.php');
require_once('core/ControladorFrontal.func.php');

//CONTROLADORES DEL SISTEMA DE TICKETS

if(isset($_GET['controller']) && $_GET['controller'] == 'ticket'){
	/*show tickets open*/
	$controllerObj = cargarControladorTicket();
}else{
	$controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
}

lanzarAccion($controllerObj);
?>