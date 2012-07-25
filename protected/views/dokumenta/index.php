<?php
$this->breadcrumbs=array(
	'Dokumentas',
);

$this->menu=array(
	array('label'=>'Create Dokumenta', 'url'=>array('create')),
	array('label'=>'Manage Dokumenta', 'url'=>array('admin')),
);
?>

<h1>Dokumentas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
