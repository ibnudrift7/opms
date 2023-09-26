<section class="cover-insides layanan" style="background-image: url(<?php echo Yii::app()->baseUrl . ImageHelper::thumb(1920, 539, '/images/static/' . $this->setting['service_hero_image'], array('method' => 'adaptiveResize', 'quality' => '90')) ?>) !important; background-size: cover !important;">
    <div class="begrond">
        <div class="prelative container">
            <div class="teks">
                <div class="row">
                    <div class="col-md-60">
                        <h1 class="teks-cover"><?php echo $this->setting['service_hero_title'] ?></h1>
                    </div>
                    <div class="col-md-60">
                        <div class="teks"><?php echo $this->setting['service_hero_subtitle'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layanan-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="title">
                    <p><?php echo $this->setting['service1_title'] ?></p>
                </div>
                <div class="konten">
                    <?php echo $this->setting['service1_content'] ?>
                </div>
                <div class="konten">
                    <?php echo $this->setting['service1_content2'] ?>
                </div>
            </div>

            <div class="col-md-30">
                <!-- <div class="row">
                    <div class="col-md-30">
                        <div class="box-content">
                            <div class="image"><img  class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>pink.png" alt=""></div>
                        </div>
                    </div>

                    <div class="col-md-30">
                        <div class="box-content">
                            <div class="image"><img  class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>pink.png" alt=""></div>
                        </div>
                    </div>

                    <div class="col-md-30">
                        <div class="box-content">
                            <div class="image"><img  class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>pink.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-md-30">
                        <div class="box-content">
                            <div class="image"><img  class="img img-fluid w-100" src="<?php echo $this->assetBaseurl; ?>pink.png" alt=""></div>
                        </div>
                    </div>
                </div> -->
                <div class="box-content-right">
                    <div class="image">
                        <img class="w-100" src="<?php echo Yii::app()->baseUrl . '/images/static/' . $this->setting['service1_image1'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layanan-sec-2">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60">

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
            <!-- <div class="col-md-12 col-30">
                <div class="box-content">
                <div class="image"><img src="<?php echo $this->assetBaseurl; ?>img5.png" alt=""></div>
                    <div class="title">
                        <p>Ship Spareparts</p>
                    </div>
                    <div class="subtitle">
                        <p>Sparepart Kapal</p>
                    </div>
                </div>

            </div> -->


        </div>
    </div>
</section>

<section class="layanan-sec-3">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="image"><img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl . '/images/static/' . $this->setting['service2_image_1'] ?>" alt=""></div>
            </div>
            <div class="col-md-30">
                <div class="box-content">
                    <div class="title">
                        <p><?php echo $this->setting['service2_title_1'] ?></p>
                    </div>
                    <div class="konten">
                        <?php echo $this->setting['service2_contents_1'] ?>
                    </div>
                    <!-- <div class="konten">
                        <h5>QUALITY SERVICE</h5>
                        <p>With a solid experience and team, we have the ability and resources to tailor your requests / needs wherever you are. We also have a network and have collaborated with many suppliers of used iron and ship materials. Over time, we always strive to improve the quality of the resources we have including good and long-term cooperation relationships with all parties, which ultimately, provide optimal benefits for all parties.</p>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="bawah row">
            <div class="col-md-30">
                <div class="box-content">
                    <div class="title">
                        <p><?php echo $this->setting['service2_title_2'] ?></p>
                    </div>
                    <div class="konten">
                        <?php echo $this->setting['service2_contents_2'] ?>
                    </div>
                </div>
            </div>
            <div class="col-md-30">
                <div class="image"><img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl . '/images/static/' . $this->setting['service2_image_2'] ?>" alt=""></div>

            </div>
        </div>

    </div>
    </div>
</section>

<?php echo $this->renderPartial('//layouts/_layform_bottom', array()); ?>