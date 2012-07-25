<?php
$this->breadcrumbs=array(
	'Lloji Sepcias',
);

$this->menu=array(
	array('label'=>'Create LlojiSepcia', 'url'=>array('create')),
	array('label'=>'Manage LlojiSepcia', 'url'=>array('admin')),
);
?>

<h1>Lloji Sepcias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
