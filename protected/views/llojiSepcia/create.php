<?php
$this->breadcrumbs=array(
	'Lloji Sepcias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LlojiSepcia', 'url'=>array('index')),
	array('label'=>'Manage LlojiSepcia', 'url'=>array('admin')),
);
?>

<h1>Create LlojiSepcia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>