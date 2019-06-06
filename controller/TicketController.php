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
			$origen = $_GET['valor'];
			$ticket = new phpdesk_tickets();
			
			if($origen == 'abas'){
				$array_ticket = $ticket->showTickAbastecedoras();
			}else{
				$array_ticket = $ticket->showTickLocalidad($origen);
			}
			$this->view("tickets_detalle",  array("title" =>"Detalle de Ticket", "array"=>$array_ticket));
		}

	}

?>