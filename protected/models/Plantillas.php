<?php

/**
 * This is the model class for table "plantillas".
 *
 * The followings are the available columns in table 'plantillas':
 * @property integer $id
 * @property string $nombre_documento
 * @property string $archivo
 * @property integer $orden_id
 */
class Plantillas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plantillas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_documento', 'required'),
			array('orden_id', 'numerical', 'integerOnly'=>true),
			array('nombre_documento, archivo', 'length', 'max'=>45),
			array('archivo', 'length', 'max'=>100),
                        array('archivo', 'file', 
                        'allowEmpty'=>true, 
                        'types'=>'jpg, jpeg, gif, png, doc, docx, txt, csv, xls, xlsx, rar, zip', 
                        'on'=>'create',//scenario
//                        'except'=>'update',
                        'message' => 'imagen válida!',  // Error message
                        'wrongType'=>'Tipo de archivo es incorrecto',
//                        'minSize'=>1024,// 1MB
                        'maxSize'=>5024 * 5024 *2,
                        'maxFiles'=>1,
                        'tooLarge'=>'Tamaño del archivo demasiado grande',//Error Message
                        'tooSmall'=>'Tamaño del archivo demasiado pequeño',//Error Message
                        'tooMany'=>'Demasiados archivos subidos',//Error Message                                
                           ),  

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre_documento, archivo, orden_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre_documento' => 'Nombre Documento',
			'archivo' => 'Archivo',
			'orden_id' => 'Orden',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre_documento',$this->nombre_documento,true);
		$criteria->compare('archivo',$this->archivo,true);
		$criteria->compare('orden_id',$this->orden_id);
                $criteria->order = "id DESC"; /*AÑADIR ORDEN*/
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plantillas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
