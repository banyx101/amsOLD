<?php
$this->breadcrumbs=array(
	'Anetaretips'=>array('index'),
	$model->idanetareTip=>array('view','id'=>$model->idanetareTip),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anetaretip', 'url'=>array('index')),
	array('label'=>'Create Anetaretip', 'url'=>array('create')),
	array('label'=>'View Anetaretip', 'url'=>array('view', 'id'=>$model->idanetareTip)),
	array('label'=>'Manage Anetaretip', 'url'=>array('admin')),
);
?>

<h1>Update Anetaretip <?php echo $model->idanetareTip; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>