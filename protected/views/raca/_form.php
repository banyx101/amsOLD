<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'raca-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idraca'); ?>
		<?php echo $form->textField($model,'idraca'); ?>
		<?php echo $form->error($model,'idraca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'raca'); ?>
		<?php echo $form->textField($model,'raca',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'raca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familia'); ?>
		<?php echo $form->textField($model,'familia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'familia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->