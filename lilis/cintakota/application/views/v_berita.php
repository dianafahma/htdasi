<title>Berita Terupdate</title><div class="clearfix"></div>
<div class="clearfix"></div>
			<div class="main-content">		
				<div class="col-md-9 total-news">
					<div class="videos">
					<div class="live-market">
						<div class="main-title-head">
							<h5>berita Teratas</h5>
							<div class="clearfix"></div>
						</div>
						<?php
						$i=1;
						foreach ($list_foto->result() as $row)
						{ 

							if ($row->publish==1) {
									$foto = $this->m_berita->get_gambar($row->id)->path_folder;

						?>
						<div class="bull">
						<a href="<?php echo base_url()?>index.php/c_berita/view_detail/<?php echo $row->id?>"><img src="<?php echo base_url().$foto ; ?>" width="110" height="260" alt="" /></a>
						</div>
						<?php }} ?>
						<div class="bull-text">
								<i><?php $date=$row->tanggal; echo $tanggal_berita=date('d M Y', strtotime($date));?></i><br>
							<a class="bull1"><?php echo $row->judul; ?></a>
							<p><?php echo substr($row->isi,0,280); ?>...</p>
						</div>
					</div>
						<div class="clearfix">
							<div class="clearfix"></div>
						<?php echo anchor ('c_berita/view_detail/'.$row->id, '<div class="more1">Baca Berita</div>');?></div>
					</div>
					
					<div class="subscribe-now">
					</div>
				<div class="posts">
					<div class="">
						<div class="world-news">
							<div class="main-title-head">
								<h3>Berita Terhangat</h3>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<div class="world-news-grids">
							<?php
								$i=1;
								foreach ($list_berita->result() as $row)
								{ if ($row->publish==1) {
									//$foto[$i] = $list_gambar[$i]->path_folder;
									$foto = $this->m_berita->get_gambar($row->id)->path_folder;
							?>
								<div class="world-news-grid jarak" >
									<img src="<?php echo base_url().$foto ; ?>" width="145" height="130" alt="" />
									<a class="title2"><?php echo substr($row->judul,0,30); ?>...
									<p><i><?php echo substr($row->isi,0,70); ?>...</i></p></a>
									<!--<div class="main-title-head">-->
								<!--<a class="more1" href="<?php echo site_url('c_berita/view_detail/').$row->id;?>">Read More</a>-->
						
								<?php echo anchor ('c_berita/view_detail/'.$row->id, '<div class="main-title-head"><div class="more1">Baca Berita</div></div>');?>
								
								<!--</div>-->
								</div>
								<?php $i++;
								}}?>
						</div>
								<div class="clearfix"></div>
							</div>
								<div class="clearfix"></div>
							</div>
						</div>
				
			
					<div class="right-posts">
						
						
						
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
					<div class="sign_up">
					<div class="popular">
						<div class="main-title-head">
							<h5>berita popular</h5>
							<h4> Most    read</h4>
							<div class="clearfix"></div>
						</div>		
						<div class="popular-news">
						<?php
										$i=1;
										foreach ($list_berita->result() as $row)
										{ if ($row->publish==1) {
											$foto[$i] = $list_gambar[$i]->path_folder;
									?>
							<div class="popular-grid">
								<i><?php $date=$row->tanggal; echo $tanggal_berita=date('d M Y', strtotime($date));?></i>
								<p><?php echo $row->judul; ?><?php echo anchor ('c_berita/view_detail/'.$row->id, '  Baca Berita');?></p>
							</div>
							<?php $i++; }} ?>
						</div>
					</div>
					</div>
					<div class="subscribe-now">
						<div class="discount">
							<a href="#">
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