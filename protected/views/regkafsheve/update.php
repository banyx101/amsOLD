<?php
$this->breadcrumbs=array(
	'Regkafsheves'=>array('index'),
	$model->idKafshet=>array('view','id'=>$model->idKafshet),
	'Update',
);

$this->menu=array(
	array('label'=>'List Regkafsheve', 'url'=>array('index')),
	array('label'=>'Create Regkafsheve', 'url'=>array('create')),
	array('label'=>'View Regkafsheve', 'url'=>array('view', 'id'=>$model->idKafshet)),
	array('label'=>'Manage Regkafsheve', 'url'=>array('admin')),
);
?>

<h1>Update Regkafsheve <?php echo $model->idKafshet; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>