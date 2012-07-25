<?php
$this->breadcrumbs=array(
	'Anetarets'=>array('index'),
	$model->Persona_idPersona,
);

$this->menu=array(
	array('label'=>'List Anetaret', 'url'=>array('index')),
	//array('label'=>'Create Anetaret', 'url'=>array('create')),
	array('label'=>'Perditeso Anetaret', 'url'=>array('update', 'id'=>$model->Persona_idPersona)),
	array('label'=>'Delete Anetaret', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Persona_idPersona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anetaret', 'url'=>array('admin')),
		
		array('label'=>'Regjistro Pagesen', 'url'=>array('pagesaanetareve/create', 'paid'=>$model->Persona_idPersona)),
		array('label'=>'Regjistro Kafshe', 'url'=>array('regkafsheve/create', 'paid'=>$model->Persona_idPersona)),
);
?>

<h1>View Anetaret #<?php echo $model->Persona_idPersona; ?></h1>

<?php
//me ane te ketyre variablave kapim emrin dhe mbiemrin e personit dhe e paraqesim si stringe, te dhenat lidhen me ORM-------------//
$emri = $model->personaIdPersona->emri;
$mbiemri=$model->personaIdPersona->mbiemri;
$emriMbiemri=$emri ." ". $mbiemri;//fund i marrjes dhe printimit te emer mbiemer nga tabela Persona-------------------------------//
 
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
			'kodiFermes',
		//'Persona_idPersona',
		array(
				'name'=>'Anetari i Lidhur',
				'value'=>$emriMbiemri,
			
				),
		array(
		'name'=>'Tipi i Anetarit',
		'value'=>$model->anetareTipIdanetareTip->tipi,),
		'anetarKode',
		'regDate',
		'anetarStatus',
		'pronarMbajtes',
		'tipiProdhimit',
		'updatedBy',
		'dateUpdate',
	),
)); ?>
