<?php
	class phpdesk_tickets extends EntidadBase{
		
		private $id;
		private $admin_id;
		private $admin_user;
		private $admin_email;
		private $title;
		private $update;
		private $waiting;
		private $text;
		private $status;
		private $opend;
		private $priority;
		private $group;
		private $owner;
		private $fields;
		private $values;
		private $attach;
		private $replies;
		private $closed_time;
		private $ip;
		private $fecha_waiting;
		private $bandera_envio;
		private $id_usuasignado;

		public function phpdesk_tickets(){
			$table = "phpdesk_tickets";
			parent ::EntidadBase($table);
		}

		//extraer el mes año y día 

		//Hidalgo
		public function showHidalgo(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");
				
			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Grupak Hidalgo' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//Hidalgo

		//Toluca
		public function showTol(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Grupak Toluca' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//showToluca

		//Cuernavaca
		public function showCva(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Grupak Cuernavaca' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//showCuernavaca

		//Corporativo
		public function showCorp(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Grupak Corporativo' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//Corporativo

		//Santa Clara
		public function showAbasClara(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query ="SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Abastecimientos Fibrosos Santa Clara' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//

		//Santa Cuautitlán
		public function showAbasCuautitlan(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Abastecimientos Fibrosos Cuautitlan' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//

		//Santa Toluca
		public function showAbasToluca(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Abastecimientos Fibrosos Toluca' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//

		//San Luis Potosiitlán
		public function showAbaSanLuis(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Abastecimientos Fibrosos Santa Luis Potosi' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//

		//Queretaro
		public function showAbasQueretaro(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Abastecimientos  Queretaro' AND created_at BETWEEN  '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//

		//Puebla
		public function showAbasPuebla(){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT count(*) AS ubicacion FROM bdgpk2.tickets WHERE ubicacion = 'Abastecimientos Fibrosos Puebla' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//

		//Localidades
		public function showTickLocalidad($origen){
			$fechaInicio = date("y")."-".date("m")."-01";
			$fechaFinal = date("y")."-".date("m")."-".date("d");

			$query = "SELECT * FROM bdgpk2.tickets WHERE ubicacion = '".$origen."' AND created_at BETWEEN '$fechaInicio' AND '$fechaFinal';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				while($row = $result->fetch_array()){
					$resultSet[] = $row;
				}
				return $resultSet;
        	}else{
        		return 0;
        	}
		}//

		public function showStaff(){
			$query = "SELECT * FROM bdgpk2.users where type = 'admin';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				while($row = $result->fetch_array()){
					$resultSet[] = $row;
				}
				return $resultSet;
        	}else{
        		return 0;
        	}
		}


		
	}
?>
