<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProdukte')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProdukte), array('view', 'id'=>$data->idProdukte)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emriProduktit')); ?>:</b>
	<?php echo CHtml::encode($data->emriProduktit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pershkrimi')); ?>:</b>
	<?php echo CHtml::encode($data->pershkrimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sasia')); ?>:</b>
	<?php echo CHtml::encode($data->sasia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('njesiaMatese')); ?>:</b>
	<?php echo CHtml::encode($data->njesiaMatese); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFurnitori')); ?>:</b>
	<?php echo CHtml::encode($data->idFurnitori); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produktSherbim')); ?>:</b>
	<?php echo CHtml::encode($data->produktSherbim); ?>
	<br />

	*/ ?>

</div>