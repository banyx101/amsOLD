<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nrFatureBlerje')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nrFatureBlerje), array('view', 'id'=>$data->nrFatureBlerje)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Furnitore_idFurnitore')); ?>:</b>
	<?php echo CHtml::encode($data->Furnitore_idFurnitore); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('shenime')); ?>:</b>
	<?php echo CHtml::encode($data->shenime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Shoqata_idShoqata')); ?>:</b>
	<?php echo CHtml::encode($data->Shoqata_idShoqata); ?>
	<br />


</div>