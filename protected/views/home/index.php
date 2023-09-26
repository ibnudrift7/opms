<section class="home-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60">
                <div class="judul">
                    <p><?php echo $this->setting['home1_small_title'] ?></p>
                </div>
                <div class="caption text-center">
                    <p><?php echo $this->setting['home1_subtitle'] ?></p>
                </div>
                <div class="subjudul">
                    <p><?php echo $this->setting['home1_small_title2'] ?></p>
                </div>
            </div>
            <?php for ($i = 1; $i < 4; $i++) {  ?>
                <div class="col-md-20">
                    <div class="box-content">
                        <div class="image">
                            <img class="img img-fluid" src="<?php echo Yii::app()->baseUrl . '/images/static/' . $this->setting['home1_items_icon_' . $i] ?>" alt="">
                        </div>
                        <div class="title">
                            <p><?php echo $this->setting['home1_items_title_' . $i] ?></p>
                        </div>
                        <div class="subtitle">
                            <p><?php echo $this->setting['home1_items_desc_' . $i] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="home-sec-2">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60">
                <div class="judul">
                    <p><?php echo $this->setting['home2_small_title'] ?></p>
                </div>
                <div class="caption">
                    <p><?php echo $this->setting['home2_subtitle'] ?></p>
                </div>
                <div class="subjudul">
                    <p><?php echo $this->setting['home2_small_title2'] ?></p>
                </div>
            </div>
            <?php for ($i = 1; $i < 6; $i++) {  ?>
                <div class="col-md-12 col-30">
                    <div class="box-content">
                        <div class="image"><img src="<?php echo Yii::app()->baseUrl . ImageHelper::thumb(144, 144, '/images/static/' . $this->setting['home2_items_icon_' . $i], array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt=""></div>
                        <div class="title">
                            <p><?php echo $this->setting['home2_items_title_' . $i] ?></p>
                        </div>
                        <div class="subtitle">
                            <p><?php echo $this->setting['home2_items_info_' . $i] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="button">
                <button class="form-control button-red"><a href="<?php echo CHtml::normalizeUrl(array('/home/layanan', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'PELAJARI LEBIH LANJUT') ?></a></button>

            </div>

        </div>
    </div>
</section>

<?php echo $this->renderPartial('//layouts/_layform_bottom', array()); ?>

<section class="home-sec-4">
    <div class="prelative container">
        <div class="image"><img src="<?php echo $this->assetBaseurl; ?>opms-logo.png" alt=""></div>
        <p class="subtitle">
            Your trusted partner to sell & buy quality scrap iron.
        </p>
        <p class="surabaya">SURABAYA</p>
        <div class="info">
            <p>Jl Margomulyo Permai Blok AC no 10, Surabaya.</p>
            <p><?php echo Tt::t('front', 'Telp') ?>. (031) 7495673 Fax. (031) 7490073</p>
            <p><b>Whatsapp Hotline. <a href="http://wa.me/6282333112268">0823 3311 2268</a></b></p>
            <p>Email. <a href="mailto:marketing@opms.co.id">marketing@opms.co.id</a></p>
        </div>
    </div>
</section>

<section class="home-sec-5">
    <div class="prelative container">
        <p>PT. Optima Prima Metal Sinergi - Penjualan pembelian besi & kapal bekas berkualitas</p>
        <!-- <br>Website design by <a class="markdesign"href="https://www.markdesign.net">Mark Design Indonesia.</a> -->
    </div>
</section>