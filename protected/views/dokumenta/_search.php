<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDokumenta'); ?>
		<?php echo $form->textField($model,'idDokumenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Shoqata_idShoqata'); ?>
		<?php echo $form->textField($model,'Shoqata_idShoqata'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dokEmer'); ?>
		<?php echo $form->textField($model,'dokEmer',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dokPershkrimi'); ?>
		<?php echo $form->textArea($model,'dokPershkrimi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dokLloji'); ?>
		<?php echo $form->textField($model,'dokLloji',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dokTabelReference'); ?>
		<?php echo $form->textField($model,'dokTabelReference',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dokReference'); ?>
		<?php echo $form->textField($model,'dokReference'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filePath'); ?>
		<?php echo $form->textField($model,'filePath',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fileSize'); ?>
		<?php echo $form->textField($model,'fileSize'); ?>
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