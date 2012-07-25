<?php
$this->breadcrumbs=array(
	'Klientes'=>array('index'),
	$model->idKliente,
);

$this->menu=array(
	array('label'=>'List Kliente', 'url'=>array('index')),
	array('label'=>'Create Kliente', 'url'=>array('create')),
	array('label'=>'Update Kliente', 'url'=>array('update', 'id'=>$model->idKliente)),
	array('label'=>'Delete Kliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idKliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kliente', 'url'=>array('admin')),
);
?>

<h1>View Kliente #<?php echo $model->idKliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idKliente',
		'kompania',
		'pershkrimi',
		'NIPT',
		'updateDate',
		'idPersona',
	),
)); ?>
