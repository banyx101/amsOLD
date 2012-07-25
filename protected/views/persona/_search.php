<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPersona'); ?>
		<?php echo $form->textField($model,'idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Shoqata_idShoqata'); ?>
		<?php echo $form->textField($model,'Shoqata_idShoqata'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emri'); ?>
		<?php echo $form->textField($model,'emri',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mbiemri'); ?>
		<?php echo $form->textField($model,'mbiemri',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateLindja'); ?>
		<?php echo $form->textField($model,'dateLindja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atesia'); ?>
		<?php echo $form->textField($model,'atesia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regDate'); ?>
		<?php echo $form->textField($model,'regDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dokumentID'); ?>
		<?php echo $form->textField($model,'dokumentID',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->