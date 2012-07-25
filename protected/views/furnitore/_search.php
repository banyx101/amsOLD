<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idFurnitore'); ?>
		<?php echo $form->textField($model,'idFurnitore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kompania'); ?>
		<?php echo $form->textField($model,'kompania',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIPT'); ?>
		<?php echo $form->textField($model,'NIPT',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPersona'); ?>
		<?php echo $form->textField($model,'idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->