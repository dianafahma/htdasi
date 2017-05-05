<?php
class M_kontak extends CI_Model{
		function insertdata(){
			$vid=$this->input->post('id');
			$vtanggal=$this->input->post('tanggal');
			$vnama=$this->input->post('nama');
			$vemail=$this->input->post('email');
			$vkritis=$this->input->post('kritis');
			$query=$this->db->query("INSERT INTO kontak (id, nama, email,tanggal, kritis) VALUES ('$vid','$vnama','$vemail',NOW(),'$vkritis')");
		}
		
		function get_list_data() {
			$query=$this->db->query("select * from kontak order by id");
			return $query;
		}
		
		function delete_data($vid){
			$query=$this->db->query("DELETE FROM kontak WHERE id='$vid'");
		}
		
		/*function change_status ($vid, $vstatus){
			$str="UPDATE message SET status='$vstatus' WHERE id='$vid'";
			$query=$this->db->query($str);
		}*/
}
?>