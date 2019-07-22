<section class="home-sec-3">
	<div class="prelative container2">
		<div class="row">
			<div class="col-md-35">
                <?php if (Yii::app()->language == 'en'): ?>
                <div class="title">
                    <h3>INQUIRY OF USED IRON SALES & PURCHASES</h3>
                    <h4>Service Estimator PT. OPMS Will Be Ready to Help You</h4>
                </div>
                <div class="subtitle">
                    <p>CONTACT OUR HOTLINE <span><img src="<?php echo $this->assetBaseurl; ?>WA-Logo.png" alt="">0851 0212 3698 (phone & wa)</span></p>
                </div>
                <div class="garis-formhome"></div>
                <div class="atau">
                    <p>Or leave your contact information, we will contact you...</p>
                </div>    
                <?php else: ?>
				<div class="title">
					<h3>INKUIRI PENJUALAN & PEMBELIAN BESI BEKAS</h3>
					<h4>Layanan Estimator PT. OPMS Akan Siap Membantu Anda</h4>
				</div>
				<div class="subtitle">
					<p>HUBUNGI HOTLINE KAMI <span><img src="<?php echo $this->assetBaseurl; ?>WA-Logo.png" alt="">0851 0212 3698 (phone & wa)</span></p>
				</div>
				<div class="garis-formhome"></div>
				<div class="atau">
					<p>Atau tinggalkan informasi kontak anda, kami akan menghubungi anda...</p>
				</div>
                <?php endif ?>

				<form method="post" action="#" onsubmit="javascript: alert('underconstruction'); return false;">
					<div class="form-row">
						<div class="form-group col-md-20">
							<label for="">name</label>
							<input type="text" class="form-control" id="" placeholder="">
						</div>
						<div class="form-group col-md-20">
							<label for="">telephone</label>
							<input type="text" class="form-control" id="" placeholder="">
						</div>
						<div class="form-group col-md-20">
							<label for="inputEmail4">Email</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="">
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
							<button class="">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-25">
			</div>
		</div>
	</div>
</section>