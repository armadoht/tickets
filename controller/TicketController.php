<?php
	class TicketController extends ControladorBase{

		public function TicketController(){
			parent::ControladorBase();
		}

		public function index(){
			#Cargar la vista de 
			$ticket = new phpdesk_tickets();
			$hgo = $ticket->showHidalgo();
			$tol = $ticket->showTol();
			$cva = $ticket->showCva();
			$corp = $ticket->showCorp();
			$abas = $ticket->showAbas();

			$this->view("index",  array("title" =>"Reporte de Tickets Abiertos", "tick_hgo" => $hgo, "tick_tol" => $tol,"tick_cva" => $cva, "tick_corp" => $corp, "tick_abas" => $abas,));
		}

		public function read_ticket(){
			$ticket = new phpdesk_tickets();
			$origen = $_GET['valor'];
			$array_ticket = $ticket->showTickLocalidad($origen);
			$detalle = "Detalle de Tickets ".$origen;
			$this->view("tickets_detalle",  array("title" =>$origen, "array"=>$array_ticket));
		}
		
	}
?>