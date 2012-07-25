<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBlerje')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idBlerje), array('view', 'id'=>$data->idBlerje)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataHyrjes')); ?>:</b>
	<?php echo CHtml::encode($data->dataHyrjes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sasia')); ?>:</b>
	<?php echo CHtml::encode($data->sasia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('njesiaMatese')); ?>:</b>
	<?php echo CHtml::encode($data->njesiaMatese); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cmimiBlerjes')); ?>:</b>
	<?php echo CHtml::encode($data->cmimiBlerjes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shenime')); ?>:</b>
	<?php echo CHtml::encode($data->shenime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('burimiParave')); ?>:</b>
	<?php echo CHtml::encode($data->burimiParave); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Produkte_idProdukte')); ?>:</b>
	<?php echo CHtml::encode($data->Produkte_idProdukte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_FatureBlerje_Nr')); ?>:</b>
	<?php echo CHtml::encode($data->fk_FatureBlerje_Nr); ?>
	<br />

	*/ ?>

</div>