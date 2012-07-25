<?php
$this->breadcrumbs=array(
	'Furnitores',
);

$this->menu=array(
	array('label'=>'Create Furnitore', 'url'=>array('create')),
	array('label'=>'Manage Furnitore', 'url'=>array('admin')),
);
?>

<h1>Furnitores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
