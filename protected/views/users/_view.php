<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsers')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUsers), array('view', 'id'=>$data->idUsers)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->Persona_idPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regDate')); ?>:</b>
	<?php echo CHtml::encode($data->regDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userStatus')); ?>:</b>
	<?php echo CHtml::encode($data->userStatus); ?>
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