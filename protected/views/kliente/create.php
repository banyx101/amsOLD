<?php
$this->breadcrumbs=array(
	'Klientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kliente', 'url'=>array('index')),
	array('label'=>'Manage Kliente', 'url'=>array('admin')),
);
?>

<h1>Create Kliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>