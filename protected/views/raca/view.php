<?php
$this->breadcrumbs=array(
	'Racas'=>array('index'),
	$model->idraca,
);

$this->menu=array(
	array('label'=>'List Raca', 'url'=>array('index')),
	array('label'=>'Create Raca', 'url'=>array('create')),
	array('label'=>'Update Raca', 'url'=>array('update', 'id'=>$model->idraca)),
	array('label'=>'Delete Raca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idraca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Raca', 'url'=>array('admin')),
);
?>

<h1>View Raca #<?php echo $model->idraca; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idraca',
		'raca',
		'familia',
	),
)); ?>
