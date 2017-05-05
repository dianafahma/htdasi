<?php
class test_m extends CI_Model{

var $tabel = 'tb_wilayah'; 
	function get_list(){
	$provinsi=$this->input->post('provinsi');
	$kota=$this->input->post('kota');
	$query=$this->db->query("select * from pantai where provinsi='$provinsi' and kota='$kota'");
/*
	echo 'data tidak ditemukan';
	*/
	if($query->num_rows()>0)
	return $query;
	else
	redirect ('test_c/index');	
}
function  get_provinsi() {  //funtion menampilkan semua provinsi
        $this->db->select('*');
        $this->db->from($this->tabel);
        $this->db->where('level','1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 

function get_kota_byprovinsi($state){  //funtion menampilkan kota berdasarkan provinsi
        $this->db->select('idkot, name');
        $this->db->where('idprov',$state);
        $this->db->where('level','2');
        $query = $this->db->get($this->tabel);
        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return FALSE;
        }
    }


function get_list_provinsi(){
	/*$sql_prov=$this->db->get($this->tabel_provinsi);	
	if($sql_prov->num_rows()>0){
		foreach ($sql_prov->result_array() as $row)
			{
				$result['-']= '- Pilih Provinsi -';
				$result[$row['id_provinsi']]= ucwords(strtolower($row['nama_provinsi']));
			}
			return $result;
		}

*/

	$query=$this->db->query("select * from provinsi ");
	//if(isset($_POST['$provinsi'])=='$this->db->query("select provinsi from pantai")'
	//$query=$this->db->query("select kota from pantai where provinsi='$provinsi' ");
	return $query;
}


function get_list_kota($vkota){
echo $vkota;
break;
	//$kota=$this->input->post('provinsi');
	//$query=$this->db->query("select kota from kota where kabupaten='$kabupaten' ");
	//return $query;
}


	function get_list_mahasiswa(){
	  $this->db->select('*');
	  $this->db->from('mahasiswa');
	  $get_data=$this->db->get();
	  if($get_data->num_rows()>0)
	  	return $get_data->result_array();
	  else
	  	return null;
	}
	function get_detail_data($id){
	  $this->db->select('*');
	  $this->db->from('mahasiswa');
	  $this->db->where(array('id'=>$id));
	  $get_data=$this->db->get();
	  if($get_data->num_rows()>0)
	  	return $get_data->row();
	  else
	  	return null;

	}
	function get_edit_data($id){
		 $this->db->select('*');
	  $this->db->from('mahasiswa');
	  $this->db->where(array('id'=>$id));
	  $get_data=$this->db->get();
	  if($get_data->num_rows()>0)
	  	return $get_data->row();
	  else
	  	return null;
	}
	function pantai(){
		
	}
	function  edit_data($id,$nim,$vnama,$vfile,$vumur){
		$n=$vfile;
		$query=$this->db->query("UPDATE mahasiswa set nim='$nim', nama='$vnama',umur='$vumur',foto='$n' where id=$id");
	}
	function delete_data($id){
		 $query=$this->db->query("delete from mahasiswa where id=$id");
		return $query;	
	}
	function insert_mahasiswa(){ //This is not for upload
	  $nim=$this->input->post('nim');
	  $nama=$this->input->post('nama');
	  $umur=$this->input->post('umur');
	  $foto=$this->input->post('foto');
	  $query=$this->db->query("insert into mahasiswa (nim,nama, umur,foto) values ('$nim','$nama','$umur','$foto')");
	  return $query;
	}
	function insert_dmahasiswa($nim,$vnama,$vfile,$umur){
	  $n=$vfile;
	  $query=$this->db->query("INSERT INTO mahasiswa (nim,nama,umur,foto) values ('$nim','$vnama','$umur','$n')");
	}
	function update_dmahasiswa($gnim,$vnama,$vfile,$vumur){
		$nama=$this->input->post('nama');
		$umur=$this->input->post('umur');
	  $n='unggah/'.$vfile;
	  $query=$this->db->query("UPDATE mahasiswa set nama='$nama',foto='$n'where nim='$gnim'");
	}
	function get_search_mahasiswa(){
		$kword=strtolower($this->input->post('keyword'));
		$this->db->select('*');
	  $this->db->from('mahasiswa');
	  $this->db->where("nama like '%$kword%'");
	  $get_data=$this->db->get();
	  if($get_data->num_rows()>0)
	  	return $get_data->result_array();
	  else
	  	return null;	
	}
}
?>