<?php
$this->breadcrumbs=array(
	'Anetaretips',
);

$this->menu=array(
	array('label'=>'Create Anetaretip', 'url'=>array('create')),
	array('label'=>'Manage Anetaretip', 'url'=>array('admin')),
);
?>

<h1>Anetaretips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
