<?php
$this->breadcrumbs=array(
	'Produktes'=>array('index'),
	$model->idProdukte=>array('view','id'=>$model->idProdukte),
	'Update',
);

$this->menu=array(
	array('label'=>'List Produkte', 'url'=>array('index')),
	array('label'=>'Create Produkte', 'url'=>array('create')),
	array('label'=>'View Produkte', 'url'=>array('view', 'id'=>$model->idProdukte)),
	array('label'=>'Manage Produkte', 'url'=>array('admin')),
);
?>

<h1>Update Produkte <?php echo $model->idProdukte; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>