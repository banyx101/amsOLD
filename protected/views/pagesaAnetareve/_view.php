<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpagesaAnetareve')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpagesaAnetareve), array('view', 'id'=>$data->idpagesaAnetareve)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Anetaret_Persona_idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->Anetaret_Persona_idPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shumaPaguar')); ?>:</b>
	<?php echo CHtml::encode($data->shumaPaguar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataPageses')); ?>:</b>
	<?php echo CHtml::encode($data->dataPageses); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lajmerimPagese')); ?>:</b>
	<?php echo CHtml::encode($data->lajmerimPagese); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shenime')); ?>:</b>
	<?php echo CHtml::encode($data->shenime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('udatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->udatedBy); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	*/ ?>

</div>