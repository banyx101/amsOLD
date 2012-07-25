<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagesaanetareve-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->hiddenfield($model,'Anetaret_Persona_idPersona'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shumaPaguar'); ?>
		<?php echo $form->textField($model,'shumaPaguar',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'shumaPaguar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataPageses'); ?>
		<?php //SA HERE KERKOHET TE PERDORET NJE KALENDARE (DATAPICKER MUND TE PERDORET WIDGET, SI ME POSHTE, KUJDES GJUHA ESHTE NE EXTENSIONS
			//shiko per vendndohjen: $this->widget(....CJuiDataPickerTime, dhe atje eshte percaktuar gjuha sq ( per shqip),
			//lereni bosh ose vendoet kodimi i vendit perkates shembull 'en_us', tek modeli duhet te jene dy funksione sistemi afterFind() dhe beforeValidate()
			// si tek modeli Persona i ketij Aplikimi
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'dataPageses', //attribute name
					'mode'=>'date', //use "time","date" or "datetime" (default)
					'options'=> array('dateFormat' => 'dd.mm.yy'),
					'language' => 'sq'
			));
			 		?>
		<?php echo $form->error($model,'dataPageses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lajmerimPagese'); ?>
		<?php //SA HERE KERKOHET TE PERDORET NJE KALENDARE (DATAPICKER MUND TE PERDORET WIDGET, SI ME POSHTE, KUJDES GJUHA ESHTE NE EXTENSIONS
			//shiko per vendndohjen: $this->widget(....CJuiDataPickerTime, dhe atje eshte percaktuar gjuha sq ( per shqip),
			//lereni bosh ose vendoet kodimi i vendit perkates shembull 'en_us', tek modeli duhet te jene dy funksione sistemi afterFind() dhe beforeValidate()
			// si tek modeli Persona i ketij Aplikimi
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'lajmerimPagese', //attribute name
					'mode'=>'date', //use "time","date" or "datetime" (default)
					'options'=> array('dateFormat' => 'dd.mm.yy'),
					'language' => 'sq'
			));
			 		?>
		<?php echo $form->error($model,'lajmerimPagese'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shenime'); ?>
		<?php echo $form->textArea($model,'shenime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shenime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'udatedBy'); ?>
		<?php echo $form->textField($model,'udatedBy'); ?>
		<?php echo $form->error($model,'udatedBy'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->hiddenfield($model,'updateDate'); ?>
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->