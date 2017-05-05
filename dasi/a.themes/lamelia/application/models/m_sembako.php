<?php
class M_sembako extends CI_Model{
	function get_list_toko($perPage,$uri){
		/*$query=$this->db->query("select * from tokos order by id_toko");
		return $query;*/

		$this->db->select('*');
		$this->db->from('tokos');
		$this->db->order_by('id_toko');
		$getdata = $this->db->get('', $perPage, $uri);
		if($getdata->num_rows()>0)
			return $getdata->result_array();
		else
			return null;
	}
		function get_list_barang($perPage,$uri){
		/*$query=$this->db->query("select * from tokos order by id_toko");
		return $query;*/

		$this->db->select('*');
		$this->db->from('barangs');
		$this->db->order_by('kode_barang');
		$getdata = $this->db->get('', $perPage, $uri);
		if($getdata->num_rows()>0)
			return $getdata->result_array();
		else
			return null;
	}


	function search_barang(){
		$kword=$this->input->post('keyword');
		//$query=$this->db->query("select * from barangs where nama_barang like '%$kword%'");
		//return $query;
		$this->db->select('*');
		$this->db->from('barangs');
		$this->db->like('nama_barang', '$kword');
		$this->db->order_by('kode_barang');
				$getdata = $this->db->get();
		if($getdata->num_rows()>0)
			return $getdata->result_array();
		else
			return null;
	}

	function insert_toko(){
		$vid=$this->input->post('id_toko');
		$vnama=$this->input->post('nama_toko');
		$vala=$this->input->post('alamat');
		$query=$this->db->query("insert into tokos(id_toko,nama_toko,alamat) values ('$vid','$vnama', '$vala')");
		return $rows;
	}
		function insert_barang(){
		$vkode=$this->input->post('kode_barang');
		$vnama=$this->input->post('nama_barang');
		$vharga=$this->input->post('harga_barang');
		$vsatuan=$this->input->post('satuan_barang');
		$vstok=$this->input->post('stok_barang');
		$vid=$this->input->post('id_toko');
		$vket=$this->input->post('ket');
		$query=$this->db->query("insert into barangs (kode_barang,nama_barang,harga_barang,satuan_barang,stok_barang,id_toko,ket) values ('$vkode', '$vnama','$vharga','$vsatuan','$vstok','$vid','$vket')");
		return $rows;
	}
	function get_detail_toko($vid){
		$this->db->select('*');
		$this->db->from('tokos');
		$this->db->where(array('id_toko'=>$vid));
		$this->db->order_by('id_toko');
		$getdata = $this->db->get();
		if($getdata->num_rows()>0)
			return $getdata->row();
		else
			return null;

	}
		function get_detail_barang($vid){
		$this->db->select('*');
		$this->db->from('barangs');
		$this->db->where(array('kode_barang'=>$vid));
		$this->db->order_by('kode_barang');
		$getdata = $this->db->get();
		if($getdata->num_rows()>0)
			return $getdata->row();
		else
			return null;

	}
	function del_toko($vid){
		$query=$this->db->query("delete from tokos where id_toko='$vid'");

	}
	function update_toko(){

	}
	function detail_toko(){

	}

	/*function get_list_barang(){
		$query=$this->db->query("select * from barangs order by kode_barang");
		return $query;
	}*/
	function del_barang($vkode){
		$query=$this->db->query("delete from barangs where kode_barang='$vkode'");

	}

	function list_unggah(){
		$query=$this->db->query("select * from unggah order by id_file");
	}
		function insertdata($namafile,$deskripsi){
		$tanggal=date('Y-m-d');
		$query=$this->db->query("INSERT INTO unggah(judul,file,tanggal) VALUES ('$deskripsi','$namafile','$tanggal')");
	}
}
?>