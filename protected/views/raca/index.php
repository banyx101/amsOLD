<?php
$this->breadcrumbs=array(
	'Racas',
);

$this->menu=array(
	array('label'=>'Create Raca', 'url'=>array('create')),
	array('label'=>'Manage Raca', 'url'=>array('admin')),
);
?>

<h1>Racas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
