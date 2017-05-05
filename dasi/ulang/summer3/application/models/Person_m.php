<?php defined('BASEPATH') or exit('No direct script access');

/**
* The model for accessing database//trial only
*/
class Person_m extends CI_Model
{
	var $table = 'persons';
	var $column = array('firstname','lastname','gender','address','dob');
	var $order = array('id' => 'desc' );

	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}
	private function _get_db_query(){
		$this->db->from($this->table);
		$i =0;
		foreach ($this->column as $item) {
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item,$_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		if(isset($_POST['order'])){
			$this->db->order_by($column[$_POST['order']['0']['column']],$_POST['order']['0']['dir']);
		}
		elseif (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	
	function get_list_data(){
		$this->_get_db_query('persons');
		if($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}
	function count_filter(){
		$this->_get_db_query();
		$query=$this->db->get();
		return $query->num_rows();
	}
	public function count_all(){
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
	public function get_id($id){
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function save($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	public function update($where,$data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}

?>