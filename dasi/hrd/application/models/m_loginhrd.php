<?php
class M_loginhrd extends CI_Model{
	public function validasi($vuser,$vpass){
		
		$sql = "SELECT *FROM user where username='$vuser' and password='$vpass'";
		$result = $this->db->query($sql);
		
		$cocok =$result->num_rows;
		if ($cocok>0){
			return 1;
		}else{
			return 0;
			//echo "salasfasfsfd";
		}
	}
}
?>