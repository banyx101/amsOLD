<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><img src="http://localhost/ams/ams/images/koka.jpg"></img></div>
	</div><!-- header -->

	<div id="menu">
	<?php
$this->widget('application.extensions.menu.SMenu',
array(
"menu"=>array(
		
		//Menuja qe kishte kalendarin
		array("url"=>array(	"route"=>"/"),	"label"=>"Home",
		
				array(	"url"=>array("route"=>"/site/page","parmas"=>array("view"=>"about")), "label"=>"Rreth Nesh",),
				array(	"url"=>array("route"=>"/site/contact"),"label"=>"Kontaktoni",),
				),
		
		//blloku me menu e nenmenu i dyti ne liste qe do te mbaj I/O e te gjitha tabelat CRUD nga database
  array("url"=>array(
               "route"=>"/shoqata"),
               "label"=>"Shoqata",
  		
  		array("url"=>array(
  				"route"=>"/persona"),
  				"label"=>"Persona",),
  		
          array("url"=>array(
                       "route"=>"/anetaret"),
                       "label"=>"Anetaret",
          		
          		array("url"=>array(
          				"route"=>"/pagesaanetareve",
          				//"params"=>array("id"=>3),
          				//"htmlOptions"=>array("title"=>"title")
          			),
          				"label"=>"Pagesat e Kuotave"),
          		
          		
          				array("url"=>array(
          						"route"=>"/deklarimifinanciare",
          						//"params"=>array("id"=>4)
          				),
          						"label"=>"Deklarimi Financiare",
          		
          		          		
          			),),
  	
  		
          array("url"=>array(
                      "route"=>"/kontakte"),
                      "label"=>"Kontakt Manager",),
  		
          array("url"=>"",
                       "label"=>"Regjistri Kafsheve",
          		
		         	 array("url"=>array(
		                       "route"=>"/regkafsheve",
		                       //"params"=>array("id"=>3),
		                       //"htmlOptions"=>array("title"=>"title")
								),
		                       "label"=>"Regjistri"),

          		
		            array("url"=>array(
		                         "route"=>"/kartaperformances",
		                         //"params"=>array("id"=>4)
								),
		                         "label"=>"Regjistri Performances",
		            		
		            		
			                
			                
			                /* Nese me duhet nje nenmenu poshte (nivel tjeter)
			                 * array("url"=>array(
			                             "route"=>"/product/show",
			                             "params"=>array("id"=>5)),
			                             "label"=>"Product 5")*/ 
		            		
		            		)),
  		array("url"=>array(
  				"route"=>"/faturblerjes",
  				//"params"=>array("id"=>3),
  				//"htmlOptions"=>array("title"=>"title")
  		),
  				"label"=>"Blerjet"),
  		
  		array("url"=>array(
  				"route"=>"/faturshitje",
  				//"params"=>array("id"=>3),
  				//"htmlOptions"=>array("title"=>"title")
  		),
  				"label"=>"Shitjet"),
  		
  		
  		
  		),//mbaron blloku i madh Shoqata

		
		
		//Menu qe kishte Administrimin

          array("url"=>array(),
                       "label"=>"Raporte",
              array("url"=>array(
                           "route"=>"/raporte"),
                           "label"=>"Gjithe Raportet"),
                  array("url"=>array(
                               "route"=>"/grafs"),
                               "label"=>"Grafike"),
                  array("url"=>array(
                               "route"=>"/nePergatitje"),
                               "label"=>"R Jo Aktiv",
                               "disabled"=>true)),

		//Menuja qe kishte Dokumentimin
		
		array("url"=>array(),
                       "label"=>"Documentation",
              array("url"=>array(
                           "link"=>"site/guida",
                           "htmlOptions"=>array("target"=>"_BLANK")),
                           "label"=>"Guida Perdorimit"),
              array("url"=>array(
                           "route"=>"site/ndihma"),
                           "label"=>"Ndihme"),
             /* array("url"=>array(
                           "route"=>"site/calendarDoc"),
                           "label"=>"Scalendar"),
              array("url"=>array(
                           "route"=>"site/menuDoc"),
                           "label"=>"Smenu"), */
                )
          ),
"stylesheet"=>"menu_blue.css",
"menuID"=>"myMenu",
"delay"=>3
)
);
?>

</div>

<div id="mainmenu">

		<?php /* $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
								
				array('label'=>'Kreu', 'url'=>array('/site/index')),
				array('label'=>'Rreth Nesh', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Kontaktoni', 'url'=>array('/site/contact')),
				
				array('label'=>'Shoqata', 'url'=>array('/shoqata/')),
				array('label'=>'Persona', 'url'=>array('/persona/index')),
				array('label'=>'Anetaret', 'url'=>array('/anetaret/')),
				
				
				array('label'=>'Stafi Shoqates', 'url'=>array('/stafiShoqates/')),
				array('label'=>'Perdoruesit', 'url'=>array('/users/')),
				array('label'=>'Kontakte', 'url'=>array('/kontakte/')),
				
				array('label'=>'Fatura Shitje', 'url'=>array('/faturshitje/')),
				array('label'=>'Fatura Blerje', 'url'=>array('/faturBrejes/')),
				array('label'=>'Kliente', 'url'=>array('/kliente/')),
				array('label'=>'Furnitore', 'url'=>array('/furnitore/')),
				
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */ ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> "Qengjat e Jonit".<br/>
				<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
