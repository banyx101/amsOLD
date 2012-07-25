<?php
$this->breadcrumbs=array(
	'Shoqatas',
);

$this->menu=array(
	array('label'=>'Create Shoqata', 'url'=>array('create')),
	array('label'=>'Manage Shoqata', 'url'=>array('admin')),
);
?>

<h1>Shoqatas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
