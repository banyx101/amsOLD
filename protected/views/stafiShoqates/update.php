<?php
$this->breadcrumbs=array(
	'Stafi Shoqates'=>array('index'),
	$model->idstafiShoqates=>array('view','id'=>$model->idstafiShoqates),
	'Update',
);

$this->menu=array(
	array('label'=>'List StafiShoqates', 'url'=>array('index')),
	array('label'=>'Create StafiShoqates', 'url'=>array('create')),
	array('label'=>'View StafiShoqates', 'url'=>array('view', 'id'=>$model->idstafiShoqates)),
	array('label'=>'Manage StafiShoqates', 'url'=>array('admin')),
);
?>

<h1>Update StafiShoqates <?php echo $model->idstafiShoqates; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>