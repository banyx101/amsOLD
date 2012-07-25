<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idKliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idKliente), array('view', 'id'=>$data->idKliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kompania')); ?>:</b>
	<?php echo CHtml::encode($data->kompania); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pershkrimi')); ?>:</b>
	<?php echo CHtml::encode($data->pershkrimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIPT')); ?>:</b>
	<?php echo CHtml::encode($data->NIPT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->idPersona); ?>
	<br />


</div>