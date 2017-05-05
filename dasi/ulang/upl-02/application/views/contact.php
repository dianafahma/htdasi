<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Summer Camp Website Template</title>
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
				<li>
					<a href="<?php echo base_url().'index.php/c_camp/view_blog'?>"><span>B</span>log</a>
				</li>
				<li>
					<a href="<?php echo base_url().'index.php/c_camp/view_staff'?>"><span>S</span>taff</a>
				</li>
				<li class="selected">
					<a href="<?php echo base_url().'index.php/c_camp/view_contact'?>"><span>C</span>ontact</a>
				</li>
			</ul>
			<div>
				<p>
					<span>C</span>amp <span>S</span>tarts <span>I</span>n: <span><span>228</span></span> <span>D</span>ays
				</p>
			</div>
		</div>
	</div>
	<div class="body">
		<div class="contact">
			<div>
				<div>
					<div class="contact">
						<h2>SUMMER CAMP INFO</h2>
						<div class="address">
							<span><span>A</span>ddress:</span>
							<p>
								Jalan Geger Kalong Hilir No 47, Bandung
							</p>
							<span><span>P</span>hone <span>N</span>umber:</span>
							<p>
								022-9292929
							</p>
							<span><span>F</span>ax <span>N</span>umber:</span>
							<p>
								1-800-222-2222
							</p>
						</div>
						<h3><span>F</span>or <span>A</span>ny <span>I</span>nquiries, <span>P</span>lease <span>F</span>ill <span>o</span>ut <span>T</span>he <span>F</span>orm <span>B</span>elow.</h3>
						<?php echo form_open('c_camp/message');?>
							<table>
								<tr>
									<td><label for="name"><span>N</span>ame:</label></td>
									<td><input type="text" id="name" name="name" required/></td>
								</tr>
								<tr>
									<td><label for="email"><span>E</span>mail <span>A</span>ddress:</label></td>
									<td><input type="text" id="email" name="email"></td>
								</tr>
								<tr>
									<td><label for="subject"><span>S</span>ubject:</label></td>
									<td><input type="text" id="subject" name="subject"></td>
								</tr>
								<tr>
									<td><label for="message"><span>M</span>essage:</label></td>
									<td><textarea id="message" name="mes" cols="30" rows="10"></textarea></td>
								</tr>
							</table>
							<?php echo form_submit('submit','Send','id="submit"') ?>
							
						</form>
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
