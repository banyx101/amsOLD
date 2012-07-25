<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matrikullBabai'); ?>
		<?php echo $form->textField($model,'matrikullBabai',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matrikullNena'); ?>
		<?php echo $form->textField($model,'matrikullNena',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataNderzmit'); ?>
		<?php echo $form->textField($model,'dataNderzmit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kryqezim'); ?>
		<?php echo $form->textArea($model,'kryqezim',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'raceEPaster'); ?>
		<?php echo $form->textArea($model,'raceEPaster',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'libriRaces'); ?>
		<?php echo $form->textField($model,'libriRaces',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genealogicCertificate'); ?>
		<?php echo $form->textField($model,'genealogicCertificate',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->