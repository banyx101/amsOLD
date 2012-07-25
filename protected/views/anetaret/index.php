<?php
$this->breadcrumbs=array(
	'Anetarets',
);

$this->menu=array(
	array('label'=>'Create Anetaret', 'url'=>array('create')),
	array('label'=>'Manage Anetaret', 'url'=>array('admin')),
);
?>

<h1>Anetarets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
