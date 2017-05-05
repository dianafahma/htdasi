<title>News</title><div class="clearfix"></div>
			<div class="main-content">		
				<div class="col-md-9 total-news">
				
				<section class="slider">
							<div class="flexslider">
							  <ul class="slides">
							  <?php
								$i=1;
								foreach ($list_breaking->result() as $row)
								{ if ($row->publish==1) {
									$foto[$i] = $list_gambar[$i]->path_folder;
							?>
								<li>
									<a href="<?php echo base_url()?>index.php/c_berita/view_detail/<?php echo $row->id?>"><img src="<?php echo base_url().$foto[$i] ; ?>" width="790" height="330" alt="" /></a>
									</li>
							  </ul>
							<div class="breaking-news-title">
								<p><?php echo substr($row->isi,0,200); ?>...</p>
								<!--<p><?php echo $row->isi; ?></p>-->
								<?php }} ?>
							</div>
							</div>
						<h5 class="breaking">Breaking news</h5>
						  </section>
						  <!-- FlexSlider -->
						  <script defer src="js/jquery.flexslider.js"></script>
						  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						  <script type="text/javascript">
							$(function(){
							  SyntaxHighlighter.all();
							});
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
				
					
				<div class="posts">
					<div class="left-posts">
						<div class="world-news">
							<div class="main-title-head">
								<h3>Berita Terkini</h3>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
							<?php
								$i=1;
								foreach ($list_berita->result() as $row)
								{ if ($row->publish==1) {
									$foto[$i] = $list_gambar[$i]->path_folder;
							?>
								<div class="world-news-grid jarak" >
									<img src="<?php echo base_url().$foto[$i] ; ?>" width="145" height="100" alt="" />
									<a class="title2"><?php echo substr($row->judul,0,30); ?>...
									<p><i><?php echo substr($row->isi,0,70); ?>...</i></p></a>
									<?php echo anchor ('c_berita/view_detail/'.$row->id, '<div class="main-title-head"><div class="more1">Baca Berita</div></div>');?>
								</div>
								<?php $i++;
								}}?>
								<!--<div class="world-news-grid">
									<img src="cssweb/images/n2.jpg" alt="" />
									<a  class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<img src="cssweb/images/n3.jpg" alt="" />
									<a  class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>-->
								<div class="clearfix"></div>
							</div>
						</div>
						
						  <div class="sports-top">
							<div class="s-grid-left">
								<div class="cricket">
									<h3>Hiburan</h3>
									<div class="c-sports-main">
									<?php
										$i=1;
										foreach ($list_hiburan->result() as $row)
										{ if ($row->publish==1) {
									$foto = $this->m_berita->get_gambar($row->id)->path_folder;
									?>
											<div class="c-image">
												<a><img src="<?php echo base_url().$foto ; ?>" width="180" height="90" alt="" /></a>
											</div>
											<div class="c-text">
												<p><?php echo $row->kgr_judul; ?></p>
												<a class="power"><?php echo $row->judul; ?></a>
											<div class="editor">
												<i><?php echo anchor ('c_berita/view_detail/'.$row->id, 'Selengkapnya');?></i>
											</div>
											</div>
											<?php $i++; }} ?>
											<div class="clearfix"></div>
										</div>
										<?php echo anchor('c_berita/kategori1','<div class="more1">Lebih Banyak +</div>')?>
									</div>
								</div>
							<div class="s-grid-right">
								<div class="cricket">
									<h3>Politik</h3>
									<div class="c-sports-main">
									<?php
										$i=1;
										foreach ($list_politik->result() as $row)
										{ if ($row->publish==1) {
									$foto = $this->m_berita->get_gambar($row->id)->path_folder;
									?>
											<div class="c-image">
												<a><img src="<?php echo base_url().$foto ; ?>" width="180" height="90" alt="" /></a>
											</div>
											<div class="c-text">
												<p><?php echo $row->kgr_judul; ?></p>
												<a class="power"><?php echo $row->judul; ?></a>
												<div class="editor">
												<i><?php echo anchor ('c_berita/view_detail/'.$row->id, 'Selengkapnya');?></i>
											</div>
											</div>
											<?php $i++; }} ?>
											<div class="clearfix"></div>
										</div><?php echo anchor('c_berita/kategori4','<div class="more1">Lebih Banyak +</div>')?>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sports-top">
							<div class="s-grid-left">
								<div class="cricket">
									<h3>Kriminal</h3>
									<div class="c-sports-main">
									<?php
										$i=1;
										foreach ($list_kriminal->result() as $row)
										{ if ($row->publish==1) {
									$foto = $this->m_berita->get_gambar($row->id)->path_folder;
									?>
											<div class="c-image">
												<a><img src="<?php echo base_url().$foto ; ?>" width="180" height="90" alt="" /></a>
											</div>
											<div class="c-text">
												<p><?php echo $row->kgr_judul; ?></p>
												<a class="power"><?php echo $row->judul; ?></a>
												<div class="editor">
												<i><?php echo anchor ('c_berita/view_detail/'.$row->id, 'Selengkapnya');?></i>
											</div>
											</div>
											<?php $i++; }} ?>
											<div class="clearfix"></div>
										</div><?php echo anchor('c_berita/kategori3','<div class="more1">Lebih Banyak +</div>')?>
									</div>
								</div>
							<div class="s-grid-right">
								<div class="cricket">
									<h3>Bisnis</h3>
									<div class="c-sports-main">
									<?php
										$i=1;
										foreach ($list_bisnis->result() as $row)
										{ if ($row->publish==1) {
									$foto = $this->m_berita->get_gambar($row->id)->path_folder;
									?>
											<div class="c-image">
												<a><img src="<?php echo base_url().$foto ; ?>" width="180" height="90" alt="" /></a>
											</div>
											<div class="c-text">
												<p><?php echo $row->kgr_judul; ?></p>
												<a class="power"><?php echo $row->judul; ?></a>
												<div class="editor">
												<i><?php echo anchor ('c_berita/view_detail/'.$row->id, 'Selengkapnya');?></i>
											</div>
											</div>
											<?php $i++; }} ?>
											<div class="clearfix"></div>
										</div>
									</div>
									<?php echo anchor('c_berita/kategori5','<div class="more1">Lebih Banyak +</div>')?>
								</div>
								<div class="clearfix"></div>
							</div>
						
					</div>
					<div class="right-posts">
						<div class="desk-grid">
							<h3>Internasional</h3>
							<?php
										$i=1;
										foreach ($list_internasional->result() as $row)
										{ if ($row->publish==1) {
									$foto = $this->m_berita->get_gambar($row->id)->path_folder;
									?>
							<div class="desk">
								<a  class="title"><?php echo $row->judul; ?></a>
								<p><?php echo substr($row->isi,0,70); ?>...</p>
								<p><?php echo anchor ('c_berita/view_detail/'.$row->id, 'Baca Berita');?><span><?php $date=$row->tanggal; echo $tanggal_berita=date('d M Y', strtotime($date));?></span></p>
							</div>
							<?php $i++; }} ?>
							<?php echo anchor('c_berita/kategori1','<div class="more1">Lebih Banyak +</div>')?>
						</div>
						<div class="editorial">
							<h3>Teknologi</h3>
							<?php
										$i=1;
										foreach ($list_teknologi->result() as $row)
										{ if ($row->publish==1) {
									$foto = $this->m_berita->get_gambar($row->id)->path_folder;
									?>
							<div class="editor">
							<a href="<?php echo base_url()?>index.php/c_berita/view_detail/<?php echo $row->id?>"><img src="<?php echo base_url().$foto ; ?>" width="231" height="122" alt="" /></a>
								<a><?php echo $row->judul; ?></a>
							</div>
							<?php $i++; }} ?>
						</div>
					</div>
					<div class="clearfix"></div>	
				</div>
				</div>	
				<div class="col-md-3 side-bar">
					<div class="videos">
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<a class="more1" href="single.html">More  +</a>
						<div class="clearfix"></div>
					</div>
					<div class="sign_up text-center">
						<h3>Profil Perusahaan</h3>
						<img src="<?php echo base_url();?>images/fajar.jpg" width="200" height="250" />
						<form>
							Pembina: <p>
					M. Alwi Hamu, H. Syamsu Nur<br>
					Komisaris Utama: <p>H. Zulkifli Gani Ottoh.<br>
					Komisaris: <p>Truitje Musila, Subhan Hamu.<br>
					Penerbit: PT. Berita Kota Makassar<br>
							<center><?php echo anchor('c_home/displayProfil','<div class="masuk">Read More</div>')?></center>
						</form>
					</div>
					<div class="clearfix"></div>
					<div class="popular">
						<div class="main-title-head">
							<h5>berita popular</h5>
							<h4> Most    read</h4>
							<div class="clearfix"></div>
						</div>		
						<div class="popular-news">
						<?php
										$i=1;
										foreach ($list_populer->result() as $row)
										{ if ($row->publish==1) {
											$foto[$i] = $list_gambar[$i]->path_folder;
									?>
							<div class="popular-grid">
								<i><?php $date=$row->tanggal; echo $tanggal_berita=date('d M Y', strtotime($date));?></i>
								<p><?php echo $row->judul; ?><?php echo anchor ('c_berita/view_detail/'.$row->id, ' Baca Berita');?></p>
							</div>
							<?php $i++; }} ?>
							
						</div>
					</div>
					<div class="subscribe-now">
						<div class="discount">
							<a>
								<div class="save">
									<p>Save</p>
									<p>upto</p>
								</div>
								<div class="percent">
									<h2>50%</h2>
								</div>
								<div class="clearfix"></div>
						</div>						
						<h3 class="sn">subscribe     now</h3>
							</a>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="clearfix"></div>
			</div>