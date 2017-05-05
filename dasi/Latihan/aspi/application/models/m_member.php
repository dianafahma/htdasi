
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_member extends CI_Model{

	public function validasi($v_username,$v_password){
	/*echo $v_username;
	echo $v_password;
*/
		$sql = "SELECT * FROM member WHERE username = '$v_username' AND password='$v_password'";
		$result = $this->db->query($sql);
		$ketemu=$result->num_rows;
	/*	echo 'ketemu='.$ketemu;
		break;*/
		if($ketemu>0){
			return 1;
		}
		else{
			return 0	;
		}
	}
}
?>
