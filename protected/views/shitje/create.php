<?php
$this->breadcrumbs=array(
	'Shitjes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Shitje', 'url'=>array('index')),
	array('label'=>'Manage Shitje', 'url'=>array('admin')),
);
?>

<h1>Create Shitje</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>