<section class="cover-insides karir" style="background-image: url(<?php echo Yii::app()->baseUrl . ImageHelper::thumb(1920, 539, '/images/static/' . $this->setting['career_hero_image'], array('method' => 'adaptiveResize', 'quality' => '90')) ?>) !important; background-size: cover !important;">
    <div class="begrond">
        <div class="prelative container">
            <div class="teks">
                <div class="row">
                    <div class="col-md-60">
                        <h1 class="teks-cover"><?php echo Tt::t('front', 'karir') ?></h1>
                    </div>
                    <div class="col-md-60">
                        <div class="teks">
                            <?php echo $this->setting['career_hero_subtitle'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="career-sec-2">
    <div class="prelative container">
        <div class="title-head">
            <div class="avail">
                <?php if (Yii::app()->language == 'en') : ?>
                    <p>POSITION AVAILABLE AT PT. OPTIMA PRIMA METAL SINERGI</p>
                <?php else : ?>
                    <p>POSISI TERSEDIA DI PT. OPTIMA PRIMA METAL SINERGI</p>
                <?php endif ?>
            </div>
        </div>

        <div class="hr-career"></div>
        <?php
        foreach ($model as $key => $value) { ?>
            <div class="title-pos">
                <?php if (Yii::app()->language == 'en') : ?>
                    <p><?= $value->position_en ?></p>
                <?php else : ?>
                    <p><?= $value->position ?></p>
                <?php endif ?>
            </div>
            <div class="row pb-5">
                <div class="col-md-20">
                    <div class="desc pr-3">
                    </div>
                    <div class="work">
                        <?php if (Yii::app()->language == 'en') : ?>
                            <p>Work Locations:</p>
                        <?php else : ?>
                            <p>Lokasi Kerja:</p>
                        <?php endif ?>
                        <p><?= $value->location ?></p>
                    </div>
                    <div class="work">
                        <?php if (Yii::app()->language == 'en') : ?>
                            <p>Email to apply for this job:</p>
                        <?php else : ?>
                            <p>Email untuk melamar pekerjaan ini:</p>
                        <?php endif ?>
                        <p>career@opms.co.id</p>
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="heading-col">
                        <p><?php echo Tt::t('front', 'job description') ?></p>
                    </div>
                    <div class="req">
                        <?php if (Yii::app()->language == 'en') : ?>
                            <?= $value->job_description_en ?>
                        <?php else : ?>
                            <?= $value->job_description_id ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-md-20">
                    <div class="heading-col">
                        <p><?php echo Tt::t('front', 'qualifications') ?></p>
                    </div>
                    <div class="req">
                        <?php if (Yii::app()->language == 'en') : ?>
                            <?= $value->qualifications_en ?>
                        <?php else : ?>
                            <?= $value->qualifications_id ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="hr-career"></div>
        <?php
        } ?>

    </div>
</section>