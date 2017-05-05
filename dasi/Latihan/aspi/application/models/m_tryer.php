<?php
class m_tryer extends Model{
	var$title='';
	var$content='';
	var$data='';

	function m_tryer(){
		parent::Model();

	}
	function get_data(){
		$query=$this->db->get('entries',10);
		return $query->result();
	}
}
?>