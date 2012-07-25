<?php
$this->breadcrumbs=array(
	'Faturblerjes',
);

$this->menu=array(
	array('label'=>'Create Faturblerjes', 'url'=>array('create')),
	array('label'=>'Manage Faturblerjes', 'url'=>array('admin')),
);
?>

<h1>Faturblerjes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
