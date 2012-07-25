<?php
$this->breadcrumbs=array(
	'Shitjes'=>array('index'),
	$model->idShitje,
);

$this->menu=array(
	array('label'=>'List Shitje', 'url'=>array('index')),
	array('label'=>'Create Shitje', 'url'=>array('create')),
	array('label'=>'Update Shitje', 'url'=>array('update', 'id'=>$model->idShitje)),
	array('label'=>'Delete Shitje', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idShitje),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Shitje', 'url'=>array('admin')),
);
?>

<h1>View Shitje #<?php echo $model->idShitje; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idShitje',
		'dataDaljes',
		'njesia',
		'sasia',
		'cmimiShitjes',
		'shtesaNeto',
		'updatedBy',
		'shenime',
		'Produkte_idProdukte',
		'fk_FatureShitje_Nr',
	),
)); ?>
