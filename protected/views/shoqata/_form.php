<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shoqata-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kodiShoqates'); ?>
		<?php echo $form->textField($model,'kodiShoqates',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'kodiShoqates'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emriShoqates'); ?>
		<?php echo $form->textField($model,'emriShoqates',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emriShoqates'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pershkrimi'); ?>
		<?php echo $form->textArea($model,'pershkrimi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pershkrimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'closeDate'); ?>
		<?php echo $form->textField($model,'closeDate'); ?>
		<?php echo $form->error($model,'closeDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shoqateStatus'); ?>
		<?php echo $form->textField($model,'shoqateStatus'); ?>
		<?php echo $form->error($model,'shoqateStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vendimiGjykates'); ?>
		<?php echo $form->textField($model,'vendimiGjykates',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'vendimiGjykates'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
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