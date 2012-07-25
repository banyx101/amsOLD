<?php
$this->breadcrumbs=array(
	'Faturblerjes'=>array('index'),
	$model->nrFatureBlerje,
);

$this->menu=array(
	array('label'=>'List Faturblerjes', 'url'=>array('index')),
	array('label'=>'Create Faturblerjes', 'url'=>array('create')),
	array('label'=>'Update Faturblerjes', 'url'=>array('update', 'id'=>$model->nrFatureBlerje)),
	array('label'=>'Delete Faturblerjes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nrFatureBlerje),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Faturblerjes', 'url'=>array('admin')),
);
?>

<h1>View Faturblerjes #<?php echo $model->nrFatureBlerje; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nrFatureBlerje',
		'Furnitore_idFurnitore',
		'dataFatures',
		'updatedBy',
		'updateDate',
		'shenime',
		'Shoqata_idShoqata',
	),
)); ?>
