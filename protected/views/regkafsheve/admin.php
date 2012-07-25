<?php
$this->breadcrumbs=array(
	'Regkafsheves'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Regkafsheve', 'url'=>array('index')),
	array('label'=>'Create Regkafsheve', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('regkafsheve-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Regkafsheves</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'regkafsheve-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idKafshet',
		'matrikulli',
		'llojiSpecia',
		'raca',
		'sasiaKafsheve',
		'dataLindjes',
		/*
		'updateDate',
		'inventariFundit',
		'updatedBy',
		'Anetaret_idAnetare',
		'seksi',
		'Hyrje',
		'Dalje',
		'arsyejaLevizjes',
		'idNderzimi',
		'Shenime',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
