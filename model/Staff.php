<?php
	class Staff extends EntidadBase{

		public function Staff(){
			$table = "users";
			parent ::EntidadBase($table);
        }
        
        //Tickets of Months
        public function monthStaff($user){
			$query = "";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
        }

        //Tickets Asignados
        public function assignedStaff($user){
			$query = "SELECT count(*) FROM bdgpk2.tickets WHERE responsibleTicket ='".$user."';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
        }

        //Tickets Creados
        public function createdStaff($user){
			$query = "SELECT count(*) FROM bdgpk2.tickets WHERE propietario ='".$user."';";
			$result = $this->db()->query($query);
			if($result->num_rows > 0){
				$cont = $result->fetch_row();
            	return  $cont[0];
        	}else{
        		return 0;
        	}
        }

	}
?>