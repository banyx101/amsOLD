<?php
$this->breadcrumbs=array(
	'Regmjekimitditors'=>array('index'),
	$model->idRegMjekimitDitor=>array('view','id'=>$model->idRegMjekimitDitor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Regmjekimitditor', 'url'=>array('index')),
	array('label'=>'Create Regmjekimitditor', 'url'=>array('create')),
	array('label'=>'View Regmjekimitditor', 'url'=>array('view', 'id'=>$model->idRegMjekimitDitor)),
	array('label'=>'Manage Regmjekimitditor', 'url'=>array('admin')),
);
?>

<h1>Update Regmjekimitditor <?php echo $model->idRegMjekimitDitor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>