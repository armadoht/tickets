<?php
	class IndexController extends ControladorBase{
		public function IndexController(){
			parent::ControladorBase();
		}
		public function index(){
			//Localidades, Abastecedoras

			$ticket = new phpdesk_tickets();
			$hgo = $ticket->showHidalgo();
			$tol = $ticket->showTol();
			$cva = $ticket->showCva();
			$corp = $ticket->showCorp();

			//Abstecedorar
			$abas = $ticket->showAbasClara();
			$Cuautitlan = $ticket->showAbasCuautitlan();
			$Toluca = $ticket->showAbasToluca();
			$SanLuisPotosi = $ticket->showAbaSanLuis();
			$Queretaro = $ticket->showAbasQueretaro();
			$Puebla = $ticket->showAbasPuebla();

			$staff = $ticket->showStaff();
			$fecha = date('F Y');
			$this->view("index",  array("title" =>$fecha, 
			"tick_hgo" =>  $hgo, 
			"tick_tol" =>  $tol,
			"tick_cva" =>  $cva, 
			"tick_corp" => $corp,
			"abas" => $abas,
			"Cuautitlan" => $Cuautitlan,
			"Toluca" => $Toluca,
			"SanLuisPotosi" => $SanLuisPotosi,
			"Queretaro" => $Queretaro,
			"Puebla"=> $Puebla,
			"tickStaff" => $staff
			));
		}
	}

?>