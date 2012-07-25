<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idllojiSepcia'); ?>
		<?php echo $form->textField($model,'idllojiSepcia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emrtimi'); ?>
		<?php echo $form->textField($model,'emrtimi',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familja'); ?>
		<?php echo $form->textField($model,'familja',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->