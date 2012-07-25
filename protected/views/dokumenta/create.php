<?php
$this->breadcrumbs=array(
	'Dokumentas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dokumenta', 'url'=>array('index')),
	array('label'=>'Manage Dokumenta', 'url'=>array('admin')),
);
?>

<h1>Create Dokumenta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>