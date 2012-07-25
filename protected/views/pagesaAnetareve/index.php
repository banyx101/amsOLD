<?php
$this->breadcrumbs=array(
	'Pagesaanetareves',
);

$this->menu=array(
	array('label'=>'Create Pagesaanetareve', 'url'=>array('create')),
	array('label'=>'Manage Pagesaanetareve', 'url'=>array('admin')),
);
?>

<h1>Pagesaanetareves</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
