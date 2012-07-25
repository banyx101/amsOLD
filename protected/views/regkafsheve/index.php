<?php
$this->breadcrumbs=array(
	'Regkafsheves',
);

$this->menu=array(
	array('label'=>'Create Regkafsheve', 'url'=>array('create')),
	array('label'=>'Manage Regkafsheve', 'url'=>array('admin')),
);
?>

<h1>Regkafsheves</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
