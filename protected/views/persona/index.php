<?php
$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
	array('label'=>'Shto Persona', 'url'=>array('create')),
	array('label'=>'Menaxho Persona', 'url'=>array('admin')),
);
?>

<h1>Persona</h1>


<?php  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

