<?php
$this->breadcrumbs=array(
	'Pagesaanetareves'=>array('index'),
	$model->idpagesaAnetareve,
);

$this->menu=array(
	array('label'=>'List Pagesaanetareve', 'url'=>array('index')),
	array('label'=>'Create Pagesaanetareve', 'url'=>array('create')),
	array('label'=>'Update Pagesaanetareve', 'url'=>array('update', 'id'=>$model->idpagesaAnetareve)),
	array('label'=>'Delete Pagesaanetareve', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpagesaAnetareve),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagesaanetareve', 'url'=>array('admin')),
);
?>

<h1>View Pagesaanetareve #<?php echo $model->idpagesaAnetareve; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpagesaAnetareve',
		'Anetaret_Persona_idPersona',
		'shumaPaguar',
		'dataPageses',
		'lajmerimPagese',
		'shenime',
		'udatedBy',
		'updateDate',
	),
)); ?>
