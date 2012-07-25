<?php
$this->breadcrumbs=array(
	'Faturshitjes'=>array('index'),
	$model->nrFatureShitje,
);

$this->menu=array(
	array('label'=>'List Faturshitje', 'url'=>array('index')),
	array('label'=>'Create Faturshitje', 'url'=>array('create')),
	array('label'=>'Update Faturshitje', 'url'=>array('update', 'id'=>$model->nrFatureShitje)),
	array('label'=>'Delete Faturshitje', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nrFatureShitje),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Faturshitje', 'url'=>array('admin')),
);
?>

<h1>View Faturshitje #<?php echo $model->nrFatureShitje; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nrFatureShitje',
		'Kliente_idKliente',
		'dataFatures',
		'updatedBy',
		'updateDate',
		'faturePostuar',
		'shenime',
		'Shoqata_idShoqata',
	),
)); ?>
