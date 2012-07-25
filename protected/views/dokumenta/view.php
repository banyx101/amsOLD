<?php
$this->breadcrumbs=array(
	'Dokumentas'=>array('index'),
	$model->idDokumenta,
);

$this->menu=array(
	array('label'=>'List Dokumenta', 'url'=>array('index')),
	array('label'=>'Create Dokumenta', 'url'=>array('create')),
	array('label'=>'Update Dokumenta', 'url'=>array('update', 'id'=>$model->idDokumenta)),
	array('label'=>'Delete Dokumenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDokumenta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dokumenta', 'url'=>array('admin')),
);
?>

<h1>View Dokumenta #<?php echo $model->idDokumenta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDokumenta',
		'Shoqata_idShoqata',
		'dokEmer',
		'dokPershkrimi',
		'dokLloji',
		'dokTabelReference',
		'dokReference',
		'filePath',
		'fileSize',
		'updatedBy',
		'updateDate',
	),
)); ?>
