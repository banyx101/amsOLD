<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idKafshet'); ?>
		<?php echo $form->textField($model,'idKafshet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matrikulli'); ?>
		<?php echo $form->textField($model,'matrikulli',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'llojiSpecia'); ?>
		<?php echo $form->textField($model,'llojiSpecia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'raca'); ?>
		<?php echo $form->textField($model,'raca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sasiaKafsheve'); ?>
		<?php echo $form->textField($model,'sasiaKafsheve'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataLindjes'); ?>
		<?php echo $form->textField($model,'dataLindjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inventariFundit'); ?>
		<?php echo $form->textField($model,'inventariFundit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Anetaret_idAnetare'); ?>
		<?php echo $form->textField($model,'Anetaret_idAnetare'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seksi'); ?>
		<?php echo $form->textField($model,'seksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hyrje'); ?>
		<?php echo $form->textField($model,'Hyrje',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dalje'); ?>
		<?php echo $form->textField($model,'Dalje',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arsyejaLevizjes'); ?>
		<?php echo $form->textField($model,'arsyejaLevizjes',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idNderzimi'); ?>
		<?php echo $form->textField($model,'idNderzimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Shenime'); ?>
		<?php echo $form->textArea($model,'Shenime',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->