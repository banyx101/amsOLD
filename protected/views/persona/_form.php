
<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	'enableAjaxValidation'=>true,
));

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <table><tr>
    <td>
		<?php echo $form->labelEx($model,'Shoqata_idShoqata'); ?>
		<?php echo $form->dropDownList($model,'Shoqata_idShoqata', CHtml::listData(Shoqata::model()->findAll(),
				 'idShoqata', 'emriShoqates'), array('empty'=>'--Ju lutem zgjidh--'));?>
		<?php echo $form->error($model,'Shoqata_idShoqata'); ?>
     </td>
     </tr>
     <tr>
     <td>
        <?php echo $form->labelEx($model,'emri'); ?>
		<?php echo $form->textField($model,'emri',array('size'=>30,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emri'); ?>
     </td>
     <td>
        <?php echo $form->labelEx($model,'mbiemri'); ?>
		<?php echo $form->textField($model,'mbiemri',array('size'=>30,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mbiemri'); ?>
        </td>
     </tr>
     <tr>
     	<td>
        <?php echo $form->labelEx($model,'atesia'); ?>
		<?php echo $form->textField($model,'atesia',array('size'=>30,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'atesia'); ?>
        </td>
        <td>
        <?php echo $form->labelEx($model,'dateLindja'); ?>
        <?php //SA HERE KERKOHET TE PERDORET NJE KALENDARE (DATAPICKER MUND TE PERDORET WIDGET, SI ME POSHTE, KUJDES GJUHA ESHTE NE EXTENSIONS
			//shiko per vendndohjen: $this->widget(....CJuiDataPickerTime, dhe atje eshte percaktuar gjuha sq ( per shqip),
			//lereni bosh ose vendoet kodimi i vendit perkates shembull 'en_us', tek modeli duhet te jene dy funksione sistemi afterFind() dhe beforeValidate()
			// si tek modeli Persona i ketij Aplikimi
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
					'model'=>$model, //Model object
					'attribute'=>'dateLindja', //attribute name
					'mode'=>'date', //use "time","date" or "datetime" (default)
					'options'=> array('dateFormat' => 'dd.mm.yy'),
					'language' => 'sq'
			));
			 		?>
        
		<?php // Ndryshim per kalendarin// echo $form->textField($model,'dateLindja'); ?>
		<?php echo $form->error($model,'dateLindja'); ?>
        </td>
        <td>
        <?php echo $form->labelEx($model,'dokumentID'); ?>
		<?php echo $form->textField($model,'dokumentID',array('size'=>20,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'dokumentID'); ?>
        </td>
     
     </tr>
      <tr>
     	<td>
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
		
		
		<?php echo $form->hiddenfield($model,'updatedBy'); ?>
		
        </td>
        <td>
         <?php echo $form->labelEx($model,'gender'); ?>
		<?php 
		$gjinia = array('M'=>'Mashkull', 'F'=>'Femer ');
		echo $form->radioButtonList($model,'gender', $gjinia, array('separator'=>' ', 'labelOptions'=>array('style'=>'float:left;'), 'style'=>'float:left;'));
		
		?>
		<?php echo $form->error($model,'gender'); ?>
		
		
		<?php echo $form->hiddenfield($model,'updateDate'); ?>
		
        </td>
        <td>
        
        </td>
     
     </tr>
        </table>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->