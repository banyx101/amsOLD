<?php
$this->breadcrumbs=array(
	'Faturshitjes'=>array('index'),
	$model->nrFatureShitje=>array('view','id'=>$model->nrFatureShitje),
	'Update',
);

$this->menu=array(
	array('label'=>'List Faturshitje', 'url'=>array('index')),
	array('label'=>'Create Faturshitje', 'url'=>array('create')),
	array('label'=>'View Faturshitje', 'url'=>array('view', 'id'=>$model->nrFatureShitje)),
	array('label'=>'Manage Faturshitje', 'url'=>array('admin')),
);
?>

<h1>Update Faturshitje <?php echo $model->nrFatureShitje; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>