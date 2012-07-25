<?php
$this->breadcrumbs=array(
	'Blerjes'=>array('index'),
	$model->idBlerje=>array('view','id'=>$model->idBlerje),
	'Update',
);

$this->menu=array(
	array('label'=>'List Blerje', 'url'=>array('index')),
	array('label'=>'Create Blerje', 'url'=>array('create')),
	array('label'=>'View Blerje', 'url'=>array('view', 'id'=>$model->idBlerje)),
	array('label'=>'Manage Blerje', 'url'=>array('admin')),
);
?>

<h1>Update Blerje <?php echo $model->idBlerje; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>