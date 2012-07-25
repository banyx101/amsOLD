<?php
$this->breadcrumbs=array(
	'Lloji Sepcias'=>array('index'),
	$model->idllojiSepcia,
);

$this->menu=array(
	array('label'=>'List LlojiSepcia', 'url'=>array('index')),
	array('label'=>'Create LlojiSepcia', 'url'=>array('create')),
	array('label'=>'Update LlojiSepcia', 'url'=>array('update', 'id'=>$model->idllojiSepcia)),
	array('label'=>'Delete LlojiSepcia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idllojiSepcia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LlojiSepcia', 'url'=>array('admin')),
);
?>

<h1>View LlojiSepcia #<?php echo $model->idllojiSepcia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idllojiSepcia',
		'emrtimi',
		'familja',
	),
)); ?>
