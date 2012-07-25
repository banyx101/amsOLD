<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idraca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idraca), array('view', 'id'=>$data->idraca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raca')); ?>:</b>
	<?php echo CHtml::encode($data->raca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familia')); ?>:</b>
	<?php echo CHtml::encode($data->familia); ?>
	<br />


</div>