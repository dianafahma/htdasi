<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Summer Camp Website Template</title>
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/style.css'?>" type="text/css">
</head>
<body>
	<div class="header">
		<div>
			<a href="<?php echo base_url().'index.php/c_camp/view_index'?>" id="logo"><img src="<?php echo base_url().'asset/images/logo.png'?>" alt="logo"></a>
			<ul>
				<li>
					<a href="<?php echo base_url().'index.php/c_camp/view_index'?>"><span>H</span>ome</a>
				</li>
				<li >
					<a href=""<?php echo base_url().'index.php/c_camp/view_about'?>""><span>A</span>bout</a>
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
				<p>
					<span>C</span>amp <span>S</span>tarts <span>I</span>n: <span><span>228</span></span> <span>D</span>ays
				</p>
			</div>
		</div>
	</div>
	<div class="body">
		<div>
			<div>
				<div>
					<div class="blog">
						<h2>Blog</h2>
						<div class="first">
							<h3>This is just a place holder</h3>
							<p>
							Below the data of Student</p>
<?php echo form_open('c_nilai/get_nilai')?>
							<table border="1">
								<tr>
									<td>Nim</td>
									<td>Nama</td>
									<td>Umur</td>
									<td>Index</td>
								</tr>
								<tr>
							<?php
							foreach ($list_nilais as $rows) {
							?>
									<td><?php echo $row->nim;?></td>
									<td><?php echo $row['nama'];?></td>
									<td>Umur</td>
									<td><?php echo $row['indeks'];?></td>
									<?php }
									echo form_close();?>
								</tr>
							</table>

						</div>
						<div>
							<ul>
								<li>
									<div>
										<h3>Recent Posts</h3>
										<span>11/07/2011</span>
										<p>
											Phasellus parea ut di tincidunt blandit nisi ut pellentesque.
										</p>
									</div>
								</li>
								<li>
									<div>
										<span>11/03/2011</span>
										<p>
											Donec dictum semper augue, ut consectetur magna.
										</p>
									</div>
								</li>
								<li>
									<div>
										<h3>Archives</h3>
										<ul>
											<li>
												<a href="#">January 2012</a>
											</li>
											<li>
												<a href="#">December 2011</a>
											</li>
											<li>
												<a href="#">November 2011</a>
											</li>
											<li>
												<a href="#">October 2011</a>
											</li>
											<li>
												<a href="#">September 2011</a>
											</li>
											<li>
												<a href="#">August 2011</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
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