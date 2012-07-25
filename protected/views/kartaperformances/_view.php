<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idKartaPerformances')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idKartaPerformances), array('view', 'id'=>$data->idKartaPerformances)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matrikullQengja')); ?>:</b>
	<?php echo CHtml::encode($data->matrikullQengja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peshaLindjes')); ?>:</b>
	<?php echo CHtml::encode($data->peshaLindjes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataShkeputjes')); ?>:</b>
	<?php echo CHtml::encode($data->dataShkeputjes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peshaShkeputjes')); ?>:</b>
	<?php echo CHtml::encode($data->peshaShkeputjes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peshaNeLargim')); ?>:</b>
	<?php echo CHtml::encode($data->peshaNeLargim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cmimiShitjes')); ?>:</b>
	<?php echo CHtml::encode($data->cmimiShitjes); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('totalQengjaPerDele')); ?>:</b>
	<?php echo CHtml::encode($data->totalQengjaPerDele); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pjelljetEDeleve')); ?>:</b>
	<?php echo CHtml::encode($data->pjelljetEDeleve); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RegKafsheve_idKafshet')); ?>:</b>
	<?php echo CHtml::encode($data->RegKafsheve_idKafshet); ?>
	<br />

	*/ ?>

</div>