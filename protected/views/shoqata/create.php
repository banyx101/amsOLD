<?php
$this->breadcrumbs=array(
	'Shoqatas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Shoqata', 'url'=>array('index')),
	array('label'=>'Manage Shoqata', 'url'=>array('admin')),
);
?>

<h1>Create Shoqata</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>