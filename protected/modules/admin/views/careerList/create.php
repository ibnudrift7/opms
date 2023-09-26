<?php
$this->breadcrumbs = array(
	'Career Lists' => array('index'),
	'Add',
);

$this->pageHeader = array(
	'icon' => 'fa fa-minus',
	'title' => 'Career',
	'subtitle' => 'Add Career',
);

$this->menu = array(
	array('label' => 'List Career', 'icon' => 'th-list', 'url' => array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup', array('buttons' => $this->menu,)); ?><br />
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>