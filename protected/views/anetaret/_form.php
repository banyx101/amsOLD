<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anetaret-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kodiFermes'); ?>
		<?php echo $form->textField($model,'kodiFermes'); ?>
		<?php echo $form->error($model,'kodiFermes'); ?>
		
		<?php echo $form->hiddenfield($model,'Persona_idPersona'); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anetareTip_idanetareTip'); ?>
		<?php echo $form->dropDownList($model,'anetareTip_idanetareTip', CHtml::listData(Anetaretip::model()->findAll(),
				 'idanetareTip', 'tipi'), array('empty'=>'--Ju lutem zgjidh--'));?>
		<?php echo $form->error($model,'anetareTip_idanetareTip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anetarKode'); ?>
		<?php echo $form->textField($model,'anetarKode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'anetarKode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regDate'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
    			$this->widget('CJuiDateTimePicker',array(
        		'model'=>$model, //Model object
        		'attribute'=>'regDate', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
    					'options'=> array('dateFormat' => 'dd.mm.yy'),
    					'language' => 'sq' 
    				
   			 ));
		
		?>
		<?php echo $form->error($model,'regDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anetarStatus'); ?>
		<?php echo $form->dropDownList($model,'anetarStatus', $model->getAnetareStatus()); ?>
		<?php echo $form->error($model,'anetarStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pronarMbajtes'); ?>
		<?php echo $form->dropDownList($model,'pronarMbajtes',$model->getpronarMbajtes()); ?>
		<?php echo $form->error($model,'pronarMbajtes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipiProdhimit'); ?>
		<?php echo $form->dropDownList($model,'tipiProdhimit', $model->getTipiProdhimit()); ?>
		<?php echo $form->error($model,'tipiProdhimit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->hiddenfield($model,'dateUpdate'); ?>
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->