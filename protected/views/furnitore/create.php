<?php
$this->breadcrumbs=array(
	'Furnitores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Furnitore', 'url'=>array('index')),
	array('label'=>'Manage Furnitore', 'url'=>array('admin')),
);
?>

<h1>Create Furnitore</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>