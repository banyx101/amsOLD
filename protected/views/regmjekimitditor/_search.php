<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idRegMjekimitDitor'); ?>
		<?php echo $form->textField($model,'idRegMjekimitDitor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'semundja'); ?>
		<?php echo $form->textField($model,'semundja',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medikamentiPerdorur'); ?>
		<?php echo $form->textField($model,'medikamentiPerdorur',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doza'); ?>
		<?php echo $form->textField($model,'doza',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataPerdorimit'); ?>
		<?php echo $form->textField($model,'dataPerdorimit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shenimeMbetjes'); ?>
		<?php echo $form->textArea($model,'shenimeMbetjes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegKafsheve_idKafshet'); ?>
		<?php echo $form->textField($model,'RegKafsheve_idKafshet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->