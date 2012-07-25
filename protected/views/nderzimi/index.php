<?php
$this->breadcrumbs=array(
	'Nderzimis',
);

$this->menu=array(
	array('label'=>'Create Nderzimi', 'url'=>array('create')),
	array('label'=>'Manage Nderzimi', 'url'=>array('admin')),
);
?>

<h1>Nderzimis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
