<?php
$this->breadcrumbs=array(
	'Kontaktes',
);

$this->menu=array(
	array('label'=>'Create Kontakte', 'url'=>array('create')),
	array('label'=>'Manage Kontakte', 'url'=>array('admin')),
);
?>

<h1>Kontaktes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
