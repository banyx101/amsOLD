<?php
$this->breadcrumbs=array(
	'Blerjes',
);

$this->menu=array(
	array('label'=>'Create Blerje', 'url'=>array('create')),
	array('label'=>'Manage Blerje', 'url'=>array('admin')),
);
?>

<h1>Blerjes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
