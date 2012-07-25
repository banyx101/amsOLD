<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dokumenta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Shoqata_idShoqata'); ?>
		<?php echo $form->textField($model,'Shoqata_idShoqata'); ?>
		<?php echo $form->error($model,'Shoqata_idShoqata'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dokEmer'); ?>
		<?php echo $form->textField($model,'dokEmer',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dokEmer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dokPershkrimi'); ?>
		<?php echo $form->textArea($model,'dokPershkrimi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dokPershkrimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dokLloji'); ?>
		<?php echo $form->textField($model,'dokLloji',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'dokLloji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dokTabelReference'); ?>
		<?php echo $form->textField($model,'dokTabelReference',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'dokTabelReference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dokReference'); ?>
		<?php echo $form->textField($model,'dokReference'); ?>
		<?php echo $form->error($model,'dokReference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filePath'); ?>
		<?php echo $form->textField($model,'filePath',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'filePath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fileSize'); ?>
		<?php echo $form->textField($model,'fileSize'); ?>
		<?php echo $form->error($model,'fileSize'); ?>
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