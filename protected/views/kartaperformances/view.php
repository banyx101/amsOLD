<?php
$this->breadcrumbs=array(
	'Kartaperformances'=>array('index'),
	$model->idKartaPerformances,
);

$this->menu=array(
	array('label'=>'List Kartaperformances', 'url'=>array('index')),
	array('label'=>'Create Kartaperformances', 'url'=>array('create')),
	array('label'=>'Update Kartaperformances', 'url'=>array('update', 'id'=>$model->idKartaPerformances)),
	array('label'=>'Delete Kartaperformances', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idKartaPerformances),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kartaperformances', 'url'=>array('admin')),
);
?>

<h1>View Kartaperformances #<?php echo $model->idKartaPerformances; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idKartaPerformances',
		'matrikullQengja',
		'peshaLindjes',
		'dataShkeputjes',
		'peshaShkeputjes',
		'peshaNeLargim',
		'cmimiShitjes',
		'totalQengjaPerDele',
		'pjelljetEDeleve',
		'RegKafsheve_idKafshet',
	),
)); ?>
