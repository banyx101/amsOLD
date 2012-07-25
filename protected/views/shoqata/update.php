<?php
$this->breadcrumbs=array(
	'Shoqatas'=>array('index'),
	$model->idShoqata=>array('view','id'=>$model->idShoqata),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shoqata', 'url'=>array('index')),
	array('label'=>'Create Shoqata', 'url'=>array('create')),
	array('label'=>'View Shoqata', 'url'=>array('view', 'id'=>$model->idShoqata)),
	array('label'=>'Manage Shoqata', 'url'=>array('admin')),
);
?>

<h1>Update Shoqata <?php echo $model->idShoqata; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>