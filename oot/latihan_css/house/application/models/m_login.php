<?php
class M_login extends CI_Model{
	public function validasi($vusername,$vpassword){
	/*
	echo $vusername;
	echo $vpassword;
	break;*/
	
		$sql = "select * from login where username='$vusername' and password='$vpassword'";
		$result = $this->db->query($sql);
		
		$ketemu=$result->num_rows;
		if($ketemu>0){
			return 1;
		}else{
			return 0;
		}
	}

}
?>