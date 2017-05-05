<!DOCTYPE html>
<html>
<head>
	<meta lang="en"/>
	<title>Template</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'aset/gaya.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'aset/css/style.css'?>" type="text/css">
</head>
<body>
	<div class="header">
		<div>
			<a href="<?php echo base_url().'index.php/c_camp/view_index'?>" id="logo"><img src="<?php echo base_url().'aset/images/logo.png'?>" alt="logo"></a>
			<ul>
				<li>
					<a href="<?php echo base_url().'index.php/c_camp/view_index'?>"><span>H</span>ome</a>
				</li>
				<li >
					<a href="<?php echo base_url().'index.php/c_camp/view_about'?>"><span>A</span>bout</a>
				</li>
				<li>
					<a href="<?php echo base_url().'index.php/c_camp/view_programs'?>"><span>P</span>rograms</a>
				</li>
				<li class="selected">
					<a href="<?php echo base_url().'index.php/c_camp/view_blog'?>"><span>B</span>log</a>
				</li>
				<li>
					<a href="<?php echo base_url().'index.php/c_camp/view_staff'?>"><span>S</span>taff</a>
				</li>
				<li>
					<a href="<?php echo base_url().'index.php/c_camp/view_contact'?>"><span>C</span>ontact</a>
				</li>
			</ul>
			<div>
				<br/>
					<?php 
											echo form_open('test_c/search_mahasiswa');?>
											<input input="text" name="keyword" id="inputsearch" placeholder="  seach"/>
											<?php
											//echo form_input('keyword','masukan nama','class="inputsearch"');
											echo form_submit('submit','Cari','id="buttonsearch"');
					//echo anchor('test_c/do_upload','Insert Data','id="buttoninsert"'); ?>
					<button class="buttoninsert" ><a style="text-decoration:none;" href="<?php echo base_url().'index.php/test_c/do_upload'?>"> Input </a></button>
											<?php echo form_close();
							?>					
				
			</div>
		</div>
	</div>

	<div class="body">
		<div class="contact">
			<div>
				<div>
					<div class="contact">
						<h2>SUMMER CAMP INFO - Partisipant</h2>
						<div class="address" style="margin-top:-20px;">
							<?php $this->load->view($content_view);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="footer">
		<div>
			<div>
				<h3>NEWSLETTER</h3>
				<p>
					Nulla porttitor vulputate elit, trist ique malesuada sem.
				</p>
				<form action="index.php">
					<input type="text" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="submit" value="Get">
				</form>
			</div>
			<div>
				<h4>LATEST BLOG</h4>
				<ul>
					<li>
						<p>
							<a href="blog.php">Phasellus parea ut di tincidunt blandit nisi ut pellentesque.</a>
						</p>
						<span>11/07/2011</span>
					</li>
					<li>
						<p>
							<a href="blog.php">Donec dictum semper augue, ut consectetur magna posuere eget.</a>
						</p>
						<span>11/03/2011</span>
					</li>
					<li>
						<p>
							<a href="blog.php">Cum sociis natoque penatibus et magnis dis parturient.</a>
						</p>
						<span>11/27/2011</span>
					</li>
				</ul>
			</div>
			<div class="connect">
				<h4>FOLLOW US:</h4>
				<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">Facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">Twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" class="google">Google+</a>
			</div>
		</div>
		<div>
			<p>
				Summer Camp &#169; 2011 | All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>