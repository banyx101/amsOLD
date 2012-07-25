<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idShoqata'); ?>
		<?php echo $form->textField($model,'idShoqata'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kodiShoqates'); ?>
		<?php echo $form->textField($model,'kodiShoqates',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emriShoqates'); ?>
		<?php echo $form->textField($model,'emriShoqates',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pershkrimi'); ?>
		<?php echo $form->textArea($model,'pershkrimi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'closeDate'); ?>
		<?php echo $form->textField($model,'closeDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shoqateStatus'); ?>
		<?php echo $form->textField($model,'shoqateStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vendimiGjykates'); ?>
		<?php echo $form->textField($model,'vendimiGjykates',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
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