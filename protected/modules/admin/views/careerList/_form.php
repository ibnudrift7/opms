<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id' => 'career-list-form',
	'type' => 'horizontal',
	'enableAjaxValidation' => false,
	'clientOptions' => array(
		'validateOnSubmit' => false,
	),
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="widget">
	<h4 class="widgettitle">Data CareerList</h4>
	<div class="widgetcontent">
		<?php Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget'); ?>
		<?php $this->widget('ImperaviRedactorWidget', array(
			'selector' => '.redactor',
			'options' => array(
				'imageUpload' => $this->createUrl('admin/setting/uploadimage', array('type' => 'image')),
				'clipboardUploadUrl' => $this->createUrl('admin/setting/uploadimage', array('type' => 'clip')),
			),
			'plugins' => array(
				'clips' => array(),
			),
		)); ?>

		<?php echo $form->textFieldRow($model, 'position_en', array('class' => 'span5', 'maxlength' => 225)); ?>
		<?php echo $form->textFieldRow($model, 'position', array('class' => 'span5', 'maxlength' => 225)); ?>

		<?php echo $form->textFieldRow($model, 'location', array('class' => 'span5', 'maxlength' => 225)); ?>

		<?php echo $form->textAreaRow($model, 'job_description_en', array('rows' => 2,  'class' => 'span8 redactor')); ?>

		<?php echo $form->textAreaRow($model, 'job_description_id', array('rows' => 2,  'class' => 'span8 redactor')); ?>

		<?php echo $form->textAreaRow($model, 'qualifications_en', array('rows' => 2,  'class' => 'span8 redactor')); ?>

		<?php echo $form->textAreaRow($model, 'qualifications_id', array('rows' => 2,  'class' => 'span8 redactor')); ?>

		<?php
		echo $form->dropDownListRow($model, 'status', array('1' => 'Active', '0' => 'Inactive'), array('class' => 'span5'));
		?>

		<?php //echo $form->textFieldRow($model, 'sorts', array('class' => 'span5')); 
		?>

		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type' => 'primary',
			'label' => $model->isNewRecord ? 'Add' : 'Save',
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			// 'buttonType'=>'submit',
			// 'type'=>'info',
			'url' => CHtml::normalizeUrl(array('index')),
			'label' => 'Batal',
		)); ?>
	</div>
</div>
<div class="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Warning!</strong> Fields with <span class="required">*</span> are required.
</div>

<?php $this->endWidget(); ?>