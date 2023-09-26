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
              <h3 class="titles_top"><?php echo (isset($_GET['topik']) && $_GET['topik'] != '') ? strtoupper($_GET['topik']) : 'NEWS' ?></h3>
            </div>
            <div class="col-md-20">
              <div class="bcl_back text-right"><a class="btn btn-link" onclick="window.history.back();" href="#">Back</a></div>
            </div>
          </div>
          <div class="py-2"></div>

          <!-- start blog -->
          <div class="d-block mx-auto outers_nblocked_news">
            <?php if ($dataBlog->getTotalItemCount() > 0) : ?>
              <div class="lists_bn_news list_default text-left">
                <div class="row">
                  <?php foreach ($dataBlog->getData() as $key => $value) : ?>
                    <div class="col-md-20">
                      <div class="items">
                        <div class="picture"><a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id' => $value->id, 'name' => Slug::Create($value->description->title), 'lang' => Yii::app()->language)); ?>"><img src="<?php echo Yii::app()->baseUrl . ImageHelper::thumb(404, 302, '/images/blog/' . $value->image, array('method' => 'adaptiveResize', 'quality' => '90')); ?>" alt="" class="img img-fluid"></a></div>
                        <div class="info py-3">
                          <h5><?php echo ucwords(strtolower($value->description->title)) ?></h5>
                          <div class="clear"></div>
                          <a href="<?php echo CHtml::normalizeUrl(array('/blog/detail', 'id' => $value->id, 'name' => Slug::Create($value->description->title), 'lang' => Yii::app()->language)); ?>" class="btn btn-link view_articles px-0"><?php echo Tt::t('front', 'BACA ARTIKEL'); ?></a>
                        </div>
                      </div>
                    </div>
                  <?php endforeach ?>
                </div>
              </div>
            <?php endif ?>

            <div class="py-3"></div>
            <div class="paginations_block text-center">
              <?php
              $this->widget('CLinkPager', array(
                'pages' => $dataBlog->getPagination(),
                'header' => '',
                'footer' => '',
                'lastPageCssClass' => 'd-none',
                'firstPageCssClass' => 'd-none',
                'nextPageCssClass' => 'd-none',
                'previousPageCssClass' => 'd-none',
                'itemCount' => $dataBlog->totalItemCount,
                'htmlOptions' => array('class' => 'pagination text-center justify-content-center'),
                'selectedPageCssClass' => 'active',
              ));
              ?>
            </div>

            <div class="clear"></div>
          </div>
          <!-- end blog -->


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