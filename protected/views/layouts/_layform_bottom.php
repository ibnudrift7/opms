<section class="home-sec-3">
	<div class="prelative container2">
		<div class="row">
			<div class="col-md-35">
                <?php if (Yii::app()->language == 'en'): ?>
                <div class="title">
                    <h3>INQUIRY OF USED IRON SALES & PURCHASES</h3>
                    <h4>Service Estimator PT. Optima Prima Metal Sinergi Will Be Ready to Help You</h4>
                </div>
                <div class="subtitle">
					<table>
						<tr>
							<td>CONTACT OUR HOTLINE</td>
							<td><img src="<?php echo $this->assetBaseurl; ?>WA-Logo.png" alt=""></td>
							<td><a href="http://wa.me/6282143031695">0821 4303 1695 (phone & wa)</a></td>
						</tr>
					</table>
					<table>
						<tr>
							<td>CONTACT OUR ESTIMATOR</td>
							<td><img src="<?php echo $this->assetBaseurl; ?>WA-Logo.png" alt=""></td>
							<td><a href="http://wa.me/6282143031697">0821 4303 1697 (phone & wa)</a></td>
						</tr>
					</table>
                </div>
                <div class="garis-formhome"></div>
                <div class="atau">
                    <p>Or leave your contact information, we will contact you...</p>
                </div>    
                <?php else: ?>
				<div class="title">
					<h3>INKUIRI PENJUALAN & PEMBELIAN BESI BEKAS</h3>
					<h4>Layanan Estimator PT. Optima Prima Metal Sinergi Akan Siap Membantu Anda</h4>
				</div>
				<div class="subtitle">
					<table>
						<tr>
							<td>HUBUNGI HOTLINE KAMI</td>
							<td><img src="<?php echo $this->assetBaseurl; ?>WA-Logo.png" alt=""></td>
							<td><a href="http://wa.me/6282333112268">0823 3311 2268 (phone & wa)</a></td>
						</tr>
					</table>
					<table>
						<tr>
							<td>HUBUNGI ESTIMATOR KAMI</td>
							<td><img src="<?php echo $this->assetBaseurl; ?>WA-Logo.png" alt=""></td>
							<td><a href="http://wa.me/6281331330008">0813 3133 0008 (phone & wa)</a></td>
						</tr>
					</table>
<!--					<p>HUBUNGI HOTLINE KAMI <span><img src="--><?php //echo $this->assetBaseurl; ?><!--WA-Logo.png" alt="">0823 3311 2268 (phone & wa)</span></p>-->
				</div>
				<div class="garis-formhome"></div>
				<div class="atau">
					<p>Atau tinggalkan informasi kontak anda, kami akan menghubungi anda...</p>
				</div>
                <?php endif ?>

				<form method="post" action="<?php echo CHtml::normalizeUrl(array('/home/hubungi')); ?>">
					<div class="form-row">
						<div class="form-group col-md-20">
							<label for="">name</label>
							<input type="text" class="form-control" id="" name="ContactForm[name]" required>
						</div>
						<div class="form-group col-md-20">
							<label for="">telephone</label>
							<input type="text" class="form-control" id="" name="ContactForm[phone]" required>
						</div>
						<div class="form-group col-md-20">
							<label for="inputEmail4">Email</label>
							<input type="email" class="form-control" id="inputEmail4" name="ContactForm[email]" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-50">
                            <?php if (Yii::app()->language == 'en'): ?>
                            <p>Optima Prima Metal Sinergi representative staff will immediately contact you again</p>    
                            <?php else: ?>
							<p>Staf perwakilan Optima Prima Metal Sinergi akan segera menghubungi anda kembali</p>
                            <?php endif ?>
						</div>
						<div class="form-group col-md-10">
							<button type="submit">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-25">
			</div>
		</div>
	</div>
</section>
