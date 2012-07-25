<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('kodiFermes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kodiFermes)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Persona_idPersona')); ?>:</b>
	<?php 
	//me ane te ketyre variablave kapim emrin dhe mbiemrin e personit dhe e paraqesim si stringe, te dhenat lidhen me ORM-------------//
	$emri = $data->personaIdPersona->emri;
	$mbiemri=$data->personaIdPersona->mbiemri;
	$emriMbiemri=$emri ." ". $mbiemri;//fund i marrjes dhe printimit te emer mbiemer nga tabela Persona-------------------------------//
	echo CHtml::link(CHtml::encode($emriMbiemri), array('view', 'id'=>$data->Persona_idPersona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anetareTip_idanetareTip')); ?>:</b>
	<?php echo CHtml::encode($data->anetareTipIdanetareTip->tipi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anetarKode')); ?>:</b>
	<?php echo CHtml::encode($data->anetarKode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regDate')); ?>:</b>
	<?php echo CHtml::encode($data->regDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anetarStatus')); ?>:</b>
	<?php echo CHtml::encode($data->anetarStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pronarMbajtes')); ?>:</b>
	<?php echo CHtml::encode($data->pronarMbajtes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipiProdhimit')); ?>:</b>
	<?php echo CHtml::encode($data->tipiProdhimit); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateUpdate')); ?>:</b>
	<?php echo CHtml::encode($data->dateUpdate); ?>
	<br />

	*/ ?>

</div>