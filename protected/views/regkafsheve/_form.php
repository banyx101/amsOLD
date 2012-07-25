<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'regkafsheve-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'matrikulli'); ?>
		<?php echo $form->textField($model,'matrikulli',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'matrikulli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'llojiSpecia'); ?>
		<?php echo $form->dropDownList($model,'llojiSpecia', CHtml::listData(LlojiSepcia::model()->findAll(),
				 'idllojiSepcia', 'emrtimi'), array('empty'=>'--Ju lutem zgjidh--')); ?>
		<?php echo $form->error($model,'llojiSpecia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'raca'); ?>
		<?php echo $form->dropDownList($model,'raca',  CHtml::listData(Raca::model()->findAll(),
				 'idraca', 'raca'), array('empty'=>'--Ju lutem zgjidh--')); ?>
		<?php echo $form->error($model,'raca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sasiaKafsheve'); ?>
		<?php echo $form->textField($model,'sasiaKafsheve'); ?>
		<?php echo $form->error($model,'sasiaKafsheve'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataLindjes'); ?>
		<?php //SA HERE KERKOHET TE PERDORET NJE KALENDARE (DATAPICKER MUND TE PERDORET WIDGET, SI ME POSHTE, KUJDES GJUHA ESHTE NE EXTENSIONS
			//shiko per vendndohjen: $this->widget(....CJuiDataPickerTime, dhe atje eshte percaktuar gjuha sq ( per shqip),
			//lereni bosh ose vendoet kodimi i vendit perkates shembull 'en_us', tek modeli duhet te jene dy funksione sistemi afterFind() dhe beforeValidate()
			// si tek modeli Persona i ketij Aplikimi
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'dataLindjes', //attribute name
					'mode'=>'date', //use "time","date" or "datetime" (default)
					'options'=> array('dateFormat' => 'dd.mm.yy'),
					'language' => 'sq'
			));
			 		?>
		<?php echo $form->error($model,'dataLindjes'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->hiddenfield($model,'updateDate'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inventariFundit'); ?>
	<?php //SA HERE KERKOHET TE PERDORET NJE KALENDARE (DATAPICKER MUND TE PERDORET WIDGET, SI ME POSHTE, KUJDES GJUHA ESHTE NE EXTENSIONS
			//shiko per vendndohjen: $this->widget(....CJuiDataPickerTime, dhe atje eshte percaktuar gjuha sq ( per shqip),
			//lereni bosh ose vendoet kodimi i vendit perkates shembull 'en_us', tek modeli duhet te jene dy funksione sistemi afterFind() dhe beforeValidate()
			// si tek modeli Persona i ketij Aplikimi
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'inventariFundit', //attribute name
					'mode'=>'date', //use "time","date" or "datetime" (default)
					'options'=> array('dateFormat' => 'dd.mm.yy'),
					'language' => 'sq'
			));
			 		?>
		<?php echo $form->error($model,'inventariFundit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->hiddenfield($model,'Anetaret_idAnetare'); ?>
		<?php //motivi i berjes hiddenfield te kesaj fushe lidhet me deklarimin ne controllerin regkafsheve i cili ne create() ka percaktuar parambushjen e tij me cfare vjen nga ngarkoPersona() ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seksi'); ?>
		<?php echo $form->dropDownList($model,'seksi', $model->getSexi()); ?>
		<?php echo $form->error($model,'seksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Hyrje'); ?>
		<?php echo $form->textField($model,'Hyrje',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Hyrje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dalje'); ?>
		<?php echo $form->textField($model,'Dalje',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Dalje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arsyejaLevizjes'); ?>
		<?php echo $form->dropDownList($model,'arsyejaLevizjes', $model->getarsyejaLevizjes()); ?>
		<?php echo $form->error($model,'arsyejaLevizjes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idNderzimi'); ?>
		<?php echo $form->textField($model,'idNderzimi'); ?>
		<?php echo $form->error($model,'idNderzimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Shenime'); ?>
		<?php echo $form->textArea($model,'Shenime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Shenime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->