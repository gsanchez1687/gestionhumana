<?php

class RrhhCentroCostoController extends Controller
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
			//'postOnly + delete', // we only allow deletion via POST request
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
		$model=new RrhhCentroCosto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RrhhCentroCosto']))
		{
			$model->attributes=$_POST['RrhhCentroCosto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['RrhhCentroCosto']))
		{
			$model->attributes=$_POST['RrhhCentroCosto'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		//'rrhhPuntoOperacions' => array(self::HAS_MANY, 'RrhhPuntoOperacion', 'rrhh_centro_costo_id'),
		$rowss = Yii::app()->db->createCommand()
    ->select('id, nombre')
    ->from('rrhh_punto_operacion po')
    ->where('rrhh_centro_costo_id=:id', array(':id'=>$id))
    ->queryRow();
		if(isset($rowss)){
			print_r($rowss);
			Yii::app()->user->setFlash('error', "No se puede Borrar porque existen Registros asociados con ". $rowss['nombre']);
			//print_r('No se puede Borrar');
			//$this->refresh();
		}else{
			$this->loadModel($id)->delete();
		}


		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RrhhCentroCosto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{

		$model=new RrhhCentroCosto('search');
		//print_r(json_encode($model));
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RrhhCentroCosto']))
			$model->attributes=$_GET['RrhhCentroCosto'];

		//$results=RrhhPuntoOperacion::model()->findAllBySql('SELECT DISTINCT( monthname( date_purchased ) ) AS month, month( date_purchased ) AS m FROM orders WHERE YEAR(date_purchased ) = 2010 ORDER BY date_purchased DESC');
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RrhhCentroCosto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=RrhhCentroCosto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RrhhCentroCosto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rrhh-centro-costo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	/*
		validate first if the record has associated with rrhhPuntoOperacions before delete
	*/
	public function validateModelBeforeDelete22($id)
	{
		$model=RrhhCentroCosto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionValidateModelBeforeDelete($id)
	{
	   if(isset($id)){
			 $model=RrhhCentroCosto::model()->findByPk($id);
			 echo 'Shi';
		 }
    else
			 throw new CHttpException(404,'Not found');
	    //echo CJSON::encode(array('response'=>'Ño'));
	}


}
