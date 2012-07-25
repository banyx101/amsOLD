<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anetaretip-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipi'); ?>
		<?php echo $form->textField($model,'tipi',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->