<?php
$this->breadcrumbs=array(
	'Nderzimis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nderzimi', 'url'=>array('index')),
	array('label'=>'Manage Nderzimi', 'url'=>array('admin')),
);
?>

<h1>Create Nderzimi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>