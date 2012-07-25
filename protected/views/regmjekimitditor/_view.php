<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRegMjekimitDitor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idRegMjekimitDitor), array('view', 'id'=>$data->idRegMjekimitDitor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semundja')); ?>:</b>
	<?php echo CHtml::encode($data->semundja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medikamentiPerdorur')); ?>:</b>
	<?php echo CHtml::encode($data->medikamentiPerdorur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doza')); ?>:</b>
	<?php echo CHtml::encode($data->doza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataPerdorimit')); ?>:</b>
	<?php echo CHtml::encode($data->dataPerdorimit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shenimeMbetjes')); ?>:</b>
	<?php echo CHtml::encode($data->shenimeMbetjes); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('RegKafsheve_idKafshet')); ?>:</b>
	<?php echo CHtml::encode($data->RegKafsheve_idKafshet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateDate')); ?>:</b>
	<?php echo CHtml::encode($data->updateDate); ?>
	<br />

	*/ ?>

</div>