<?php
$this->breadcrumbs=array(
	'Racas'=>array('index'),
	$model->idraca=>array('view','id'=>$model->idraca),
	'Update',
);

$this->menu=array(
	array('label'=>'List Raca', 'url'=>array('index')),
	array('label'=>'Create Raca', 'url'=>array('create')),
	array('label'=>'View Raca', 'url'=>array('view', 'id'=>$model->idraca)),
	array('label'=>'Manage Raca', 'url'=>array('admin')),
);
?>

<h1>Update Raca <?php echo $model->idraca; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>