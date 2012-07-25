<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->idPersona,
	
);



$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
	array('label'=>'Update Persona', 'url'=>array('update', 'id'=>$model->idPersona)),
	array('label'=>'Delete Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPersona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
		
		array('label'=>'Krijo Kontakte', 'url'=>array('kontakte/create', 'pid'=>$model->idPersona)),
		array('label'=>'Krijo Anetare', 'url'=>array('anetaret/create', 'pid'=>$model->idPersona)),
	);


?>

<h1>View Persona #<?php echo $model->idPersona; ?></h1>


<p>
  <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPersona',
		'dokumentID',
		array(
		'name'=>'Shoqata',
		'value'=>$model->shoqataIdShoqata->emriShoqates,),
		'emri',
		'mbiemri',
		'atesia',
		'dateLindja',		
		'regDate',
		'updatedBy',
		'updateDate',
		'gender',
		
	),
)); ?>
</p>
<div>

<br>
<h1>Kontaktet</h1>
<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$kontaktDataProvider,
'itemView'=>'/kontakte/_view',
)); ?>

<br>
<h1>Anetare</h1>
<?php $this->widget('zii.widgets.CListView', array(
'dataProvider'=>$anetarDataProvider,
'itemView'=>'/anetaret/_view',
)); ?>

<p>
	<a href="/ams/ams/index.php?r=kontakte">
	<button value="ShtoKontakte" />Kontaktet </button></a>
    
    <a href="/ams/ams/index.php?r=anetaret">
	<button value="ShtoAnetare" />Anetaresia </button></a>
    
    <a href="/ams/ams/index.php?r=pagesaAnetareve">
	<button value="PagesaAnetare" />Pagesa e Kuotes </button></a>
    
     <a href="/ams/ams/index.php?r=regkafsheve">
	<button value="RegKafsheve" />Kafshet e Rregjistruara</button></a>
    
      <a href="/ams/ams/index.php">
	<button value="DeklarimiFinaciare">Deklarimi i Fermerit</button></a>
    

</p>
</div>