<?php

/**
 * This is the model class for table "rrhh_personas_a_cargo".
 *
 * The followings are the available columns in table 'rrhh_personas_a_cargo':
 * @property integer $id
 * @property string $nombre
 * @property string $parentesco
 * @property string $tipo_documento
 * @property string $identificacion
 * @property string $fecha_nacimiento
 * @property integer $edad
 * @property string $sexo
 * @property string $orden_id
 * @property integer $rrhh_datos_empleado_id
 *
 * The followings are the available model relations:
 * @property RrhhDatosEmpleado $rrhhDatosEmpleado
 */
class RrhhPersonasACargo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_personas_a_cargo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, parentesco, tipo_documento, identificacion, fecha_nacimiento, sexo, rrhh_datos_empleado_id', 'required'),
			array('edad, rrhh_datos_empleado_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			array('parentesco, tipo_documento, identificacion, sexo, orden_id', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, parentesco, tipo_documento, identificacion, fecha_nacimiento, edad, sexo, orden_id, rrhh_datos_empleado_id', 'safe', 'on'=>'search'),
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
			'rrhhDatosEmpleado' => array(self::BELONGS_TO, 'RrhhDatosEmpleado', 'rrhh_datos_empleado_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'parentesco' => 'type:select;table:rrhh_parentesco',
			'tipo_documento' => 'type:select;table:rrhh_tipo_documento',
			'identificacion' => 'Identificacion',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'edad' => 'Edad',
			'sexo' => 'Sexo',
			'orden_id' => 'Orden',
			'rrhh_datos_empleado_id' => 'Rrhh Datos Empleado',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('parentesco',$this->parentesco,true);
		$criteria->compare('tipo_documento',$this->tipo_documento,true);
		$criteria->compare('identificacion',$this->identificacion,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('orden_id',$this->orden_id,true);
		$criteria->compare('rrhh_datos_empleado_id',$this->rrhh_datos_empleado_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RrhhPersonasACargo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
