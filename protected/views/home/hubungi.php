<section class="cover-insides hubungi" style="background-image: url(<?php echo Yii::app()->baseUrl . ImageHelper::thumb(1920, 539, '/images/static/' . $this->setting['contact_hero_image'], array('method' => 'adaptiveResize', 'quality' => '90')) ?>) !important; background-size: cover !important;">
    <div class="begrond">
        <div class="prelative container">
            <div class="teks">
                <div class="row">
                    <div class="col-md-60">
                        <h1 class="teks-cover"><?php echo Tt::t('front', 'Hubungi Kami') ?></h1>
                    </div>
                    <div class="col-md-60 ">
                        <div class="teks"><?php echo $this->setting['contact_hero_subtitle'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hubungi-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-25">
                <div class="merah">
                    <p><?php echo Tt::t('front', 'KANTOR PUSAT') ?></p>
                </div>
                <div class="biru">
                    <p>PT Optima Prima Metal Sinergi
                    </p>
                </div>
                <div class="alamat">
                    <p><?php echo $this->setting['contact_address'] ?></p>
                </div>
                <div class="kontak">
                    <table>
                        <tr>
                            <td>Telephone</td>
                            <td><?php echo $this->setting['contact_phone'] ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td><?php echo $this->setting['contact_fax'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><a href="mailto:<?php echo $this->setting['contact_email'] ?>"><?php echo $this->setting['contact_email'] ?></a></td>
                        </tr>
                        <tr>
                            <td>Whatsapp Hotline</td>
                            <td><a href="<?= $this->nomer_wa_link ?>"><?= $this->nomer_wa ?></a></td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="col-md-35">
                <div class="row">
                    <div class="col-md-60">
                        <div class="box-content">
                            <div class="content">
                                <?php if (Yii::app()->language == 'en') : ?>
                                    <div class="title">
                                        <p>Online contact form</p>
                                    </div>
                                    <div class="subtitle">
                                        <p>Let's talk with our team at PT. Optima Prima Metal Sinergi. We will welcome all your questions and needs!</p>
                                    </div>
                                <?php else : ?>
                                    <div class="title">
                                        <p>Formulir kontak online</p>
                                    </div>
                                    <div class="subtitle">
                                        <p>Mari berbicara dengan tim kami di PT. Optima Prima Metal Sinergi. Kami akan menyambut semua pertanyaan dan kebutuhan anda!</p>
                                    </div>
                                <?php endif ?>

                                <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                                    'type' => '',
                                    'enableAjaxValidation' => false,
                                    'clientOptions' => array(
                                        'validateOnSubmit' => false,
                                    ),
                                    'htmlOptions' => array(
                                        'enctype' => 'multipart/form-data',
                                        'class' => 'fieldd',
                                    ),
                                )); ?>
                                <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
                                <?php if (Yii::app()->user->hasFlash('success')) : ?>
                                    <?php $this->widget('bootstrap.widgets.TbAlert', array(
                                        'alerts' => array('success'),
                                    )); ?>
                                <?php endif; ?>
                                <div class="form-row">
                                    <div class="form-group col-md-15">
                                        <label for="inputEmail4"><?php echo Tt::t('front', 'Nama') ?></label>
                                        <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => '')); ?>
                                    </div>
                                    <div class="form-group col-md-15">
                                        <label for="inputEmail4"><?php echo Tt::t('front', 'Telepon') ?></label>
                                        <?php echo $form->textField($model, 'phone', array('class' => 'form-control', 'placeholder' => '')); ?>
                                    </div>
                                    <div class="form-group col-md-15">
                                        <label for="inputEmail4"><?php echo Tt::t('front', 'Nama Perusahaan') ?></label>
                                        <?php echo $form->textField($model, 'company', array('class' => 'form-control', 'placeholder' => '')); ?>
                                    </div>
                                    <div class="form-group col-md-15">
                                        <label for="inputEmail4"><?php echo Tt::t('front', 'Email') ?></label>
                                        <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => '')); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-60">
                                        <label for="inputEmail4"><?php echo Tt::t('front', 'Pesan') ?></label>
                                        <?php echo $form->textArea($model, 'body', array('class' => 'form-control', 'rows' => 3, 'placeholder' => '')); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-30">
                                        <div class="g-recaptcha" data-sitekey="6LdoQrQUAAAAAK9g3z0Czicmxprw8toY6CeqWCe8"></div>
                                    </div>
                                    <div class="form-group col-md-30">
                                        <button class="form-control">submit</button>
                                    </div>
                                </div>
                                <?php $this->endWidget(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">
    $(window).load(function() {
        $('.alert.alert-block.alert-success.fade').removeClass('fade');
    })
</script>
<style type="text/css">
    .kontak {}

    .kontak table {}

    .kontak table td a {
        color: #000;
    }
</style>