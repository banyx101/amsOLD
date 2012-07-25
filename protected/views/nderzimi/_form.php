<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nderzimi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'matrikullBabai'); ?>
		<?php echo $form->textField($model,'matrikullBabai',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'matrikullBabai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matrikullNena'); ?>
		<?php echo $form->textField($model,'matrikullNena',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'matrikullNena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataNderzmit'); ?>
		<?php echo $form->textField($model,'dataNderzmit'); ?>
		<?php echo $form->error($model,'dataNderzmit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kryqezim'); ?>
		<?php echo $form->textArea($model,'kryqezim',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'kryqezim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'raceEPaster'); ?>
		<?php echo $form->textArea($model,'raceEPaster',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'raceEPaster'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'libriRaces'); ?>
		<?php echo $form->textField($model,'libriRaces',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'libriRaces'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genealogicCertificate'); ?>
		<?php echo $form->textField($model,'genealogicCertificate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'genealogicCertificate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->