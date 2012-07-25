<?php
$this->breadcrumbs=array(
	'Produktes'=>array('index'),
	$model->idProdukte,
);

$this->menu=array(
	array('label'=>'List Produkte', 'url'=>array('index')),
	array('label'=>'Create Produkte', 'url'=>array('create')),
	array('label'=>'Update Produkte', 'url'=>array('update', 'id'=>$model->idProdukte)),
	array('label'=>'Delete Produkte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProdukte),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Produkte', 'url'=>array('admin')),
);
?>

<h1>View Produkte #<?php echo $model->idProdukte; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProdukte',
		'emriProduktit',
		'pershkrimi',
		'updateDate',
		'sasia',
		'njesiaMatese',
		'idFurnitori',
		'updatedBy',
		'produktSherbim',
	),
)); ?>
