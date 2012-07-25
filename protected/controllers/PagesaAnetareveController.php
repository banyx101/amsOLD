<?php

class PagesaAnetareveController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	
	//qe ketu percaktohet llogjika e ngarkimit te AR me ID e Personit
	private $_personID=null;
	
	protected function ngarkoPersona($idPersona) {
		if ($this->_personID ===null)
		{
			$this->_personID = Persona::model()->findbyPk($idPersona);
			if ($this->_personID===null){
				throw new CHttpExeption(404, 'Personi i kerkuar nuk eshte prezent ne databaze');
			}
		}
		return $this->_personID;
	}
	
	//me ane te ketij funksioni lidhet Anetaret me nje Person qe te pakten eshte perzgjedhur nga perdoruesi
	public function filterLidhPersona($filterChain){
	
		$id_Personi = null;
		if (isset($_GET['paid']))
			$id_Personi = $_GET['paid'];
		else
			if (isset($_POST['paid']))
			$id_Personi = $_POST['paid'];
	
		$this->ngarkoPersona($id_Personi);
	
		$filterChain->run();
	}
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
				'lidhPersona + create',//aplikon filtrin vetem ne eventin e krijimit te te pageses se anetarit te ri ku ka ardhe nje person ID, kjo nga tabela anetaret 
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
				'actions'=>array('index','view'),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Pagesaanetareve;
		
		//ne momentin qe krijohet nje entitet i ri parambushet me idPersonit qe vjen nga ruajtja e kontekstit qe nga ngarkoPersona() lart, pra ne forme fusha mund te behet hidden sepse parambushet.
		$model->Anetaret_Persona_idPersona = $this->_personID->idPersona;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pagesaanetareve']))
		{
			$model->attributes=$_POST['Pagesaanetareve'];
			
			//ajax per te kontrullar formen perpara se te bej submit
			if(Yii::app()->getRequest()->getIsAjaxRequest()) {
				echo CActiveForm::validate( array( $model));
				Yii::app()->end();
			}			
			
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->idpagesaAnetareve));
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

		if(isset($_POST['Pagesaanetareve']))
		{
			$model->attributes=$_POST['Pagesaanetareve'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idpagesaAnetareve));
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
		$dataProvider=new CActiveDataProvider('Pagesaanetareve');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pagesaanetareve('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pagesaanetareve']))
			$model->attributes=$_GET['Pagesaanetareve'];

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
		$model=Pagesaanetareve::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='pagesaanetareve-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
