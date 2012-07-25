<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'regmjekimitditor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'semundja'); ?>
		<?php echo $form->textField($model,'semundja',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'semundja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medikamentiPerdorur'); ?>
		<?php echo $form->textField($model,'medikamentiPerdorur',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'medikamentiPerdorur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doza'); ?>
		<?php echo $form->textField($model,'doza',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'doza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataPerdorimit'); ?>
		<?php echo $form->textField($model,'dataPerdorimit'); ?>
		<?php echo $form->error($model,'dataPerdorimit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shenimeMbetjes'); ?>
		<?php echo $form->textArea($model,'shenimeMbetjes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shenimeMbetjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegKafsheve_idKafshet'); ?>
		<?php echo $form->textField($model,'RegKafsheve_idKafshet'); ?>
		<?php echo $form->error($model,'RegKafsheve_idKafshet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
		<?php echo $form->error($model,'updateDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->