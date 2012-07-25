<?php
$this->breadcrumbs=array(
	'Shoqatas'=>array('index'),
	$model->idShoqata,
);

$this->menu=array(
	array('label'=>'List Shoqata', 'url'=>array('index')),
	array('label'=>'Create Shoqata', 'url'=>array('create')),
	array('label'=>'Update Shoqata', 'url'=>array('update', 'id'=>$model->idShoqata)),
	array('label'=>'Delete Shoqata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idShoqata),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Shoqata', 'url'=>array('admin')),
);
?>

<h1>View Shoqata #<?php echo $model->idShoqata; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idShoqata',
		'kodiShoqates',
		'emriShoqates',
		'pershkrimi',
		'startDate',
		'closeDate',
		'shoqateStatus',
		'vendimiGjykates',
		'updatedBy',
		'updateDate',
	),
)); ?>
