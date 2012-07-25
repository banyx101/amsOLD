<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpagesaAnetareve'); ?>
		<?php echo $form->textField($model,'idpagesaAnetareve'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Anetaret_Persona_idPersona'); ?>
		<?php echo $form->textField($model,'Anetaret_Persona_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shumaPaguar'); ?>
		<?php echo $form->textField($model,'shumaPaguar',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataPageses'); ?>
		<?php echo $form->textField($model,'dataPageses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lajmerimPagese'); ?>
		<?php echo $form->textField($model,'lajmerimPagese'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'udatedBy'); ?>
		<?php echo $form->textField($model,'udatedBy'); ?>
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