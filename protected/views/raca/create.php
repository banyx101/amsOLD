<?php
$this->breadcrumbs=array(
	'Racas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Raca', 'url'=>array('index')),
	array('label'=>'Manage Raca', 'url'=>array('admin')),
);
?>

<h1>Create Raca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>