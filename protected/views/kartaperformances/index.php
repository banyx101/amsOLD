<?php
$this->breadcrumbs=array(
	'Kartaperformances',
);

$this->menu=array(
	array('label'=>'Create Kartaperformances', 'url'=>array('create')),
	array('label'=>'Manage Kartaperformances', 'url'=>array('admin')),
);
?>

<h1>Kartaperformances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
