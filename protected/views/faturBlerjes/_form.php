<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faturblerjes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Furnitore_idFurnitore'); ?>
		<?php echo $form->textField($model,'Furnitore_idFurnitore'); ?>
		<?php echo $form->error($model,'Furnitore_idFurnitore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataFatures'); ?>
		<?php echo $form->textField($model,'dataFatures'); ?>
		<?php echo $form->error($model,'dataFatures'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shenime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Shoqata_idShoqata'); ?>
		<?php echo $form->textField($model,'Shoqata_idShoqata'); ?>
		<?php echo $form->error($model,'Shoqata_idShoqata'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->