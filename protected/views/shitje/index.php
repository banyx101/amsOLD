<?php
$this->breadcrumbs=array(
	'Shitjes',
);

$this->menu=array(
	array('label'=>'Create Shitje', 'url'=>array('create')),
	array('label'=>'Manage Shitje', 'url'=>array('admin')),
);
?>

<h1>Shitjes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
