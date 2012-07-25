<?php

class PersonaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','listPersona'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	//funksion per te permisuar Pamjen Fabjani e pare me te dhenat fillestare----------------//
	public function actionlistPersona()
	{
		$dp = new CActiveDataProvider('Persona', array(
				//'criteria' => array(
					//	'order' => 'Shoqata_idShoqata, emri, mbiemri, atesia,dateLindja',
				//),
					'sort'=>array(
						'attributes' => array('emri','mbiemri','dateLindja'),
						'defaultOrder' =>'emri',
						),
				'pagination' => array(
						'pagesize' => 5,
				),
		));
	
		$this->render('testPersona', array('dp' => $dp));
	}
	//mbaron Funksioni im------------------------------------------------------------------------//
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		
		
		$kontaktDataProvider=new CActiveDataProvider('Kontakte', array(
				'criteria'=>array(
						'condition'=>'Persona_idPersona=:idPersona',
						'params'=>array(':idPersona'=>$this->loadModel($id)->idPersona),
				),
				'pagination'=>array(
						'pageSize'=>1,	
				),
		));
		
		$anetarDataProvider=new CActiveDataProvider('Anetaret', array(
				'criteria'=>array(
						'condition'=>'Persona_idPersona=:idPersona',
						'params'=>array(':idPersona'=>$this->loadModel($id)->idPersona),
				),
				'pagination'=>array(
						'pageSize'=>1,
				),
		));
		
		$this->render('view',array(
				'model'=>$this->loadModel($id),
				'kontaktDataProvider'=>$kontaktDataProvider,
				'anetarDataProvider'=>$anetarDataProvider,
		));
		
	}

	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Persona;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Persona']))
		{
			$model->attributes=$_POST['Persona'];
			//ajax per te kontrullar formen perpara se te bej submit
			if(Yii::app()->getRequest()->getIsAjaxRequest()) {
				echo CActiveForm::validate( array( $model));
				Yii::app()->end();
			}
			
			
		
			if($model->save())
				$this->redirect(array('view','id'=>$model->idPersona));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Persona']))
		{
			$model->attributes=$_POST['Persona'];
			
			//some ajax for the validation YII ajax Libs Fabjan 
			//ajax per te kontrullar formen perpara se te bej submit
			if(Yii::app()->getRequest()->getIsAjaxRequest()) {
				echo CActiveForm::validate( array( $model));
				Yii::app()->end();
			}
			
			
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->idPersona));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Persona');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Persona('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Persona']))
			$model->attributes=$_GET['Persona'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Persona::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='persona-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
