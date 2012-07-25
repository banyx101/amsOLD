<?php
$this->breadcrumbs=array(
	'Produktes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Produkte', 'url'=>array('index')),
	array('label'=>'Manage Produkte', 'url'=>array('admin')),
);
?>

<h1>Create Produkte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>