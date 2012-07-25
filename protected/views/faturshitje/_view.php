<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nrFatureShitje')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nrFatureShitje), array('view', 'id'=>$data->nrFatureShitje)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kliente_idKliente')); ?>:</b>
	<?php echo CHtml::encode($data->Kliente_idKliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataFatures')); ?>:</b>
	<?php echo CHtml::encode($data->dataFatures); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faturePostuar')); ?>:</b>
	<?php echo CHtml::encode($data->faturePostuar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shenime')); ?>:</b>
	<?php echo CHtml::encode($data->shenime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Shoqata_idShoqata')); ?>:</b>
	<?php echo CHtml::encode($data->Shoqata_idShoqata); ?>
	<br />

	*/ ?>

</div>