<?php
$this->breadcrumbs=array(
	'Career Lists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CareerList','url'=>array('index')),
	array('label'=>'Add CareerList','url'=>array('create')),
);
?>

<h1>Manage Career Lists</h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'career-list-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'position',
		'location',
		'job_description_en',
		'job_description_id',
		'qualifications_en',
		/*
		'qualifications_id',
		'status',
		'sorts',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
