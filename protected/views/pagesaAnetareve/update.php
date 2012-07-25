<?php
$this->breadcrumbs=array(
	'Pagesaanetareves'=>array('index'),
	$model->idpagesaAnetareve=>array('view','id'=>$model->idpagesaAnetareve),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagesaanetareve', 'url'=>array('index')),
	array('label'=>'Create Pagesaanetareve', 'url'=>array('create')),
	array('label'=>'View Pagesaanetareve', 'url'=>array('view', 'id'=>$model->idpagesaAnetareve)),
	array('label'=>'Manage Pagesaanetareve', 'url'=>array('admin')),
);
?>

<h1>Update Pagesaanetareve <?php echo $model->idpagesaAnetareve; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>