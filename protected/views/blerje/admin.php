<?php
$this->breadcrumbs=array(
	'Blerjes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Blerje', 'url'=>array('index')),
	array('label'=>'Create Blerje', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('blerje-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Blerjes</h1>

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
	'id'=>'blerje-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idBlerje',
		'dataHyrjes',
		'sasia',
		'njesiaMatese',
		'cmimiBlerjes',
		'shenime',
		/*
		'burimiParave',
		'Produkte_idProdukte',
		'fk_FatureBlerje_Nr',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
