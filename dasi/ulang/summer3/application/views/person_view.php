<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Trial CRUD AJAX</title>
	<link rel="stylesheet" href="<?php echo ("asset/css/bootstrap.min.css")?> ">
	<link rel="stylesheet"  href="<?php echo ("asset/datatables/media/css/dataTables.bootstrap.css")?>"/>
	<link rel="text/javascript" href="<?php echo ("asset/datatables/media/js/dataTables.bootstrap.js")?>"/>
	<link rel="stylesheet" href="<?php echo ("asset/datatables/media/css/dataTables.bootstrap.css")?>" />

		<script type="text/javascript" src="<?php echo("asset/jquery-2.2.0.js")?>"></script>
		<!--<script type="text/javascript" src="<?php # http://ajax.googleapis.com/ajax/libs/jquery-1.7.1/jquery.min.js ?>"></script>-->
	<script type="text/javascript" src="<?php echo ("asset/js/bootstrap.min.js")?>"></script>

<script type="text/javascript" src="<?php echo ("asset/datatables/media/js/jquery.dataTables.js")?>"></script>

	<script type="text/javascript" src="<?php echo ("asset/datatables/media/js/dataTables.bootstrap.js")?>"></script>

</head>
<body>
	<div class="container">
	
		<h1>Trial AJAx CRUD dengan ext</h1>
		<h3>Person Data</h3><br/>
		<button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i>Add Person</button>
		<br/><br/>
		<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Address</th>
					<th>Date of Birth</th>
					<th style="width:125px">Action</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
			<tfoot>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Address</th>
					<th>Date of Birth</th>
					<th>Action</th>
				</tr>
			</tfoot>
		</table>

	</div>

	<script src="<?php echo ("asset/jquery-2.2.0.js")?>"></script>
	<?php #echo base_url();media/frontend/nama_file.js ?>
	<script src="<?php echo ("asset/js/bootstrap.min.js")?>"></script>
	<script  src="<?php echo ("asset/datatables/media/js/jquery.dataTables.min.js")?>"></script>
	<script  src="<?php echo ("asset/datatables/media/js/dataTables.bootstrap.js")?>"></script>



	<script type="text/javascript">
	var save_method; //untuk menyimpan method string
	var table;
	$(document).ready(function() {
		table = $('#table').dataTable({
			"processing": true, // control untuk memeproses indicator
			"serverSide": true, // control untuk datatables proses mode

			//load data table form ajaz source
			"ajax": {
				"url": "<?php echo 'http://localhost:82/dasi/ulang/summer3/index.php/'.("person/ajax_list")?>", //site url person ajax
				"type": "POST"
			},
			//set kolom difinisi untuk inisialisasi properties
			"ColumnDefs":[
			{
				"targets": [ -1 ], //kolom terakhir
				"orderable": false, 
			},
			],

		});
	});

	function add_person(){
		save_method = 'add';
		$('#form')[0].reset();//reset form di modal
		$('#modal_form').modal('show');//menampilkan bootstrap modal
		$('.modal-title').text('Add Person');//set nama pada bootrap modal
		// reload_table();

	}
	function edit_person (id) {
		save_method = 'update';
		$('#form')[0].reset();//reset form di modal

		//AJax load data dari ajax
		$.ajax({
			url : "<?php echo 'http://localhost:82/dasi/ulang/summer3/index.php/'.("person/ajax_edit/")?>" + id,  //site url
			type: "GET", 
			dataType: "JSON",
			success: function(data)
			{
				$('[name="id"]').val(data.id);
				$('[name="firstName"]').val(data.firstName);
				$('[name="lastName"]').val(data.lastName);
				$('[name="gender"]').val(data.gender);
				$('[name="address"]').val(data.address);
				$('[name="dob"]').val(data.dob);

				$('#modal_form').modal('show'); //menampilkan bootrap modal saat selesai memproses
				$('#modal-title').text('Edit Person'); //memberi nama modal 
			},
			error: function(event, jqxhr, settings, thrownError)
			{
				alert('Error get data from ajax');
			}
		});
	}

	function reload_table(){
		table.api().ajax.reload(null,true);
		// table.ajax.reload(null,true); //reload datatable ajax
	}

	function save(){
		var url;
		if(save_method == 'add')
		{
			url = "<?php echo 'http://localhost:82/dasi/ulang/summer3/index.php/'.("person/ajax_add")?>"; //site url
		}else{
			url ="<?php echo  'http://localhost:82/dasi/ulang/summer3/index.php/'.("person/ajax_update") ?>"; //site url
		}

		//menambah data ajax ke database
		$.ajax({
			url : url, 
			type: "POST", 
			data: $('#form').serialize(),
			dataType: "JSON", 
			success: function(data)
			{
				// to view modal
				$('#modal_form').modal('hide');
				reload_table();
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
			}

		});
		// reload_table();

	}

	function delete_person(id){
		if(confirm('Are you sure delete this data?')){
			//delete ajax ke database
			$.ajax({
				url : "<?php echo 'http://localhost:82/dasi/ulang/summer3/index.php/'.("person/ajax_delete")?>/"+id, //site url
				type: "POST", 
				data: $('#form').serialize(),
				dataType: "JSON", 
				success: function(data)	
				{
					$('#modal_form').modal('hide');
					reload_table();
				},
				error: function(event, jqxhr, settings, thrownError)
				{
					alert('Error adding / update data');
				}
			});
		}
	}

	</script>
	<div class="modal fade" id="modal_form" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h3 class="modal-title">Person Form</h3>
				</div>
				<div class="modal-body form">
					<form action="#" id="form" class="form-horizontal">
					  <input type="hidden" value="" name="id"/>
					  <div class="form-body">
					  	<div class="form-group">
					  		<label class="control-label col-md-3">First Name</label>
					  		<div class="col-md-9">
					  			<input type="text" name="firstName" placeholder="First Name" class="form-control">
					  		</div>
					  	</div>
					  	<div class="form-group">
					  		<label class="control-label col-md-3">Last Name</label>
					  		<div class="col-md-9">
					  			<input type="text" name="lastName" placeholder="Last Name" class="form-control">
					  		</div>
					  	</div>
					  	<div class="form-group">
					  		<label class="control-label col-md-3">Gender</label>
					  		<div class="col-md-9">
					  			<select name="gender" class="form-control">
					  				<option value="male">Male</option>
					  				<option value="male">Female</option>
					  			</select>
					  		</div>
					  	</div>
					  	<div class="form-group">
					  		<label class="control-label col-md-3">Address</label>
					  		<div class="col-md-9">
					  			<textarea name="address" placeholder="Address" class="form-control"></textarea>
					  		</div>
					  	</div>
					  	<div class="form-group">
					  		<label class="control-label col-md-3">Date of Birth</label>
					  		<div class="col-md-9">
					  			<input type="text" name="dob" placeholder="dob" class="form-control">
					  		</div>
					  	</div>
					  </div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</div>
			</div><!--/.modal-content-->
		</div><!--/.modal-dialog-->
		
	</div><!--/.modal-->

</body>
</html>