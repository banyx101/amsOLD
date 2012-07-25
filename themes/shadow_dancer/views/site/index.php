<?php  
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>

<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Miresevine ne <i><?php echo CHtml::encode(Yii::app()->name); ?></i> Faqja kryesore</h1>
<div class="span-23 showgrid">
<div class="dashboardIcons span-16">
    <div class="dashIcon span-3">
        <a href="./index.php?r=shoqata"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-building.png" alt="Shoqata" /></a>
        <div class="dashIconText "><a href="./index.php?r=shoqata">Shoqata</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="./index.php?r=persona"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people.png" alt="Persona" /></a>
        <div class="dashIconText"><a href="./index.php?r=persona">Persona</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="./index.php?r=pagesaanetareve"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-cash2.png" alt="Menaxho Pagesat" /></a>
        <div class="dashIconText"><a href="./index.php?r=pagesaanetareve">Menaxho Pagesat</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="./index.php?r=blerje"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-refresh3.png" alt="HyrjeDalje" /></a>
        <div class="dashIconText"><a href="./index.php?r=blerje">Hyrje Dalje</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="./index.php"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-chart.png" alt="Raporte" /></a>
        <div class="dashIconText"><a href="./index.php">Reporte</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="./index.php?r=produkte"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-barcode.png" alt="Produkte" /></a>
        <div class="dashIconText"><a href="./index.php?r=produkte">Produkte</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="./index.php?r=kontakte"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-address-book.png" alt="Kontakte" /></a>
        <div class="dashIconText"><a href="./index.php?r=kontakte">Kontakte</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="./index.php?r=site/page&view=calendar"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-calendar.png" alt="Kalendar" /></a>
        <div class="dashIconText"><a href="./index.php?r=site/page&view=calendar">Kalendari</a></div>
    </div>
    
   
    <div class="dashIcon span-3">
        <a href="./index.php?r=site/page&view=about"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-warning.png" alt="System Alerts" /></a>
        <div class="dashIconText"><a href="./index.php?r=site/page&view=about">Njoftime Sistemi</a></div>
    </div>
    
     <div class="dashIcon span-3">
        <a href="./index.php?r=site/page&view=dokumentimi"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-information.png" alt="Dukumentat" /></a>
        <div class="dashIconText"><a href="./index.php?r=site/page&view=dokumentimi">Ndihma</a></div>
    </div>
   
    
</div><!-- END OF .dashIcons -->
<div class="span-7 last">

            Mesazhe nga sistemi!<p>
            <div class="flash-success"><p> Nuk ka ndonje mesazh nga sistemi.</div>
			<?php /*
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>45,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Space Used: 95%
            <?php 
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>95,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Bandwidth Used: 10%
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>10,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Conversion Rate: 25%            
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>25,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Success Rate: 55%            
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>55,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));*/
			?>
</div>
                
<div class="span-10">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Pie Chart',
));
?>
<div class="chart2">
<div>
        <div class="text">
            <table class="myChart">
                <thead>
                    <tr>
                        <th></th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                      <th>Sales</th>
                      <td>3923</td>
                      <td>2923</td>
                      <td>2931</td>
                      <td>3942</td>
                      <td>4921</td>
                      <td>6934</td>
                      <td>5934</td>
                    </tr>
                    <tr>
                      <th>Quotes</th>
                      <td>3623</td>
                      <td>2623</td>
                      <td>2831</td>
                      <td>3842</td>
                      <td>4821</td>
                      <td>6534</td>
                      <td>5134</td>
                    </tr>
                    <tr>
                      <th>Visitors </th>
                        <td>3523</td>
                        <td>2223</td>
                        <td>2531</td>
                        <td>3342</td>
                        <td>4521</td>
                        <td>6234</td>
                        <td>5434</td>
                    </tr>
                </tbody>
            </table>
            
            
      </div>
  </div>
</div>
<?php $this->endWidget();?>
</div>
<div class="span-13 last">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Line Chart',
));
?>
<div class="chart3">
    <div>
        <div class="text">
            <table class="myChart">
                <thead>
                    <tr>
                        <th></th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Quotes</th>
                        <td>39523</td>
                        <td>26123</td>
                        <td>29031</td>
                        <td>34342</td>
                        <td>48321</td>
                        <td>42234</td>
                    </tr>
                    <tr>
                        <th>Sales</th>
                        <td>34523</td>
                        <td>22123</td>
                        <td>25031</td>
                        <td>30342</td>
                        <td>45321</td>
                        <td>46234</td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
<?php $this->endWidget();?>
</div>


<div class="flash-notice span-22 last">
<p> Ky webAplikim eshte ndertuar per tu perdorur nga Shoqata Qengjat e Jonit. </p>
</div>

</div>