<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kompania'); ?>
		<?php echo $form->textField($model,'kompania',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'kompania'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pershkrimi'); ?>
		<?php echo $form->textField($model,'pershkrimi',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pershkrimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIPT'); ?>
		<?php echo $form->textField($model,'NIPT',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NIPT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
		<?php echo $form->error($model,'updateDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPersona'); ?>
		<?php echo $form->textField($model,'idPersona'); ?>
		<?php echo $form->error($model,'idPersona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->