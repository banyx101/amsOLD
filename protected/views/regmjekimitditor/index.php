<?php
$this->breadcrumbs=array(
	'Regmjekimitditors',
);

$this->menu=array(
	array('label'=>'Create Regmjekimitditor', 'url'=>array('create')),
	array('label'=>'Manage Regmjekimitditor', 'url'=>array('admin')),
);
?>

<h1>Regmjekimitditors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
