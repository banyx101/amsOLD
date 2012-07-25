<?php
$this->breadcrumbs=array(
	'Kartaperformances'=>array('index'),
	$model->idKartaPerformances=>array('view','id'=>$model->idKartaPerformances),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kartaperformances', 'url'=>array('index')),
	array('label'=>'Create Kartaperformances', 'url'=>array('create')),
	array('label'=>'View Kartaperformances', 'url'=>array('view', 'id'=>$model->idKartaPerformances)),
	array('label'=>'Manage Kartaperformances', 'url'=>array('admin')),
);
?>

<h1>Update Kartaperformances <?php echo $model->idKartaPerformances; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>