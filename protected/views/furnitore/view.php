<?php
$this->breadcrumbs=array(
	'Furnitores'=>array('index'),
	$model->idFurnitore,
);

$this->menu=array(
	array('label'=>'List Furnitore', 'url'=>array('index')),
	array('label'=>'Create Furnitore', 'url'=>array('create')),
	array('label'=>'Update Furnitore', 'url'=>array('update', 'id'=>$model->idFurnitore)),
	array('label'=>'Delete Furnitore', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFurnitore),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Furnitore', 'url'=>array('admin')),
);
?>

<h1>View Furnitore #<?php echo $model->idFurnitore; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFurnitore',
		'kompania',
		'NIPT',
		'idPersona',
		'updateDate',
	),
)); ?>
