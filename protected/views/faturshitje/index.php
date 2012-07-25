<?php
$this->breadcrumbs=array(
	'Faturshitjes',
);

$this->menu=array(
	array('label'=>'Create Faturshitje', 'url'=>array('create')),
	array('label'=>'Manage Faturshitje', 'url'=>array('admin')),
);
?>

<h1>Faturshitjes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
