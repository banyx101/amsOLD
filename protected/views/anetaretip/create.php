<?php
$this->breadcrumbs=array(
	'Anetaretips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Anetaretip', 'url'=>array('index')),
	array('label'=>'Manage Anetaretip', 'url'=>array('admin')),
);
?>

<h1>Create Anetaretip</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>