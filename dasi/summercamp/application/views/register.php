<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Register - Summer Camp Website Template</title>
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
				<li class="selected">
					<a href=""<?php echo base_url().'index.php/c_camp/view_about'?>""><span>A</span>bout</a>
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
		<div class="register">
			<div>
				<div>
					<div class="register">
						<h2>BE A CAMPER TODAY!</h2>
						<form action="index.php">
							<div>
								<table>
									<tr>
										<td><label for="name"><span>N</span>ame:</label></td>
										<td><input type="text" id="name"></td>
									</tr>
									<tr>
										<td><label for="email"><span>E</span>mail <span>A</span>ddress:</label></td>
										<td><input type="text" id="email"></td>
									</tr>
									<tr>
										<td><label for="tel-number"><span>T</span>el. <span>N</span>umber:</label></td>
										<td><input type="text" id="tel-number"></td>
									</tr>
									<tr>
										<td><label for="address"><span>A</span>ddress:</label></td>
										<td><textarea name="address" id="address" cols="30" rows="10"></textarea></td>
									</tr>
									<tr>
										<td><label for="duration"><span>D</span>uration:</label></td>
										<td><input type="text" id="duration"></td>
									</tr>
									<tr>
										<td><label for="num-of-children"><span>N</span>umber <span>o</span>f <span>C</span>hildren:</label></td>
										<td><input type="text" id="num-of-children"></td>
									</tr>
									<tr>
										<td><label for="name-of-child"><span>N</span>ame <span>o</span>f <span>C</span>hild:</label></td>
										<td ><input type="text" id="name-of-child"></td>
										<td><label for="age" class="age"><span>A</span>ge:</label></td>
										<td><input type="text" id="age" maxlength="2"></td>
									</tr>
									<tr>
										<td><a href="#"><img src="images/button-plus.png" alt=""></a></td>
									</tr>
								</table>
								<input type="submit" id="submit" value="Register">
							</div>
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