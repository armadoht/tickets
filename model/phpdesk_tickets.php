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

		public function showTickLocalidad($origen){
			if($origen == '200.79.183.225'){
				$query="SELECT * FROM phpdesk_tickets WHERE (ip = '200.79.183.225' || ip='187.174.100.242') and status = 'Open'";
			}else{
				$query="SELECT * FROM phpdesk_tickets WHERE ip = '$origen' and status = 'Open' ";	
			}
			
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

		public function showTickAbastecedoras(){
			
			$query="SELECT * FROM phpdesk_tickets WHERE (ip != '189.240.241.99' and ip != '187.188.90.158' and ip != '187.130.3.5' and ip != '187.174.100.242' and ip != '200.79.183.225') and  status = 'Open'";	
			
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


		/*Total de tickets por localidad---->*/
		//Hidalgo
		public function showHidalgo(){
			$query = "SELECT COUNT(*) FROM phpdesk_tickets WHERE (ip = '200.79.183.225' || ip = '187.174.100.242') and status = 'Open' ";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//showHidalgo

		//Toluca
		public function showTol(){
			$query = "SELECT COUNT(*) FROM phpdesk_tickets WHERE ip = '187.130.3.5' and status = 'Open' ";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//showHidalgo

		//Cuernavaca
		public function showCva(){
			$query = "SELECT COUNT(*) FROM phpdesk_tickets WHERE ip = '187.188.90.158' and status = 'Open' ";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//showHidalgo

		//Corporativo
		public function showCorp(){
			$query = "SELECT COUNT(*) FROM phpdesk_tickets WHERE ip = '189.240.241.99' and status = 'Open' ";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//showHidalgo

		//Corporativo
		public function showAbas(){
			$query = "SELECT COUNT(*) FROM phpdesk_tickets WHERE (ip != '189.240.241.99' and ip != '187.188.90.158' and ip != '187.130.3.5' and ip != '187.174.100.242' and ip != '200.79.183.225') and  status = 'Open'";

			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
		}//showHidalgo

		
	}
?>
