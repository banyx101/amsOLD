<?php
$this->breadcrumbs=array(
	'Stafi Shoqates'=>array('index'),
	$model->idstafiShoqates,
);

$this->menu=array(
	array('label'=>'List StafiShoqates', 'url'=>array('index')),
	array('label'=>'Create StafiShoqates', 'url'=>array('create')),
	array('label'=>'Update StafiShoqates', 'url'=>array('update', 'id'=>$model->idstafiShoqates)),
	array('label'=>'Delete StafiShoqates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idstafiShoqates),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StafiShoqates', 'url'=>array('admin')),
);
?>

<h1>View StafiShoqates #<?php echo $model->idstafiShoqates; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idstafiShoqates',
		'Persona_idPersona',
		'pozicioni',
		'dtStart',
		'endDate',
		'pagaNeto',
		'updateDate',
		'updatedBy',
	),
)); ?>
