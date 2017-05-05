<?php
/**
* model for validation login
*/
class validasi extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function validate($v_username,$v_password){
		$sql = "select * from member where username = '$v_username' and password = '$v_password'";
		$result = $this->db->query($sql);
		$ketemu=$result->num_rows;
		if($ketemu>0){
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>
