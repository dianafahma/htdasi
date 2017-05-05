<div class="clearfix"></div>
			<div class="blog-main-content">		
				<div class="col-md-9 total-news">
					
	<div class="grids">
		<div class="grid box">
			<div class="grid-header">
				<a class="gotosingle" href="singlepage.html"><?php echo $detail_berita->judul;?></a>
				<ul>
				<li><span>Post by<a href="#"> Berita Kota Makassar</a></span></li>
				<li><a href="#"><?php echo $detail_berita->tanggal;?></a></li>
				</ul>
			</div>
			<div class="singlepage">
			<?php 
				foreach($list_gambar->result() as $row){
			?>
							<a href="#"><img src="<?php  echo base_url().$row->path_folder ; ?>" width="100" height="500"/></a>
			<?php } ?>
							<p><?php echo $detail_berita->isi;?><a href="#"></a></p>
							<div class="clearfix"> </div>
						</div>
		</div>
	</div>
	
			</div>	
				
				<div class="col-md-3 side-bar">
					<div class="l_g_r">
									<div class="posts">
										<h4>Kategori</h4>
										<h6><?php echo anchor('c_berita/kategori1','Hiburan')?></h6>
										<h6><?php echo anchor('c_berita/kategori2','Politik')?></h6>
										<h6><?php echo anchor('c_berita/kategori3','Kriminal')?></h6>
										<h6><?php echo anchor('c_berita/kategori4','Teknologi')?></h6>
										<h6><?php echo anchor('c_berita/kategori5','Bisnis')?></h6>
										<h6><?php echo anchor('c_berita/kategori6','Internasional')?></h6>
									</div>
									<div class="recent-comments">
										<h4>Berita Populer</h4>
										<?php
											$i=1;
											foreach ($detail_berita2->result() as $row){
										?>
										<h6><a href="<?php echo base_url()?>index.php/c_berita/view_detail/<?php echo $row->id?>"><span># </span><?php echo $row->judul; ?></a></h6>
										<?php $i++; } ?>
									</div>				

								</div>
				</div>
				<div class="clearfix"></div>
			</div>