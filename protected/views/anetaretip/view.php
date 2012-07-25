<?php
$this->breadcrumbs=array(
	'Anetaretips'=>array('index'),
	$model->idanetareTip,
);

$this->menu=array(
	array('label'=>'List Anetaretip', 'url'=>array('index')),
	array('label'=>'Create Anetaretip', 'url'=>array('create')),
	array('label'=>'Update Anetaretip', 'url'=>array('update', 'id'=>$model->idanetareTip)),
	array('label'=>'Delete Anetaretip', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idanetareTip),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anetaretip', 'url'=>array('admin')),
);
?>

<h1>View Anetaretip #<?php echo $model->idanetareTip; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idanetareTip',
		'tipi',
	),
)); ?>
