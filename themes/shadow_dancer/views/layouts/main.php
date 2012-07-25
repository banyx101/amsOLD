<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="topnav">
		<div class="topnav_text"><a href='./'>Home</a> | <a href='./index.php?r=users/view&id=1'>Llogaria ime</a> | <a href='./index.php?r=shoqata'>Shoqata ime</a> | <a href='./index.php?r=site/logout'>Sys</a> </div>
	</div>
	<div id="header">
		<!--<div id="logo"><img src="<?php /*echo Yii::app()->theme->baseUrl; ?>/images/logoqj.jpg"></img><?php //echo CHtml::encode(Yii::app()->name); */?></div> -->
	</div><!-- header -->
   
<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Kreu', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'test')),
                array('label'=>'Shoqata',
                  'items'=>array(
                    array('label'=>'Persona', 'url'=>array('/persona'),
                  		'items'=>array(
                  				array('label'=>'Kontakte', 'url'=>array('/kontakte')),
                  				array('label'=>'Stafi Shoqates', 'url'=>array('/stafiShoqates')),
                  				                  					
                  		)),
                  		          		
                  		
					array('label'=>'Anetaret','url'=>array('/anetaret'),
							'items'=>array(
									array('label'=>'Pagesat e Kuotave', 'url'=>array('/pagesaAnetareve')),
									array('label'=>'Deklarimi Financiar', 'url'=>array('/deklarimifinanciar')),
									array('label'=>'Dokumenta', 'url'=>array('/dokumenta')),
									
									)),
							
					array('label'=>'Regjistri Kafsheve', 'url'=>array('/regkafsheve'),
							'items'=>array(
							array('label'=>'Karta e Performances', 'url'=>array('/kartaperformances')),
							array('label'=>'Regjistri Mbareshtrimit', 'url'=>array('/nderzimi')),
							array('label'=>'Regjistri Mjekimit Ditor ', 'url'=>array('/regMjekimiDitor')),
						
							
							)),
                    array('label'=>'Dokumenta', 'url'=>array('/dokumenta')),
					array('label'=>'Kalendari Eventeve', 'url'=>array('/site/page', 'view'=>'calendar')),
					array('label'=>'Njoftime', 'url'=>array('/site/page', 'view'=>'news')),
                  ),
                ),
                array('label'=>'Raporte',
                  'items'=>array(
                    array('label'=>'Raporte Financiare', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
                    array('label'=>'Raporte Statikore', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
					array('label'=>'Raporte Auditimi', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
                  ),
                ),
				array('label'=>'Kontakto', 'url'=>array('/site/contact')),
				array('label'=>'Hyr', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'DIL ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            		array('label'=>'Guida/Ndihma', 'url'=>array('/site/page&view=dokumentimi')),
            ),
    )); ?> 
	<!--
    <div id="mainmenu">
		<?php /* $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Krey', 'url'=>array('/site/index')),
				array('label'=>'Shoqata', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
				array('label'=>'Rregjistro', 'url'=>array('/site/page', 'view'=>'forms')),
				array('label'=>'Raporte', 'url'=>array('/site/page', 'view'=>'interface')),				
				array('label'=>'Dokumentimi', 'url'=>array('/site/page', 'view'=>'buttons_and_icons')),
				array('label'=>'Ndihme', 'url'=>array('/site/page', 'view'=>'Demo 404 page')),
			),
		)); */?>
	</div>  --><!--mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Zhvilluar nga: Fabjan Lashi<br/>
		Te gjitha te drejtat e rezervuara. &copy; <?php echo date('Y'); ?><br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>