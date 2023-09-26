<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_description_en')); ?>:</b>
	<?php echo CHtml::encode($data->job_description_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_description_id')); ?>:</b>
	<?php echo CHtml::encode($data->job_description_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualifications_en')); ?>:</b>
	<?php echo CHtml::encode($data->qualifications_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualifications_id')); ?>:</b>
	<?php echo CHtml::encode($data->qualifications_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sorts')); ?>:</b>
	<?php echo CHtml::encode($data->sorts); ?>
	<br />

	*/ ?>

</div>