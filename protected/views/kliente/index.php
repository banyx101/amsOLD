<?php
$this->breadcrumbs=array(
	'Klientes',
);

$this->menu=array(
	array('label'=>'Create Kliente', 'url'=>array('create')),
	array('label'=>'Manage Kliente', 'url'=>array('admin')),
);
?>

<h1>Klientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
