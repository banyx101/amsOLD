<?php
$this->breadcrumbs=array(
	'Faturblerjes'=>array('index'),
	$model->nrFatureBlerje=>array('view','id'=>$model->nrFatureBlerje),
	'Update',
);

$this->menu=array(
	array('label'=>'List Faturblerjes', 'url'=>array('index')),
	array('label'=>'Create Faturblerjes', 'url'=>array('create')),
	array('label'=>'View Faturblerjes', 'url'=>array('view', 'id'=>$model->nrFatureBlerje)),
	array('label'=>'Manage Faturblerjes', 'url'=>array('admin')),
);
?>

<h1>Update Faturblerjes <?php echo $model->nrFatureBlerje; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>