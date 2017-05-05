<!DOCTYPE html>
<html>
<head>
	<meta lang="en"/>
	<title>Template</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'aset/gaya.css'?>">
</head>
<body>
	<div id="">ini bagian dari template</div>
	<?php echo anchor('test_c/do_upload','Insert Data');
					echo form_open('test_c/search_mahasiswa');
					echo form_input('keyword');
					echo form_submit('submit','Cari');
					echo form_close();
	?>
	<div id="badan">
		<?php $this->load->view($content_view);?>
	</div>
</body>
</html>