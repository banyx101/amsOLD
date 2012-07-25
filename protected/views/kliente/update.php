<?php
$this->breadcrumbs=array(
	'Klientes'=>array('index'),
	$model->idKliente=>array('view','id'=>$model->idKliente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kliente', 'url'=>array('index')),
	array('label'=>'Create Kliente', 'url'=>array('create')),
	array('label'=>'View Kliente', 'url'=>array('view', 'id'=>$model->idKliente)),
	array('label'=>'Manage Kliente', 'url'=>array('admin')),
);
?>

<h1>Update Kliente <?php echo $model->idKliente; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>