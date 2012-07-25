<?php
$this->breadcrumbs=array(
	'Stafi Shoqates',
);

$this->menu=array(
	array('label'=>'Create StafiShoqates', 'url'=>array('create')),
	array('label'=>'Manage StafiShoqates', 'url'=>array('admin')),
);
?>

<h1>Stafi Shoqates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
