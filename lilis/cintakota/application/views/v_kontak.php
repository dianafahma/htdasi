<title>Kontak Perusahaan</title><div class="clearfix"></div>
<div class="clearfix"></div>
			<div class="main-content">		
				<div class="contact-section">
				<?php echo form_open_multipart('c_kontak/tambah');?>
					<div class="contact-section-head">
						<h3>Contact us</h3>
					</div>
					<div class="map">
						<iframe src="<?php echo base_url(); ?>cssweb/images/map.png" frameborder="0" width="200" style="border:0"></iframe>
					</div>
					<div class="contact-form-bottom">
						<div class="col-md-4 address">
							<address>
								<h5>Address:</h5>
								<p>Berita Kota Makassar</p>
								<p>Jln. Uri Sumoharjo No.20 Makassar)</p>
								<p class="bottom">(Gedung Graha Pena Makassar, Lantai 3</p>
								<h5>Phone:</h5>
								<p> (0411) 451313 </p>
								<p>  Iklan (12), Sirkulasi (17), Redaksi (16). Personalia /Umum (14). Keuangan (13) </p>
							</address>
						</div>
						<div class="col-md-4 contact-form">
						<form>
								<div class="contact-form-row">
									<div>
										<span>Name</span>
										<?php echo form_input(array('id'=>'nama','name'=>'nama','class'=>'text')); ?>
									</div>
									<div>
										<span>Email</span>
										<?php echo form_input(array('id'=>'email','name'=>'email','class'=>'text')); ?>
									</div>
									<div class="clearfix"> </div>
								</div>
						</form>
					</div>
					<div class="col-md-4 contact-form-row ccomments">
						<div>
							<span>Enter text</span>
							<?php echo form_textarea(array('id'=>'kritis','name'=>'kritis','class'=>'text')); ?>
						</div>
		<b onclick="return confirm('Pesan Anda Akan di kirim ! Terima Kasih Atas Kritik dan Saran Anda');">
						<?php echo form_submit('submit','Kirim','id="submit"')?></b>
					</div>
						<?php echo form_close();?>
					<div class="clearfix"></div>
				</div>
		</div>
			</div>