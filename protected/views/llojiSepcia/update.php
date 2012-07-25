<?php
$this->breadcrumbs=array(
	'Lloji Sepcias'=>array('index'),
	$model->idllojiSepcia=>array('view','id'=>$model->idllojiSepcia),
	'Update',
);

$this->menu=array(
	array('label'=>'List LlojiSepcia', 'url'=>array('index')),
	array('label'=>'Create LlojiSepcia', 'url'=>array('create')),
	array('label'=>'View LlojiSepcia', 'url'=>array('view', 'id'=>$model->idllojiSepcia)),
	array('label'=>'Manage LlojiSepcia', 'url'=>array('admin')),
);
?>

<h1>Update LlojiSepcia <?php echo $model->idllojiSepcia; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>