<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kontakte-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kategoria'); ?>
		<?php echo $form->textField($model,'kategoria'); ?>
		<?php echo $form->error($model,'kategoria'); ?>
		
		<?php echo $form->hiddenfield($model,'Persona_idPersona'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rrugaNr'); ?>
		<?php echo $form->textField($model,'rrugaNr',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'rrugaNr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'komunaBashki'); ?>
		<?php echo $form->textField($model,'komunaBashki',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'komunaBashki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shteti'); ?>
		<?php echo $form->textField($model,'shteti',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'shteti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude'); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitude'); ?>
		<?php echo $form->textField($model,'latitude'); ?>
		<?php echo $form->error($model,'latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefon'); ?>
		<?php echo $form->textField($model,'telefon'); ?>
		<?php echo $form->error($model,'telefon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax'); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'web'); ?>
		<?php echo $form->textField($model,'web',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'web'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shenime'); ?>
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