<?php
$this->breadcrumbs=array(
	'Blerjes'=>array('index'),
	$model->idBlerje,
);

$this->menu=array(
	array('label'=>'List Blerje', 'url'=>array('index')),
	array('label'=>'Create Blerje', 'url'=>array('create')),
	array('label'=>'Update Blerje', 'url'=>array('update', 'id'=>$model->idBlerje)),
	array('label'=>'Delete Blerje', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idBlerje),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Blerje', 'url'=>array('admin')),
);
?>

<h1>View Blerje #<?php echo $model->idBlerje; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idBlerje',
		'dataHyrjes',
		'sasia',
		'njesiaMatese',
		'cmimiBlerjes',
		'shenime',
		'burimiParave',
		'Produkte_idProdukte',
		'fk_FatureBlerje_Nr',
	),
)); ?>
