<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produkte-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'emriProduktit'); ?>
		<?php echo $form->textField($model,'emriProduktit',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'emriProduktit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pershkrimi'); ?>
		<?php echo $form->textField($model,'pershkrimi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pershkrimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
		<?php echo $form->error($model,'updateDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sasia'); ?>
		<?php echo $form->textField($model,'sasia'); ?>
		<?php echo $form->error($model,'sasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'njesiaMatese'); ?>
		<?php echo $form->textField($model,'njesiaMatese',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'njesiaMatese'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idFurnitori'); ?>
		<?php echo $form->textField($model,'idFurnitori'); ?>
		<?php echo $form->error($model,'idFurnitori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produktSherbim'); ?>
		<?php echo $form->textField($model,'produktSherbim',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'produktSherbim'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->