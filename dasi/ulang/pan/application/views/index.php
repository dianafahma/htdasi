<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FaberNainggolan">
    <title><?=$title?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
 
  </head>
 
  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CBO DINAMIS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=base_url()?>home"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li class="active"><a href="<?=base_url()?>barang"><i class="glyphicon glyphicon-th"></i> Combo Dinamis</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Default</a></li>
            <li class="active"><a href="#">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
- See more at: http://fabernainggolan.net/combobox-dinamis-dengan-codeigniter#sthash.lv3Dw9Ck.dpuf
<!-- jquery core -->
<script src="<?=base_url()?>aset/js/jquery.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="<?=base_url()?>aset/js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
    $('#combox select').change(function () {
        var selProv = $(this).val();
        console.log(selProv);  //menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
        $.ajax({
            url: "<?=base_url()?>cdinamis/get_kota/",       //memanggil function controller dari url
            async: false,
            type: "POST",     //jenis method yang dibawa ke function
            data: "provinsi="+selProv,   //data yang akan dibawa di url
            dataType: "html",
            success: function(data) {
                $('#kota').html(data);   //hasil ditampilkan pada combobox id=kota
            }
        })
    });
 });
</script>

<?php $this->load->view('header');?>    <!-- include header.php -->
 
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading"><b>Combo Box Dinamis</b></div>
    <div class="panel-body">
        <div class="col-xs-6">
        <table class="table table-striped table-bordered">
         <tr>
         <td>
         <label>Provinsi</label>
         <div id="combox"> <!-- sebagai indentitas combo box -->
          <select name="provinsi" id="provinsi" class="form-control">
           <option></option>
           <?php foreach($qprovinsi as $rowprov){?>
           <option value="<?=$rowprov->idprov?>"><?=$rowprov->name?></option>
           <?php }?>
          </select>
          </div>
         </td>
         </tr>
        <tr>
         <td>
         <label>Kota/Kabupaten</label>
          <select name="kota" id="kota" class="form-control">
           <option></option>
          </select>
         </td>
         </tr>
       </table>
       </div>
       </div>
    </div>    <!-- /panel -->
</div> <!-- /container -->
