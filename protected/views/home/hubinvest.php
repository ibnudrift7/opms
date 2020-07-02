<section class="cover-insides hubinvest">
    <div class="begrond">
        <div class="prelative container">
                <div class="teks">
                    <div class="row">
                        <?php if (Yii::app()->language == 'en'): ?>
                        <div class="col-md-60">
                            <h1 class="teks-cover">investor relations</h1>
                        </div>
                        <div class="col-md-60 ">
                            <div class="teks">Get closer to the latest information at PT. Optima Prima Metal Sinergi at this time.</div>
                        </div>    
                        <?php else: ?>
                        <div class="col-md-60">
                            <h1 class="teks-cover">hubungan investor</h1>
                        </div>
                        <div class="col-md-60 ">
                            <div class="teks">Lebih dekat dengan berbagai informasi terkini di PT. Optima Prima Metal Sinergi saat ini.</div>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="hub-investor-sec-1">
    <div class="prelative container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-30">
                <div class="box-content-dalam">
                    <div class="image">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category'=> 1, 'sub'=> 4)); ?>">
                        <img class="" src="<?php echo $this->assetBaseurl; ?>hub11.png" alt="">
                        </a>
                    </div>
                    <div class="title">
                        <p><?php echo Tt::t('front', 'INFORMASI INVESTOR') ?></p>
                    </div>
                    <div class="lebih">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category'=> 1, 'sub'=> 4)); ?>">
                            <p><?php echo Tt::t('front', 'Lihat Lebih Lanjut'); ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-30">
                <div class="box-content-dalam">
                <div class="image">
                    <a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category'=>2, 'sub'=> 8)); ?>">
                    <img src="<?php echo $this->assetBaseurl; ?>hub12.png" alt="">
                    </a>
                </div>
                    <div class="title">
                        <p><?php echo Tt::t('front', 'INFORMASI FINANSIAL') ?></p>
                    </div>
                    <div class="lebih">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category'=>2, 'sub'=> 8)); ?>">
                            <p><?php echo Tt::t('front', 'Lihat Lebih Lanjut'); ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-30">
                <div class="box-content-dalam">
                <div class="image">
                    <a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category'=>3, 'sub'=> 10)); ?>">
                    <img src="<?php echo $this->assetBaseurl; ?>hub14.png" alt="">
                    </a>
                </div>
                    <div class="title">
                        <p><?php echo Tt::t('front', 'TATA KELOLA PERUSAHAAN') ?></p>
                    </div>
                    <div class="lebih">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category'=>3, 'sub'=> 10)); ?>">
                            <p><?php echo Tt::t('front', 'Lihat Lebih Lanjut'); ?></p>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php echo $this->renderPartial('//layouts/_layform_bottom', array()); ?>

<style type="text/css">
    section.cover-insides{
        background-repeat: no-repeat; 
    }
</style>