<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Persona_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anetareTip_idanetareTip'); ?>
		<?php echo $form->textField($model,'anetareTip_idanetareTip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anetarKode'); ?>
		<?php echo $form->textField($model,'anetarKode',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regDate'); ?>
		<?php echo $form->textField($model,'regDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anetarStatus'); ?>
		<?php echo $form->textField($model,'anetarStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pronarMbajtes'); ?>
		<?php echo $form->textField($model,'pronarMbajtes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipiProdhimit'); ?>
		<?php echo $form->textField($model,'tipiProdhimit',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateUpdate'); ?>
		<?php echo $form->textField($model,'dateUpdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->