<?php
$this->breadcrumbs=array(
	'Faturshitjes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Faturshitje', 'url'=>array('index')),
	array('label'=>'Manage Faturshitje', 'url'=>array('admin')),
);
?>

<h1>Create Faturshitje</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>