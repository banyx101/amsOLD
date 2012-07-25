<?php
$this->breadcrumbs=array(
	'Shitjes'=>array('index'),
	$model->idShitje=>array('view','id'=>$model->idShitje),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shitje', 'url'=>array('index')),
	array('label'=>'Create Shitje', 'url'=>array('create')),
	array('label'=>'View Shitje', 'url'=>array('view', 'id'=>$model->idShitje)),
	array('label'=>'Manage Shitje', 'url'=>array('admin')),
);
?>

<h1>Update Shitje <?php echo $model->idShitje; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>