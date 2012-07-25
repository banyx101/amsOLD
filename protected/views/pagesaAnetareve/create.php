<?php
$this->breadcrumbs=array(
	'Pagesaanetareves'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pagesaanetareve', 'url'=>array('index')),
	array('label'=>'Manage Pagesaanetareve', 'url'=>array('admin')),
);
?>

<h1>Create Pagesaanetareve</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>