<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blerje-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idBlerje'); ?>
		<?php echo $form->textField($model,'idBlerje'); ?>
		<?php echo $form->error($model,'idBlerje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataHyrjes'); ?>
		<?php echo $form->textField($model,'dataHyrjes'); ?>
		<?php echo $form->error($model,'dataHyrjes'); ?>
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
		<?php echo $form->labelEx($model,'cmimiBlerjes'); ?>
		<?php echo $form->textField($model,'cmimiBlerjes'); ?>
		<?php echo $form->error($model,'cmimiBlerjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shenime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'burimiParave'); ?>
		<?php echo $form->textField($model,'burimiParave',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'burimiParave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Produkte_idProdukte'); ?>
		<?php echo $form->textField($model,'Produkte_idProdukte'); ?>
		<?php echo $form->error($model,'Produkte_idProdukte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_FatureBlerje_Nr'); ?>
		<?php echo $form->textField($model,'fk_FatureBlerje_Nr'); ?>
		<?php echo $form->error($model,'fk_FatureBlerje_Nr'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->