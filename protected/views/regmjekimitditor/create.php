<?php
$this->breadcrumbs=array(
	'Regmjekimitditors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Regmjekimitditor', 'url'=>array('index')),
	array('label'=>'Manage Regmjekimitditor', 'url'=>array('admin')),
);
?>

<h1>Create Regmjekimitditor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>