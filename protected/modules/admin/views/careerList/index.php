<?php
$this->breadcrumbs = array(
	'Career Lists',
);

$this->pageHeader = array(
	'icon' => 'fa fa-minus',
	'title' => 'Career List',
	'subtitle' => 'Data Career List',
);

$this->menu = array(
	array('label' => 'Add Career List', 'icon' => 'plus-sign', 'url' => array('create')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup', array('buttons' => $this->menu,)); ?>
<?php if (Yii::app()->user->hasFlash('success')) : ?>

	<?php $this->widget('bootstrap.widgets.TbAlert', array(
		'alerts' => array('success'),
	)); ?>

<?php endif; ?>
<h1>Career List</h1>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id' => 'career-list-grid',
	'dataProvider' => $model->search(),
	// 'filter'=>$model,
	'enableSorting' => false,
	'summaryText' => false,
	'type' => 'bordered',
	'columns' => array(
		// 'id',
		'position',
		'location',
		// 'job_description_en',
		// 'job_description_id',
		// 'qualifications_en',
		/*
		'qualifications_id',
		'status',
		'sorts',
		*/
		array(
			'class' => 'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} &nbsp; {delete}',
		),
	),
)); ?>