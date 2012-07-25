<?php
$this->breadcrumbs=array(
	'Kontaktes'=>array('index'),
	$model->idKontakte=>array('view','id'=>$model->idKontakte),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kontakte', 'url'=>array('index')),
	array('label'=>'Create Kontakte', 'url'=>array('create')),
	array('label'=>'View Kontakte', 'url'=>array('view', 'id'=>$model->idKontakte)),
	array('label'=>'Manage Kontakte', 'url'=>array('admin')),
);
?>

<h1>Update Kontakte <?php echo $model->idKontakte; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>