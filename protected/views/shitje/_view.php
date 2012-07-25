<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idShitje')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idShitje), array('view', 'id'=>$data->idShitje)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataDaljes')); ?>:</b>
	<?php echo CHtml::encode($data->dataDaljes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('njesia')); ?>:</b>
	<?php echo CHtml::encode($data->njesia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sasia')); ?>:</b>
	<?php echo CHtml::encode($data->sasia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cmimiShitjes')); ?>:</b>
	<?php echo CHtml::encode($data->cmimiShitjes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shtesaNeto')); ?>:</b>
	<?php echo CHtml::encode($data->shtesaNeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shenime')); ?>:</b>
	<?php echo CHtml::encode($data->shenime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Produkte_idProdukte')); ?>:</b>
	<?php echo CHtml::encode($data->Produkte_idProdukte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_FatureShitje_Nr')); ?>:</b>
	<?php echo CHtml::encode($data->fk_FatureShitje_Nr); ?>
	<br />

	*/ ?>

</div>