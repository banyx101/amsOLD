<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idstafiShoqates'); ?>
		<?php echo $form->textField($model,'idstafiShoqates'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Persona_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pozicioni'); ?>
		<?php echo $form->textField($model,'pozicioni',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dtStart'); ?>
		<?php echo $form->textField($model,'dtStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagaNeto'); ?>
		<?php echo $form->textField($model,'pagaNeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->