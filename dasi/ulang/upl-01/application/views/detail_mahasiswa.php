	<h2>
		Detail Mahasiswa
	</h2>	
	<div  style="float:left;margin-right:30px">
		<img height="120px" width="100px" src="<?php echo base_url().'unggah/'.$row->foto; ?>"/>
	</div>
	<div >
		<label for="nim">Nim Mahasiswa : </label>
		<input type="text" value="<?php echo $row->nim; ?>"/><br/>
		<label for="nama">Nama Mahasiswa : </label>
		<input type="text" value="<?php echo $row->nama; ?>"/><br/>
		<label for="nama">Umur Mahasiswa : </label>
		<input type="text" value="<?php echo $row->umur; ?>"/>
	</div>