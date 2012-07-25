<div>

<h2>Lista e Personave te regjistruar ne sistem</h2>

<?php
 $this->widget('ext.groupgridview.GroupGridView', array(
		'id' => 'grid1',
		'dataProvider' => $dp,
		'extraRowColumns' => array('Shoqata_idShoqata'),
		'columns' => array(
				
				'emri',
				'mbiemri',
				'atesia',
				'dateLindja',
				'dokumentID',
				'gender',
								
				array('class' => 'CButtonColumn'),
		),
));
?>

</div>
