<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idShitje'); ?>
		<?php echo $form->textField($model,'idShitje'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataDaljes'); ?>
		<?php echo $form->textField($model,'dataDaljes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'njesia'); ?>
		<?php echo $form->textField($model,'njesia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sasia'); ?>
		<?php echo $form->textField($model,'sasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cmimiShitjes'); ?>
		<?php echo $form->textField($model,'cmimiShitjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shtesaNeto'); ?>
		<?php echo $form->textField($model,'shtesaNeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Produkte_idProdukte'); ?>
		<?php echo $form->textField($model,'Produkte_idProdukte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_FatureShitje_Nr'); ?>
		<?php echo $form->textField($model,'fk_FatureShitje_Nr'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->