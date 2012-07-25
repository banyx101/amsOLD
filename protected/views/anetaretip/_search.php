<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idanetareTip'); ?>
		<?php echo $form->textField($model,'idanetareTip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipi'); ?>
		<?php echo $form->textField($model,'tipi',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->