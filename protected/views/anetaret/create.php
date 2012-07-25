<?php
$this->breadcrumbs=array(
	'Anetarets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Anetaret', 'url'=>array('index')),
	array('label'=>'Manage Anetaret', 'url'=>array('admin')),
);
?>

<h1>Create Anetaret</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>