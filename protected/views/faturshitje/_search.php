<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nrFatureShitje'); ?>
		<?php echo $form->textField($model,'nrFatureShitje'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kliente_idKliente'); ?>
		<?php echo $form->textField($model,'Kliente_idKliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataFatures'); ?>
		<?php echo $form->textField($model,'dataFatures'); ?>
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
		<?php echo $form->label($model,'faturePostuar'); ?>
		<?php echo $form->textField($model,'faturePostuar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Shoqata_idShoqata'); ?>
		<?php echo $form->textField($model,'Shoqata_idShoqata'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->