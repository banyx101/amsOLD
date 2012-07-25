<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idllojiSepcia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idllojiSepcia), array('view', 'id'=>$data->idllojiSepcia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emrtimi')); ?>:</b>
	<?php echo CHtml::encode($data->emrtimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familja')); ?>:</b>
	<?php echo CHtml::encode($data->familja); ?>
	<br />


</div>