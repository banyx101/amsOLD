<?php
$this->breadcrumbs=array(
	'Kontaktes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kontakte', 'url'=>array('index')),
	array('label'=>'Manage Kontakte', 'url'=>array('admin')),
);
?>

<h1>Create Kontakte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>