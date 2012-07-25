<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shitje-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dataDaljes'); ?>
		<?php echo $form->textField($model,'dataDaljes'); ?>
		<?php echo $form->error($model,'dataDaljes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'njesia'); ?>
		<?php echo $form->textField($model,'njesia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'njesia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sasia'); ?>
		<?php echo $form->textField($model,'sasia'); ?>
		<?php echo $form->error($model,'sasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cmimiShitjes'); ?>
		<?php echo $form->textField($model,'cmimiShitjes'); ?>
		<?php echo $form->error($model,'cmimiShitjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shtesaNeto'); ?>
		<?php echo $form->textField($model,'shtesaNeto'); ?>
		<?php echo $form->error($model,'shtesaNeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shenime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Produkte_idProdukte'); ?>
		<?php echo $form->textField($model,'Produkte_idProdukte'); ?>
		<?php echo $form->error($model,'Produkte_idProdukte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_FatureShitje_Nr'); ?>
		<?php echo $form->textField($model,'fk_FatureShitje_Nr'); ?>
		<?php echo $form->error($model,'fk_FatureShitje_Nr'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->