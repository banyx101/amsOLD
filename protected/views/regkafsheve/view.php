<?php
$this->breadcrumbs=array(
	'Regkafsheves'=>array('index'),
	$model->idKafshet,
);

$this->menu=array(
	array('label'=>'List Regkafsheve', 'url'=>array('index')),
	array('label'=>'Create Regkafsheve', 'url'=>array('create')),
	array('label'=>'Update Regkafsheve', 'url'=>array('update', 'id'=>$model->idKafshet)),
	array('label'=>'Delete Regkafsheve', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idKafshet),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Regkafsheve', 'url'=>array('admin')),
		
		array('label'=>'Regjistri i Nderzimit per kete kafshe', 'url'=>array('nderzimi/view', 'id'=>$model->idNderzimi)),
);
?>

<h1>View Regkafsheve #<?php echo $model->idKafshet; ?></h1>

<?php 
//me ane te ketyre variablave kapim emrin dhe mbiemrin e personit dhe e paraqesim si stringe, te dhenat lidhen me ORM-------------//
$idPersoni = $model->Anetaret_idAnetare;
$emri = Persona::model()->findbyPk($idPersoni)->emri;
$mbiemri= Persona::model()->findbyPk($idPersoni)->mbiemri;
$emriMbiemri=$emri ." ". $mbiemri;//fund i marrjes dhe printimit te emer mbiemer nga tabela Persona-------------------------------//

//echo CHtml::link('Shiko Regjistrin e Nderzimit',array('nderzimi/view',$id=>$model->idNderzimi)); 


$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idKafshet',
		'matrikulli',
		//'llojiSpecia',
			array(
					'name'=>'Lloji Specia',
					'value'=>$model->llojiSpecia0->emrtimi,),
		//'raca',
			array(
					'name'=>'Raca',
					'value'=>$model->raca0->raca,),
		'sasiaKafsheve',
		'dataLindjes',
		'updateDate',
		'inventariFundit',
		'updatedBy',
		//'Anetaret_idAnetare',
			array(
					'name'=>'Anetari i Lidhur',
					'value'=> $emriMbiemri,
						
			),
		'seksi',
		'Hyrje',
		'Dalje',
		'arsyejaLevizjes',
		'Shenime',
	),
)); ?>
