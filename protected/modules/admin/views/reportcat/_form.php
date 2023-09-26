<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'category-form-update',
    // 'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<div class="widget">
<h4 class="widgettitle">Edit Report</h4>
<div class="widgetcontent">

	<div class="multilang2 pj-form-langbar">
		<?php foreach (Language::model()->getLanguage() as $key => $value): ?>
		<a href="#" data-index="<?php echo $value->id ?>" data-abbr="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$value->code.'.png' ?>" class="pj-form-langbar-item <?php if ($value->code==$this->setting['lang_deff']): ?>pj-form-langbar-item-active<?php endif ?>"><abbr style="background-image: url(<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$value->code.'.png' ?>);"></abbr></a>
		<?php endforeach ?>
	</div>
	<div class="divider5"></div>

	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->errorSummary($modelDesc, 'Please fix the following input errors:', 'Periksa di semua bahasa'); ?>
	<?php if(Yii::app()->user->hasFlash('success')): ?>
	
	    <?php $this->widget('bootstrap.widgets.TbAlert', array(
	        'alerts'=>array('success'),
	    )); ?>
	
	<?php endif; ?>

	<?php Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget'); ?>
	<?php $this->widget('ImperaviRedactorWidget', array(
	    'selector' => '.redactor',
	    'options' => array(
	        'imageUpload'=> $this->createUrl('/admin/setting/imgUpload', array('type'=>'image')),
	        'clipboardUploadUrl'=> $this->createUrl('/admin/setting/imgUpload', array('type'=>'clip')),
	    ),
	    'plugins' => array(
	        'clips' => array(
	        ),
	    ),
	)); ?>

	<?php
	foreach ($modelDesc as $key => $value) {
		$lang = Language::model()->getName($key);
		?>
		<div class="pj-multilang-wrap myLanguage2 control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">

		<?php
		echo $form->labelEx($value, '['.$lang->code.']name');
	    echo $form->textField($value,'['.$lang->code.']name',array('class'=>'span8', 'maxlength'=>100));
	    ?>
	    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
	    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
		</div>

		<div class="pj-multilang-wrap myLanguage2 control-group" style="display: <?php if ($key==$this->setting['lang_deff']): ?>block<?php else: ?>none<?php endif ?>;" data-id="<?php echo $lang->id ?>">

		<?php
		echo $form->labelEx($value, '['.$lang->code.']desc');
	    echo $form->textArea($value,'['.$lang->code.']desc',array('class'=>'span8 redactor'));
	    ?>
	    <span class="pj-multilang-input"><img src="<?php echo Yii::app()->baseUrl.'/asset/backend/language/'.$lang->code.'.png' ?>"></span>
	    <span class="help-inline _em_" style="display: none;">Please correct the error</span>
		</div>
	    <?php
	}
	?>
	<?php echo $form->textFieldRow($model,'sort',array('class'=>'span3',
	'hint'=>'Di urutkan dari kecil ke besar')); ?>
	<?php /*
	<?php echo $form->fileFieldRow($model,'image',array(
	'hint'=>'<b>Note:</b> Ukuran gambar adalah 349 x 356px. Gambar yang lebih besar akan ter-crop otomatis', 'style'=>"width: 100%")); ?>
	<?php if ($model->scenario == 'update'): ?>
	<div class="control-group">
		<label class="control-label">&nbsp;</label>
		<div class="controls">
			<img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(349,356, '/images/category/'.$model->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>"/>
		</div>
	</div>
	<?php endif; ?>
	<br>
	*/ ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>$model->isNewRecord ? 'Add' : 'Save',
	)); ?>

</div>
</div>
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>

<?php $this->endWidget(); ?>
<script type="text/javascript">
jQuery('.multilang2').multiLang({
	target: '.myLanguage2',
});
</script>

<style type="text/css">
	p strong{
		font-weight: 700;
	}
</style>