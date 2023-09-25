<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="language" content="<?php echo Yii::app()->language ?>" />

    <meta name="keywords" content="<?php echo CHtml::encode($this->metaKey); ?>">
    <meta name="description" content="<?php echo CHtml::encode($this->metaDesc); ?>">

    <link rel="Shortcut Icon" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/images/favicon.png" />
    <link rel="icon" type="image/ico" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/images/favicon.png" />
    <link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/screen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/comon.css" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/js/bootstrap-4.0.0/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/styles.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php // Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/js/jquery.min.js"></script>
    <?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
    <?php /*$this->widget('application.extensions.fancyapps.EFancyApps', array(
            'target'=>'',
            'config'=>array(),
            )
        );*/ ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- All JS -->
    <script type="text/javascript">
        var baseurl = "<?php echo CHtml::normalizeUrl(array('/')); ?>";
        var url_add_cart_action = "<?php echo CHtml::normalizeUrl(array('/product/addCart')); ?>";
        var url_edit_cart_action = "<?php echo CHtml::normalizeUrl(array('/product/edit')); ?>";
    </script>
    <script src="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/js/all.js"></script>
    <!-- <script src="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/js/jquery.min3.3.1.js"></script> -->

    <?php echo $this->setting['google_tools_webmaster']; ?>
    <?php echo $this->setting['google_tools_analytic']; ?>
    <?php if ($this->setting['purechat_status'] == '1'): ?>
    <?php echo $this->setting['purechat_code'] ?>
    <?php endif ?>

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/style.deory.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/pager.css" />
    <!-- Css Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/media.style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/animate.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JEHRYRYED6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-JEHRYRYED6');
    </script>


</head>

<body>
    <?php echo $content ?>

    <!-- <div id="back-top" class="t-backtop " style="display:none">
    <div class="clear height-5"></div>
        <a href="#top"><i class="fa fa-chevron-up"></i></a>
    </div> -->
    <div class="outer_boxed_widgets_optimar">
        <div class="tops-widget">
            <div class="row">
                <div class="col-50">
                    <a href="#" class="nx_show">
                        <h2>OPTIMA PART STORE</h2>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-link p-0 nx_close"><i class="fa fa-close"></i></a>
                </div>
            </div>
        </div>
        <div class="big_middles">
            <div class="content p-3">
                <div class="banner-hero">
                    <a href="https://optimapart.com/" target="_blank"><img src="<?php echo Yii::app()->baseUrl.'/asset/images/'; ?>300px-01-01.jpg" alt="" class="img img-fluid"></a>
                </div>
                <div class="clear clearfix"></div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .outer_boxed_widgets_optimar {
            display: block;
            position: fixed;
            bottom: 0px;
            right: 0px;
            width: 320px;
            z-index: 35;
        }

        .outer_boxed_widgets_optimar .tops-widget {
            background-color: #ccc;
            padding: 0.8rem 1rem 0.5rem;
        }

        .outer_boxed_widgets_optimar .tops-widget h2 {
            font-family: Lato, sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: #082750;
        }

        .outer_boxed_widgets_optimar .tops-widget a.nx_close {
            color: rgba(0, 0, 0, 0.65);
            display: block;
        }

        .outer_boxed_widgets_optimar .big_middles {
            /*display: none;*/
            background-color: #f5f5f5;
        }

        .outer_boxed_widgets_optimar .big_middles .content {}

        .outer_boxed_widgets_optimar .big_middles .content .banner-hero {}
    </style>

    <script type="text/javascript">
        $(window).load(function() {
            $('.t-backtop').hide();
        });

        $(function() {
            // nx function
            $('.outer_boxed_widgets_optimar a.nx_show').click(function(e) {
                $(".outer_boxed_widgets_optimar .big_middles").fadeIn();
                $(".outer_boxed_widgets_optimar .big_middles .content").animate({
                    marginTop: "0px"
                }, 300);
                e.preventDefault();
            });

            $('.outer_boxed_widgets_optimar a.nx_close').click(function(e) {
                $(".outer_boxed_widgets_optimar .big_middles").fadeOut();
                $(".outer_boxed_widgets_optimar .big_middles .content").fadeOut();
                e.preventDefault();
            });

            $('.t-backtop').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            var $win = $(window);
            $win.scroll(function() {
                if ($win.scrollTop() == 0)
                    $('.t-backtop').hide();
                else if ($win.height() + $win.scrollTop() != $(document).height() || $win.height() + $win.scrollTop() > 500) {
                    $('.t-backtop').show();
                }
            });

            $('.toscroll').click(function() {
                var sn_id = $(this).attr('data-id');

                var data_mins = $(this).attr('data-minus');
                if (!data_mins) {
                    data_mins = 0;
                }

                $('html, body').animate({
                    scrollTop: $("#" + sn_id).offset().top - data_mins
                }, 1000);
            });

        });
    </script>

</body>

</html>