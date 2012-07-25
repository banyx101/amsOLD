<?php
$this->breadcrumbs=array(
	'Dokumentas'=>array('index'),
	$model->idDokumenta=>array('view','id'=>$model->idDokumenta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dokumenta', 'url'=>array('index')),
	array('label'=>'Create Dokumenta', 'url'=>array('create')),
	array('label'=>'View Dokumenta', 'url'=>array('view', 'id'=>$model->idDokumenta)),
	array('label'=>'Manage Dokumenta', 'url'=>array('admin')),
);
?>

<h1>Update Dokumenta <?php echo $model->idDokumenta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>