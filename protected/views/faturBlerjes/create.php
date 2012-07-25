<?php
$this->breadcrumbs=array(
	'Faturblerjes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Faturblerjes', 'url'=>array('index')),
	array('label'=>'Manage Faturblerjes', 'url'=>array('admin')),
);
?>

<h1>Create Faturblerjes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>