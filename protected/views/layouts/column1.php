<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>


<!-- Start fcs -->
<?php
    $criteria=new CDbCriteria;
    $criteria->with = array('description');
    $criteria->addCondition('description.language_id = :language_id');
    $criteria->addCondition('active = 1');
    $criteria->params[':language_id'] = $this->languageID;
    $criteria->group = 't.id';
    $criteria->order = 't.id ASC';
    $slide = Slide::model()->with(array('description'))->findAll($criteria);

?>
  <div class="fcs-wrapper outers_fcs_wrapper prelatife wrapper-slide">
    <div class="container cont-fcs">
        <div id="myCarousel_home" class="carousel slide" data-ride="carousel" data-interval="4500">
            <div class="carousel-inner">
                <div class="carousel-item active home-slider-new">
                    <img class="w-100 d-none d-sm-block" src="<?php echo $this->assetBaseurl; ?>Layer19.jpg" alt="" style="background-repeat: no-repeat !important; background-size: cover !important;">
                    <img class="w-100 d-block d-sm-none" src="<?php echo $this->assetBaseurl; ?>saveajah.jpg" alt="">
                </div>
            </div>
            <div class="carousel-caption caption-slider-home">
                <div class="prelative container sliderrrr">
                    <div class="bxsl_tx_fcs">
                        <div class="row no-gutters">
                            <div class="content col-md-60">
                            <?php if (Yii::app()->language == 'en'): ?>
                                <p class="t1">PT. OPTIMA PRIMA METAL SINERGI</p>
                                <p class="t2">Your No 1 Choice for Metal Scrap and Used Ship Supplies Partner - <b><i>Trusted!</i></b></p>
                                <p class="t3">SERVING METAL SCRAPS SUPPLIES NATIONWIDE IN INDONESIA</p>
                                <button class="form-control button-red"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Learn More</a></button>
                            <?php else: ?>
                                <p class="t1">PT. OPTIMA PRIMA METAL SINERGI</p>
                                <p class="t2">Perusahaan jual beli besi dan kapal bekas terpercaya - <b><i>Terpercaya!</i></b></p>
                                <p class="t3">melayani pasokan besi di surabaya, jakarta, semarang, hingga seluruh pelosok di indonesia.</p>
                                <button class="form-control button-red"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">PELAJARI LEBIH LANJUT</a></button>
                            <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>


<!-- End fcs -->

<?php echo $content ?>

<?php // echo $this->renderPartial('//layouts/_footer', array()); ?>

<script type="text/javascript">
    $(document).ready(function(){
        
        if ($(window).width() >= 768) {
            var $item = $('#myCarousel_home.carousel .carousel-item'); 
            var $wHeight = $(window).height();
            $item.eq(0).addClass('active');
            $item.height($wHeight); 
            $item.addClass('full-screen');

            $('#myCarousel_home.carousel img.d-none.d-sm-block').each(function() {
              var $src = $(this).attr('src');
              var $color = $(this).attr('data-color');
              $(this).parent().css({
                'background-image' : 'url(' + $src + ')',
                'background-color' : $color
              });
              $(this).remove();
            });

            $(window).on('resize', function (){
              $wHeight = $(window).height();
              $item.height($wHeight);
            });

            $('#myCarousel_home.carousel').carousel({
              interval: 4000,
              pause: "false"
            });
        }

    });
</script>

<script>
        $(document).ready(function (){
            $("#click").click(function (){
                $('html, body').animate({
                    scrollTop: $("#div1").offset().top
                }, 2000);
            });
        });
    </script>

<?php $this->endContent(); ?>
