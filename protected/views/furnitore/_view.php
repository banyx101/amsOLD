<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFurnitore')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFurnitore), array('view', 'id'=>$data->idFurnitore)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kompania')); ?>:</b>
	<?php echo CHtml::encode($data->kompania); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIPT')); ?>:</b>
	<?php echo CHtml::encode($data->NIPT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->idPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />


</div>