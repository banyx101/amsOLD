<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstafiShoqates')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstafiShoqates), array('view', 'id'=>$data->idstafiShoqates)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_idPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pozicioni')); ?>:</b>
	<?php echo CHtml::encode($data->pozicioni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtStart')); ?>:</b>
	<?php echo CHtml::encode($data->dtStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagaNeto')); ?>:</b>
	<?php echo CHtml::encode($data->pagaNeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	*/ ?>

</div>