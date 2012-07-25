<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idraca'); ?>
		<?php echo $form->textField($model,'idraca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'raca'); ?>
		<?php echo $form->textField($model,'raca',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familia'); ?>
		<?php echo $form->textField($model,'familia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->