<div style="background-color:silver; border:solid #fff;border-radius:10px 10px;align:center;">
	<h3>
	  <u>	
		Detail Mahasiswa
	  </u>
	</h3>	
	<div  style="float:left;margin-right:15px;margin-left:70px;width:150px;text-align:center;">
		<img height="150px" width="150px" src="<?php echo base_url().'unggah/'.$row->foto; ?>"/>
	</div><br/>
	<div>
		<legend >
		<label  id="labelnim" for="nim" >Nim&nbsp; &nbsp;</label> = 
		<input type="text"  class="inputnim" value="<?php echo $row->nim; ?>"/><br/>
		<label  id="labelnim" for="nama">Nama </label> = 
		<input type="text" class="inputnim" value="<?php echo $row->nama; ?>"/><br/>
		<label id="labelnim" for="nama">Umur </label> =
		<input type="text" class="inputnim" value="<?php echo $row->umur; ?>"/>
		<?php echo anchor('test_c/display_mahasiswa','Kembali','id=button')?>
		</legend>
	</div>
</div>
