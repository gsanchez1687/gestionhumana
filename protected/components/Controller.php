<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        
        /*
         * $model : El nombre del modelo
         * $attribute: Nombre del campo del archivo o foto        
         * $path: Es la ruta donde estara el archivo
         * $tabla: Es el nombre de la tabla donde esta el campo archivo (opcional, por defecta se guarda en images)
         * $bool: Si es TRUE genera un nombre unico al archivo o no toma como nombre el nombre del campo (por defecto esta en false)         */
        public function Upload($model,$attribute,$path = '/images/',$tabla = '',$bool = FALSE) {
         $objeto = CUploadedFile::getInstance($model,$attribute);   
         if(is_object($objeto)){ 
                $file = CUploadedFile::getInstance($model,$attribute);
                $extension = end(explode(".", $file->name));
                if($bool == TRUE):
                   $name = substr(md5(uniqid(rand())),0,25);
                else:
                    $name = $file->name;   
                endif;               
                $name = str_replace("_", " ", $name);
                $file->saveAs(Yii::getPathOfAlias("webroot") . $path . $name . "." . $extension);
                $model->$attribute = $name . "." . $extension;
        
        }  else {
                 $banner = $tabla::model()->findByPk($model->id);
                 $model->$attribute = $banner->$attribute;
                }
    }
    
    public static function CreateUpload($model,$attribute,$path = '/images/',$tabla = '',$bool = FALSE){
        $objeto = CUploadedFile::getInstance($model,$attribute); 
        if(is_object($objeto)){ 
                $file = CUploadedFile::getInstance($model,$attribute);
                $extension = end(explode(".", $file->name));
                if($bool == TRUE):
                   $name = substr(md5(uniqid(rand())),0,25);
                else:
                    $name = $file->name;   
                endif;               
                $name = str_replace("_", " ", $name);
                $file->saveAs(Yii::getPathOfAlias("webroot") . $path . $name . "." . $extension);
                $model->$attribute = $name . "." . $extension;
        }
    }


    public function PageSize($id = NULL, $model = NULL)
	{
		$this->widget('application.extensions.PageSize.PageSize', array(
				'gridViewId' => $id,
				'pageSize' => Yii::app()->request->getParam('pageSize', null),
				'defaultPageSize' => Yii::app()->params['cantregistros_defecto_gridview'],
				'pageSizeOptions' => Yii::app()->params['registros_pagina_gridview']));
		$dataProvider = $model;
		$pageSize = Yii::app()->user->getState('pageSize', Yii::app()->params['cantregistros_defecto_gridview']);
		$dataProvider->getPagination()->setPageSize($pageSize);
		return $dataProvider;
	}

}
