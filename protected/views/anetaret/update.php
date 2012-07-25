<?php
$this->breadcrumbs=array(
	'Anetarets'=>array('index'),
	$model->Persona_idPersona=>array('view','id'=>$model->Persona_idPersona),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anetaret', 'url'=>array('index')),
	array('label'=>'Create Anetaret', 'url'=>array('create')),
	array('label'=>'View Anetaret', 'url'=>array('view', 'id'=>$model->Persona_idPersona)),
	array('label'=>'Manage Anetaret', 'url'=>array('admin')),
);
?>

<h1>Update Anetaret <?php echo $model->Persona_idPersona; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>