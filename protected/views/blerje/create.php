<?php
$this->breadcrumbs=array(
	'Blerjes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Blerje', 'url'=>array('index')),
	array('label'=>'Manage Blerje', 'url'=>array('admin')),
);
?>

<h1>Create Blerje</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>