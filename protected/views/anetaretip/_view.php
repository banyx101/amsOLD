<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idanetareTip')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idanetareTip), array('view', 'id'=>$data->idanetareTip)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipi')); ?>:</b>
	<?php echo CHtml::encode($data->tipi); ?>
	<br />


</div>