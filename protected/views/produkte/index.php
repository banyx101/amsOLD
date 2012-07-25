<?php
$this->breadcrumbs=array(
	'Produktes',
);

$this->menu=array(
	array('label'=>'Create Produkte', 'url'=>array('create')),
	array('label'=>'Manage Produkte', 'url'=>array('admin')),
);
?>

<h1>Produktes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
