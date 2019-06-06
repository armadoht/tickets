<?php
	class IndexController extends ControladorBase{
		public function IndexController(){
			parent::ControladorBase();
		}
		public function index(){
			#Cargar mainView.php
			$ticket = new phpdesk_tickets();
			$hgo = $ticket->showHidalgo();
			$tol = $ticket->showTol();
			$cva = $ticket->showCva();
			$corp = $ticket->showCorp();
			$abas = $ticket->showAbas();

			$this->view("index",  array("title" =>"Reporte de Tickets Abiertos", "tick_hgo" => $hgo, "tick_tol" => $tol,"tick_cva" => $cva, "tick_corp" => $corp, "tick_abas" => $abas,));
		}
	}

?>