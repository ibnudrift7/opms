<?php
$this->breadcrumbs=array(
	'Career Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CareerList', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add CareerList', 'icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Edit CareerList', 'icon'=>'pencil','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CareerList', 'icon'=>'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View CareerList #<?php echo $model->id; ?></h1>
<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'position',
		'location',
		'job_description_en',
		'job_description_id',
		'qualifications_en',
		'qualifications_id',
		'status',
		'sorts',
	),
)); ?>
