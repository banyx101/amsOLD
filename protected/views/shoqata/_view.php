<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idShoqata')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idShoqata), array('view', 'id'=>$data->idShoqata)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodiShoqates')); ?>:</b>
	<?php echo CHtml::encode($data->kodiShoqates); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emriShoqates')); ?>:</b>
	<?php echo CHtml::encode($data->emriShoqates); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pershkrimi')); ?>:</b>
	<?php echo CHtml::encode($data->pershkrimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closeDate')); ?>:</b>
	<?php echo CHtml::encode($data->closeDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shoqateStatus')); ?>:</b>
	<?php echo CHtml::encode($data->shoqateStatus); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('vendimiGjykates')); ?>:</b>
	<?php echo CHtml::encode($data->vendimiGjykates); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	*/ ?>

</div>