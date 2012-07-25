<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProdukte'); ?>
		<?php echo $form->textField($model,'idProdukte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emriProduktit'); ?>
		<?php echo $form->textField($model,'emriProduktit',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pershkrimi'); ?>
		<?php echo $form->textField($model,'pershkrimi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
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
		<?php echo $form->label($model,'idFurnitori'); ?>
		<?php echo $form->textField($model,'idFurnitori'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produktSherbim'); ?>
		<?php echo $form->textField($model,'produktSherbim',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->