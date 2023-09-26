<section class="cover-insides hubinvest" style="background-image: url(<?php echo Yii::app()->baseUrl . ImageHelper::thumb(1920, 539, '/images/static/' . $this->setting['blog_hero_image'], array('method' => 'adaptiveResize', 'quality' => '90')) ?>) !important;">
  <div class="begrond">
    <div class="prelative container">
      <div class="teks">
        <div class="row">
          <div class="col-md-60">
            <h1 class="teks-cover"><?php echo $this->setting['blog_hero_title'] ?></h1>
          </div>
          <div class="col-md-60 ">
            <div class="teks"><?php echo $this->setting['blog_hero_subtitle'] ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="hub-investor-sec-1">
  <div class="prelative container">
    <div class="py-4"></div>

    <div class="row outers_block_investor_page">

      <div class="col-md-12">
        <div class="py-3"></div>
        <div class="lefts_menu">
          <ul class="list-unstyled">
            <li class="<?= (isset($_GET['topik']) && $_GET['topik'] == 'news') ? 'active' : ''; ?>">
              <a href=" <?php echo CHtml::normalizeUrl(array('/blog/index', 'topik' => 'news', 'lang' => Yii::app()->language)); ?>">NEWS</a>
            </li>
            <li class="<?= (isset($_GET['topik']) && $_GET['topik'] == 'articles') ? 'active' : ''; ?>">
              <a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'topik' => 'articles', 'lang' => Yii::app()->language)); ?>">Articles</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End Left Content -->

      <div class="col-md-48">
        <div class="py-3"></div>
        <div class="inners_right">
          <div class="row tops_block no-gutters">
            <div class="col-md-40">
              <h3 class="titles_top"><?php echo $data->description->title; ?></h3>
            </div>
            <div class="col-md-20">
              <div class="bcl_back text-right"><a class="btn btn-link" onclick="window.history.back();" href="#">Back</a></div>
            </div>
          </div>
          <div class="py-2"></div>

          <div class="pictures">
            <img class="img img-fluid w-100" src="<?php echo $this->assetBaseurl . '../../images/blog/'; ?><?php echo $data->image ?>" alt="<?php echo $data->description->title ?>">
          </div>
          <div class="py-3 my-1"></div>

          <div class="maw950 d-block mx-auto">
            <?php echo $data->description->content; ?>

            <div class="py-3"></div>
            <div class="text-left">
              <a href="<?php echo CHtml::normalizeUrl(array('/blog/index', 'lang' => Yii::app()->language)); ?>" class="px-0 btn btn-default btn-link view_articles"><i class="fa fa-chevron-left"></i> <?php echo Tt::t('front', 'Kembali') ?></a>
            </div>
            <div class="clear"></div>
          </div>

          <div class="clear clearfix"></div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
  </div>
</section>

<?php echo $this->renderPartial('//layouts/_layform_bottom', array()); ?>

<style type="text/css">
  section.cover-insides {
    background-repeat: no-repeat;
  }

  .tops_block {
    border-bottom: 1px solid #ccc;
    margin-bottom: 1rem;
  }

  .lists_bn_news.list_default {}

  .lists_bn_news.list_default .items {}

  .lists_bn_news.list_default .items .picture {}

  .lists_bn_news.list_default .items .picture img {}

  .lists_bn_news.list_default .items .info h5 {
    font-size: 15px;
    font-weight: 500;
    color: #000;
  }

  .lists_bn_news.list_default .items .info a.view_articles {
    font-size: 13px;
    font-weight: 400;
    color: #000;
  }
</style>