<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idKartaPerformances'); ?>
		<?php echo $form->textField($model,'idKartaPerformances'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matrikullQengja'); ?>
		<?php echo $form->textField($model,'matrikullQengja',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peshaLindjes'); ?>
		<?php echo $form->textField($model,'peshaLindjes',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataShkeputjes'); ?>
		<?php echo $form->textField($model,'dataShkeputjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peshaShkeputjes'); ?>
		<?php echo $form->textField($model,'peshaShkeputjes',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peshaNeLargim'); ?>
		<?php echo $form->textField($model,'peshaNeLargim',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cmimiShitjes'); ?>
		<?php echo $form->textField($model,'cmimiShitjes',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalQengjaPerDele'); ?>
		<?php echo $form->textField($model,'totalQengjaPerDele'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pjelljetEDeleve'); ?>
		<?php echo $form->textField($model,'pjelljetEDeleve'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegKafsheve_idKafshet'); ?>
		<?php echo $form->textField($model,'RegKafsheve_idKafshet'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->