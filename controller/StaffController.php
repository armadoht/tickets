<?php
	class StaffController extends ControladorBase{

		public function StaffController(){
			parent::ControladorBase();
		}

		public function index(){
            #Cargar la vista de 
            $Staff = new Staff();
            $nombreCompleto = $_GET['valor2'];
            $created = $Staff->createdStaff($nombreCompleto);
            $assigned = $Staff->assignedStaff($nombreCompleto);

			$this->view("staff", array("title" => $_GET['valor2'],  "created" => $created , "assigned" =>  $assigned));
        }
        
	}
?>