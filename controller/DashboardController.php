<?php
	class DashboardController extends ControladorBase{

		public function DashboardController(){
			parent::ControladorBase();
		}

		public function index(){
            #Load view Dashboard 
            $ticket = new phpdesk_tickets();
            $staff = $ticket->showStaff();
			$fecha = date('F Y');
			$this->view("dashboard", array("date" => $fecha ,"tickStaff" => $staff));
        }
        
	}
?>