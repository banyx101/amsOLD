<?php
$this->breadcrumbs=array(
	'Regmjekimitditors'=>array('index'),
	$model->idRegMjekimitDitor,
);

$this->menu=array(
	array('label'=>'List Regmjekimitditor', 'url'=>array('index')),
	array('label'=>'Create Regmjekimitditor', 'url'=>array('create')),
	array('label'=>'Update Regmjekimitditor', 'url'=>array('update', 'id'=>$model->idRegMjekimitDitor)),
	array('label'=>'Delete Regmjekimitditor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRegMjekimitDitor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Regmjekimitditor', 'url'=>array('admin')),
);
?>

<h1>View Regmjekimitditor #<?php echo $model->idRegMjekimitDitor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idRegMjekimitDitor',
		'semundja',
		'medikamentiPerdorur',
		'doza',
		'dataPerdorimit',
		'updatedBy',
		'shenimeMbetjes',
		'RegKafsheve_idKafshet',
		'updateDate',
	),
)); ?>
