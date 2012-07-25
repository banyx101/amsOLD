<?php
$this->breadcrumbs=array(
	'Nderzimis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nderzimi', 'url'=>array('index')),
	array('label'=>'Create Nderzimi', 'url'=>array('create')),
	array('label'=>'View Nderzimi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nderzimi', 'url'=>array('admin')),
);
?>

<h1>Update Nderzimi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>