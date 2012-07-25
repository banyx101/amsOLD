<?php
$this->breadcrumbs=array(
	'Stafi Shoqates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StafiShoqates', 'url'=>array('index')),
	array('label'=>'Manage StafiShoqates', 'url'=>array('admin')),
);
?>

<h1>Create StafiShoqates</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>