<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matrikullBabai')); ?>:</b>
	<?php echo CHtml::encode($data->matrikullBabai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matrikullNena')); ?>:</b>
	<?php echo CHtml::encode($data->matrikullNena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataNderzmit')); ?>:</b>
	<?php echo CHtml::encode($data->dataNderzmit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kryqezim')); ?>:</b>
	<?php echo CHtml::encode($data->kryqezim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raceEPaster')); ?>:</b>
	<?php echo CHtml::encode($data->raceEPaster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('libriRaces')); ?>:</b>
	<?php echo CHtml::encode($data->libriRaces); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('genealogicCertificate')); ?>:</b>
	<?php echo CHtml::encode($data->genealogicCertificate); ?>
	<br />

	*/ ?>

</div>