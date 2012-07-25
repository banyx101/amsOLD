<?php
$this->breadcrumbs=array(
	'Kartaperformances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kartaperformances', 'url'=>array('index')),
	array('label'=>'Manage Kartaperformances', 'url'=>array('admin')),
);
?>

<h1>Create Kartaperformances</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>