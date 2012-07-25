<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idBlerje'); ?>
		<?php echo $form->textField($model,'idBlerje'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataHyrjes'); ?>
		<?php echo $form->textField($model,'dataHyrjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sasia'); ?>
		<?php echo $form->textField($model,'sasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'njesiaMatese'); ?>
		<?php echo $form->textField($model,'njesiaMatese',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cmimiBlerjes'); ?>
		<?php echo $form->textField($model,'cmimiBlerjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'burimiParave'); ?>
		<?php echo $form->textField($model,'burimiParave',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Produkte_idProdukte'); ?>
		<?php echo $form->textField($model,'Produkte_idProdukte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_FatureBlerje_Nr'); ?>
		<?php echo $form->textField($model,'fk_FatureBlerje_Nr'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->