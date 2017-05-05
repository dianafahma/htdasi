<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
echo form_open('clean_c/display');
?>
<body>
	<div >
		<?php $this->load->view($content_view);?>
	</div>
</body>
</html>