<?php
$this->breadcrumbs=array(
	'Kontaktes'=>array('index'),
	$model->idKontakte,
);

$this->menu=array(
	array('label'=>'List Kontakte', 'url'=>array('index')),
	array('label'=>'Create Kontakte', 'url'=>array('create')),
	array('label'=>'Update Kontakte', 'url'=>array('update', 'id'=>$model->idKontakte)),
	array('label'=>'Delete Kontakte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idKontakte),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kontakte', 'url'=>array('admin')),
);
?>

<h1>View Kontakte #<?php echo $model->idKontakte; ?></h1>

<?php
//me ane te ketyre variablave kapim emrin dhe mbiemrin e personit dhe e paraqesim si stringe, te dhenat lidhen me ORM-------------//
$emri = $model->personaIdPersona->emri; 
$mbiemri=$model->personaIdPersona->mbiemri;
$emriMbiemri=$emri ." ". $mbiemri;//fund i marrjes dhe printimit te emer mbiemer nga tabela Persona-------------------------------//

 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
			'kategoria',
			'idKontakte',
		//'Persona_idPersona',
		array(
				'name'=>'Personi i Lidhur',
				'value'=>$emriMbiemri,
			
				),
		'rrugaNr',
		'komunaBashki',
		'shteti',
		'longitude',
		'latitude',
		'telefon',
		'fax',
		'mobile',
		'email',
		'web',
		'shenime',
		'updatedBy',
		'updateDate',
	),
)); ?>
