<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kartaperformances-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'matrikullQengja'); ?>
		<?php echo $form->textField($model,'matrikullQengja',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'matrikullQengja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peshaLindjes'); ?>
		<?php echo $form->textField($model,'peshaLindjes',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'peshaLindjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataShkeputjes'); ?>
		<?php echo $form->textField($model,'dataShkeputjes'); ?>
		<?php echo $form->error($model,'dataShkeputjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peshaShkeputjes'); ?>
		<?php echo $form->textField($model,'peshaShkeputjes',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'peshaShkeputjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peshaNeLargim'); ?>
		<?php echo $form->textField($model,'peshaNeLargim',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'peshaNeLargim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cmimiShitjes'); ?>
		<?php echo $form->textField($model,'cmimiShitjes',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cmimiShitjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalQengjaPerDele'); ?>
		<?php echo $form->textField($model,'totalQengjaPerDele'); ?>
		<?php echo $form->error($model,'totalQengjaPerDele'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pjelljetEDeleve'); ?>
		<?php echo $form->textField($model,'pjelljetEDeleve'); ?>
		<?php echo $form->error($model,'pjelljetEDeleve'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegKafsheve_idKafshet'); ?>
		<?php echo $form->textField($model,'RegKafsheve_idKafshet'); ?>
		<?php echo $form->error($model,'RegKafsheve_idKafshet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->