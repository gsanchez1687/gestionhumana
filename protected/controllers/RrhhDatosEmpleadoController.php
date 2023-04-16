<?php

class RrhhDatosEmpleadoController extends Controller
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
				'actions'=>array('create','update','UpdateActive'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
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
                
                $plantillas=Plantillas::model()->findAll(array('order'=>'orden_id'));
		$rrhh_tipo_contrato=RrhhTipoContrato::model()->findAll(array('order'=>'orden_id'));

		$model=$this->loadModel($id);
                
		$criteria=new CDbCriteria;
		$criteria->compare('rrhh_datos_empleado_id',$id);
                
		$rrhhexamenmedico=new RrhhExamenMedico;
		$criteria->order='orden_id';
		$rrhhexamenmedicoDataProvider=new CActiveDataProvider('RrhhExamenMedico',array("criteria"=>$criteria,));
             
		$contratos=new RrhhContratos;
		$criteria->order='orden_id';
		$contratosDataProvider=new CActiveDataProvider('RrhhContratos',array("criteria"=>$criteria,));

		$rrhh_centro_costo=RrhhCentroCosto::model()->findAll(array('order'=>'orden_id'));
		$rrhh_perfil=RrhhPerfil::model()->findAll(array('order'=>'orden_id'));
                
             
                
                $rrhhincapacidades=new RrhhIncapacidades;
		$criteria->order='orden_id';
		$rrhhincapacidadesDataProvider=new CActiveDataProvider('RrhhIncapacidades',array(
		    "criteria"=>$criteria,
		));
                
                $rrhhvacaciones=new RrhhVacaciones;
		$criteria->order='orden_id';
		$rrhhvacacionesDataProvider=new CActiveDataProvider('RrhhVacaciones',array(
		    "criteria"=>$criteria,
		));
                
                $rrhhdotaciones=new RrhhDotaciones;
		$criteria->order='orden_id';
		$rrhhdotacionesDataProvider=new CActiveDataProvider('RrhhDotaciones',array(
		    "criteria"=>$criteria,
		));
                $rrhhincapacidades=new RrhhIncapacidades;
		$criteria->order='orden_id';
		$rrhhincapacidadesDataProvider=new CActiveDataProvider('RrhhIncapacidades',array(
		    "criteria"=>$criteria,
		));
                
                 $rrhhpersonasacargo=new RrhhPersonasACargo;
		$rrhhpersonasacargoDataProvider=new CActiveDataProvider('RrhhPersonasACargo',array(
		    "criteria"=>$criteria,
		));
                
                $rrhhveneficiosextralegales=new RrhhVeneficiosExtralegales;
		$criteria->order='orden_id';
		$rrhhveneficiosextralegalesDataProvider=new CActiveDataProvider('RrhhVeneficiosExtralegales',array(
		    "criteria"=>$criteria,
		));
                
		$this->render('view',array(
			'model'=>$this->loadModel($id),
                        'contratos'=>$contratos,
                        'contratosDataProvider'=>$contratosDataProvider,
                        'rrhh_centro_costo'=>$rrhh_centro_costo,
                        'rrhh_tipo_contrato'=>$rrhh_tipo_contrato,
                        'rrhh_perfil'=>$rrhh_perfil,
                        'rrhhexamenmedicoDataProvider'=>$rrhhexamenmedicoDataProvider,
                        'rrhhexamenmedico'=>$rrhhexamenmedico,
                        'rrhhincapacidades'=>$rrhhincapacidades,
                        'rrhhincapacidadesDataProvider'=>$rrhhincapacidadesDataProvider,
                        'rrhhvacaciones'=>$rrhhvacaciones,
                        'rrhhvacacionesDataProvider'=>$rrhhvacacionesDataProvider,
                        'rrhhpersonasacargo'=>$rrhhpersonasacargo,
                        'rrhhpersonasacargoDataProvider'=>$rrhhpersonasacargoDataProvider,
                        'rrhhdotaciones'=>$rrhhdotaciones,
		        'rrhhdotacionesDataProvider'=>$rrhhdotacionesDataProvider,
		        'rrhhveneficiosextralegales'=>$rrhhveneficiosextralegales,
		        'rrhhveneficiosextralegalesDataProvider'=>$rrhhveneficiosextralegalesDataProvider,
                        'plantillas'=>$plantillas,
		        'rrhh_tipo_contrato'=>$rrhh_tipo_contrato,
                    
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new RrhhDatosEmpleado;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['RrhhDatosEmpleado']))
		{
			$model->attributes=$_POST['RrhhDatosEmpleado'];
                        if($model->validate()){                            
                            $this->CreateUpload($model, 'ruta_hojadevida','/images/files/hoja_vida/','RrhhDatosEmpleado',FALSE);                                
                            $this->CreateUpload($model, 'foto','/images/files/fotos/','RrhhDatosEmpleado',FALSE);                                
                        }
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
                
		if(isset($_POST['RrhhDatosEmpleado']))
		{
			$model->attributes=$_POST['RrhhDatosEmpleado'];                        
                        if($model->validate()){                                
                              $this->Upload($model, 'ruta_hojadevida','/images/files/hoja_vida/','RrhhDatosEmpleado',FALSE);                                
                              $this->Upload($model, 'foto','/images/files/fotos/','RrhhDatosEmpleado',FALSE);                                
                        }
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RrhhDatosEmpleado');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RrhhDatosEmpleado('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RrhhDatosEmpleado']))
			$model->attributes=$_GET['RrhhDatosEmpleado'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RrhhDatosEmpleado the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=RrhhDatosEmpleado::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RrhhDatosEmpleado $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rrhh-datos-empleado-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
          public function actionUpdateActive($it = NULL, $s = NULL) {
            $model = $this->loadModel($it);
            if ($s == 1) {
              $model->estado = 1;
            } elseif ($s == 0) {
              $model->estado = 0;
            }
            if ($model->validate()) {
//              echo CJSON::encode(array('message' => 'success', 'success' => 'true'));
              $model->save();
            }
          }
}
