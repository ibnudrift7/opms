<div class="subpage_product">
    <section class="default_sc blocks_bannerBox_home back-whiteimp" id="block_homesection">
        <div class="clear height-20"></div>
        <div class="prelatife container defaults">
            <div class="bloc_breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 bg-white">
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>">HOME</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Berita & Acara') ?></a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="py-4"></div>
        <div class="in_box_product back-white">
            <div class="prelatife container defaults">

                <div class="insides customs_pg_memberside pg_care content-text text-center d-block mx-auto maw1265">
                    <!-- start content -->
                    <h4 class="small"><?php echo Tt::t('front', 'Berita & Acara') ?></h4>
                    <div class="py-3"></div>
                    <h2 class="title"><?php echo $data->description->title; ?></h2>
                    <span class="dates"><i class="fa fa-calendar"></i> &nbsp;<?php echo date("d F Y", strtotime($data->date_input)); ?></span>
                    <div class="py-4"></div>

                    <div class="pictures">
                        <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl . '../../images/blog/'; ?><?php echo $data->image ?>" alt="<?php echo $data->description->title ?>">
                    </div>
                    <div class="py-3 my-1"></div>

                    <div class="maw950 d-block mx-auto">
                        <?php echo $data->description->content; ?>

                        <div class="py-3"></div>
                        <div class="text-center">
                            <a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang' => Yii::app()->language)); ?>" class="btn btn-default btn-link view_articles"><i class="fa fa-chevron-left"></i> <?php echo Tt::t('front', 'Kembali') ?></a>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>
                </div>
                <!-- end insides -->

            </div>
            <div class="py-5 my-3"></div>
        </div>
    </section>
</div>