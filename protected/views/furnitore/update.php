<?php
$this->breadcrumbs=array(
	'Furnitores'=>array('index'),
	$model->idFurnitore=>array('view','id'=>$model->idFurnitore),
	'Update',
);

$this->menu=array(
	array('label'=>'List Furnitore', 'url'=>array('index')),
	array('label'=>'Create Furnitore', 'url'=>array('create')),
	array('label'=>'View Furnitore', 'url'=>array('view', 'id'=>$model->idFurnitore)),
	array('label'=>'Manage Furnitore', 'url'=>array('admin')),
);
?>

<h1>Update Furnitore <?php echo $model->idFurnitore; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>