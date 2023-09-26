<?php
$e_activemenu = $this->action->id;
$controllers_ac = $this->id;
$session = new CHttpSession;
$session->open();
$login_member = $session['login_member'];

$active_menu_pg = $controllers_ac . '/' . $e_activemenu;
?>

<header class="head <?php if ($active_menu_pg != 'home/index') : ?>insides-head<?php endif ?>">
  <div class="prelative container mx-auto">
    <div class="row">
      <div class="col-md-15">
        <img href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>" src="<?php echo $this->assetBaseurl; ?>logo-head-white.png" alt="" class="img img-fluid">
      </div>
      <div class="col-md-45">
        <div class="menu-block-top text-right align-middle">
          <div class="d-inline-block mx-2 calls_info align-middle">
            PT. OPTIMA PRIMA METAL SINERGI HOTLINE
            <img src="<?php echo $this->assetBaseurl; ?>wa-atas.png" alt="" class="d-inline px-2 img img-fluid">
            <a href="<?= $this->nomer_wa_link ?>"><b><?= $this->nomer_wa ?></b></a>
          </div>
          <div class="separate_line_white d-inline-block align-middle"></div>
          <div class="languages d-inline-block align-middle">
            <ul class="m-0 list-unstyled">
              <?php
              $get = $_GET;
              $get['lang'] = 'id';
              ?>
              <li class="active"><a href="<?php echo $this->createUrl($this->route, $get) ?>" rel="noopener noreferrer">INDONESIA</a></li>
              <li class="separator"></li>
              <?php
              $get = $_GET;
              $get['lang'] = 'en';
              ?>
              <li class="kanan-eng"><a href="<?php echo $this->createUrl($this->route, $get) ?>" rel="noopener noreferrer">ENGLISH</a></li>
            </ul>
          </div>

        </div>
        <div class="menu-block-bottom">
          <ul class="list-inline menuuu">
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Home') ?></a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Tentang Kami') ?></a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/layanan', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'layanan') ?></a></li>

            <li class="list-inine-item menu dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo CHtml::normalizeUrl(array('/home/hubinvest', 'lang' => Yii::app()->language)); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo Tt::t('front', 'hubungan investor') ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category' => 1, 'sub' => 4)); ?>"><?php echo Tt::t('front', 'INFORMASI INVESTOR') ?></a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category' => 2, 'sub' => 8)); ?>"><?php echo Tt::t('front', 'INFORMASI FINANSIAL') ?></a></li>
                <li><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category' => 3, 'sub' => 10)); ?>"><?php echo Tt::t('front', 'TATA KELOLA PERUSAHAAN') ?></a></li>
              </ul>
            </li>

            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'karir') ?></a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'News & Articles') ?></a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubungi', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Hubungi Kami') ?></a></li>
            <li class="list-inline-item menu paling-kanan"><a target="_blank" href="https://optimapart.com/">Optima Parts Store</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<section id="myAffix" class="header-affixs affix-top">
  <!-- <div class="clear height-15"></div> -->
  <div class="prelative container cont-header mx-auto">
    <div class="row">
      <div class="col-md-15 col-sm-15">
        <div class="lgo_web_headrs_wb">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>">
            <img href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>" src="<?php echo $this->assetBaseurl; ?>logo-head-white.png" alt="" class="img img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-45 col-sm-45">
        <div class="text-right">
          <div class="menu-taffix">
            <ul class="list-inline d-inline">
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Home') ?></a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Tentang Kami') ?></a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/layanan', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'layanan') ?></a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubinvest', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'hubungan investor') ?></a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'karir') ?></a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'News & Articles') ?></a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubungi', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Hubungi Kami') ?></a></li>
              <li class="list-inline-item menu paling-kanan"><a target="_blank" href="https://optimapart.com/">Optima Parts Store</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>

<header class="header-mobile homepage_head">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>opms-logo.png" alt="" class="img img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Home') ?></a></li>
        <li class="nav-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Tentang Kami') ?></a></li>
        <li class="nav-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/layanan', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'layanan') ?></a></li>

        <li class="list-inine-item menu dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo CHtml::normalizeUrl(array('/home/hubinvest', 'lang' => Yii::app()->language)); ?>" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo Tt::t('front', 'hubungan investor') ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category' => 1, 'sub' => 4)); ?>"><?php echo Tt::t('front', 'INFORMASI INVESTOR') ?></a></li>
            <li><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category' => 2, 'sub' => 8)); ?>"><?php echo Tt::t('front', 'INFORMASI FINANSIAL') ?></a></li>
            <li><a href="<?php echo CHtml::normalizeUrl(array('/home/invest_landing', 'category' => 3, 'sub' => 10)); ?>"><?php echo Tt::t('front', 'TATA KELOLA PERUSAHAAN') ?></a></li>
          </ul>
        </li>

        <li class="nav-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'karir') ?></a></li>
        <li class="nav-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'News & Articles') ?></a></li>
        <li class="nav-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubungi', 'lang' => Yii::app()->language)); ?>"><?php echo Tt::t('front', 'Hubungi Kami') ?></a></li>
        <li class="nav-item menu paling-kanan"><a target="_blank" href="https://optimapart.com/">Optima Parts Store</a></li>

        <li class="nav-item">
          <?php
          $get = $_GET;
          $get['lang'] = 'en';
          ?>
          <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="ENG">EN | </a>
          <?php
          $get = $_GET;
          $get['lang'] = 'id';
          ?>
          <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="Bahasa">ID</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<script type="text/javascript">
  $(function() {

    var sn_width = $(window).width();
    if (sn_width > 1150) {

      $(window).scroll(function() {
        var sntop1 = $(window).scrollTop();

        if (sntop1 > 115) {
          // console.log(sntop1);
          $('.header-affixs').removeClass('affix-top').addClass('affix');
          // $('.header-affixs').addClass('affix');
        } else {
          $('.header-affixs.affix').removeClass('affix').addClass('affix-top');
          // $('body').css('padding-top', '0px');
        }
      });

    }

  });
</script>



<script>
  $(document).ready(function() {
    $("#headerproduct").css("display", "none");
  });
</script>

<style type="text/css">
  section.live-chat {
    position: fixed;
    right: 0;
    top: 35%;
    z-index: 270;
  }

  @media screen and (max-width: 767px) {
    section.live-chat {
      display: none;
    }
  }

  header.head .menu-block-bottom ul.list-inline li {
    padding-left: 10px;
    padding-right: 10px;
  }
</style>
<section class="live-chat">
  <div class="row">
    <div class="col-md-60">
      <div class="live">
        <a href="https://api.whatsapp.com/send?phone=6282333112268">
          <img src="<?php echo $this->assetBaseurl; ?>Whatsapp-Click-to-chat.png" class="img img-fluid" alt="">
        </a>
      </div>
    </div>
  </div>
</section>