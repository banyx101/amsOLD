<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stafi-shoqates-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Persona_idPersona'); ?>
		<?php echo $form->error($model,'Persona_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pozicioni'); ?>
		<?php echo $form->textField($model,'pozicioni',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pozicioni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtStart'); ?>
		<?php echo $form->textField($model,'dtStart'); ?>
		<?php echo $form->error($model,'dtStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagaNeto'); ?>
		<?php echo $form->textField($model,'pagaNeto'); ?>
		<?php echo $form->error($model,'pagaNeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
		<?php echo $form->error($model,'updateDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->