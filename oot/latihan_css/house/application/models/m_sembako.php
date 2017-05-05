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
		$kword=strtolower($this->input->post('keyword'));
	/*$query=$this->db->query("select * from barangs where nama_barang like '%$kword%'");
		return $query;*/
		$this->db->select('*');
		$this->db->from('barangs');
		$this->db->where("nama_barang like '%$kword%'");
		$this->db->order_by('kode_barang');
				$getdata = $this->db->get();
		if($getdata->num_rows()>0)
			return $getdata->result_array();
		else
			return $getdata->result();
	}
		function search_toko(){
		$kword=$this->input->post('keyword');
		$this->db->select('*');
		$this->db->from('tokos');
		$this->db->where("nama_toko like '%$kword%'");
		$this->db->order_by('id_toko');
				$getdata = $this->db->get();
		if($getdata->num_rows()>0)
			return $getdata->result_array();
		else
			return $getdata->result();
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

	function get_edit_barang($kode){
		$this->db->select('*');
		$this->db->from('barangs');
		$this->db->where(array('kode_barang'=>$kode));
		$this->db->order_by('kode_barang');
		$getdata = $this->db->get();
		if($getdata->num_rows()>0)
			return $getdata->row();
		else
			return null;
	}
	function edit_barang($kode){//database
	$vkode=$this->input->post('kode_barang');
		$vnama=$this->input->post('nama_barang');
		$vharga=$this->input->post('harga_barang');
		$vsatuan=$this->input->post('satuan_barang');
		$vstok=$this->input->post('stok_barang');
		$vid=$this->input->post('id_toko');
		$vket=$this->input->post('ket');
		$query=$this->db->query("update barangs set kode_barang='$vkode', nama_barang='$vnama',harga_barang='$vharga', satuan_barang='$vsatuan', stok_barang='$vstok', id_toko='$vid',ket='$vket' where kode_barang='$vkode'");
		return $rows;
	}
			function get_edit_toko($kode){
		$this->db->select('*');
		$this->db->from('tokos');
		$this->db->where(array('id_toko'=>$kode));
		$this->db->order_by('id_toko');
		$getdata = $this->db->get();
		if($getdata->num_rows()>0)
			return $getdata->row();
		else
			return null;
		}
		function edit_toko($kode){//database
		$vid=$this->input->post('id_toko');
		$vnama=$this->input->post('nama_toko');
		$vala=$this->input->post('alamat');
		$query=$this->db->query("update tokos set id_toko='$vid',nama_toko='$vnama',alamat='$vala' where id_toko='$vid'");
		return $rows;
		}
	
	function del_toko($vid){
		$query=$this->db->query("delete from tokos where id_toko='$vid'");
	}
		function del_barang($vkode){
		$query=$this->db->query("delete from barangs where kode_barang='$vkode'");
		}

	function get_list_unggah(){
		$query=$this->db->query("select * from room order by kode");
		return $query;
	}
		function insertdata($namafile,$deskripsi){
		$kode=$this->input->post('kode');
		$tipe=$this->input->post('tipe');
		$tanggal=date('Y-m-d');
		$n='uploads/'.$namafile;
		$query=$this->db->query("INSERT INTO room(kode,tipe,rate,image,avail,facility) VALUES ('$kode','$tipe','$deskripsi','$namafile','$tanggal','$n')");
	}
	
}
?>