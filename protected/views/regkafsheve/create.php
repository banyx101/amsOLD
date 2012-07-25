<?php
$this->breadcrumbs=array(
	'Regkafsheves'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Regkafsheve', 'url'=>array('index')),
	array('label'=>'Manage Regkafsheve', 'url'=>array('admin')),
);
?>

<h1>Create Regkafsheve</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>