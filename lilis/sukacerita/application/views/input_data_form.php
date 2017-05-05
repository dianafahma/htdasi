<?php echo form_open_multipart('home_admin/proses_tambah'); ?>
	<script  type="text/javascript"  src="<?php echo base_url('assets/tinymce/tinymce.min.js')?>"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/tinymce.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/plugins/table/plugin.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/plugins/paste/plugin.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/plugins/spellchecker/plugin.dev.js"></script>
	<script  type="text/javascript">
            tinymce.init({
            selector: "textarea"
            });
	</script>
<fieldset>
	<p>
	  <label>Jenis Magang</label>
	  <input type="text" name="job" style="width:500" class="form-control"><br/>
	   <label>Nama Perusahaan/Institusi</label>
	  <input type="text" name="company" style="width:500" class="form-control"><br/>
	  <label>Kontak</label>
	  <input type="text" name="contact" style="width:500" class="form-control"><br/>
	  <label>Alamat</label>
	  <input type="text" name="address" style="width:500" class="form-control"><br/>
	  <label>Provinsi</label>
	  <input type="text" name="id_prov" style="width:500" class="form-control"><br/>
	  <label>Masukkan Logo Perusahaan/Institusi </label><br/>
	  <input type="file" name="gambar_i" size="20"/>

	</p>
	<p>
		<label bgcolor="red"style="padding-left:10"> Deskripsi Magang </label><br>
		<textarea type="text" name="description" rows=20 cols=60 wrap=off autocorrect="on" style="padding-left:50"></textarea>
	</p>
	<p align="center">
	
		<?php echo form_submit('submit', 'Simpan', 'class="btn btn-success"'); ?></div><br>
		<label><i>*Pastikan data yang Anda masukan benar!</i></label>
		<? echo form_close();?>
	</p>
</fieldset>
