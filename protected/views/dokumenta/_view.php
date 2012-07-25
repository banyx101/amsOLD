<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDokumenta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDokumenta), array('view', 'id'=>$data->idDokumenta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Shoqata_idShoqata')); ?>:</b>
	<?php echo CHtml::encode($data->Shoqata_idShoqata); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokEmer')); ?>:</b>
	<?php echo CHtml::encode($data->dokEmer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokPershkrimi')); ?>:</b>
	<?php echo CHtml::encode($data->dokPershkrimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokLloji')); ?>:</b>
	<?php echo CHtml::encode($data->dokLloji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokTabelReference')); ?>:</b>
	<?php echo CHtml::encode($data->dokTabelReference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokReference')); ?>:</b>
	<?php echo CHtml::encode($data->dokReference); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('filePath')); ?>:</b>
	<?php echo CHtml::encode($data->filePath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fileSize')); ?>:</b>
	<?php echo CHtml::encode($data->fileSize); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	*/ ?>

</div>