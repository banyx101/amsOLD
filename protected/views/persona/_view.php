
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPersona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPersona), array('view', 'id'=>$data->idPersona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Shoqata_idShoqata')); ?>:</b>
	<?php //echo CHtml::encode($data->Shoqata_idShoqata); 
	echo CHtml::encode($data->shoqataIdShoqata->emriShoqates); 	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emri')); ?>:</b>
	<?php echo CHtml::encode($data->emri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mbiemri')); ?>:</b>
	<?php echo CHtml::encode($data->mbiemri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atesia')); ?>:</b>
	<?php echo CHtml::encode($data->atesia); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateLindja')); ?>:</b>
	<?php echo CHtml::encode($data->dateLindja); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('regDate')); ?>:</b>
	<?php echo CHtml::encode($data->regDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokumentID')); ?>:</b>
	<?php echo CHtml::encode($data->dokumentID); ?>
	<br />

	*/ ?>

</div>

