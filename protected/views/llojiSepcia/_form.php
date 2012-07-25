<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lloji-sepcia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idllojiSepcia'); ?>
		<?php echo $form->textField($model,'idllojiSepcia'); ?>
		<?php echo $form->error($model,'idllojiSepcia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emrtimi'); ?>
		<?php echo $form->textField($model,'emrtimi',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emrtimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familja'); ?>
		<?php echo $form->textField($model,'familja',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'familja'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->