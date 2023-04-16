<?php

/**
 * This is the model class for table "rrhh_incapacidades".
 *
 * The followings are the available columns in table 'rrhh_incapacidades':
 * @property integer $id
 * @property string $origen_licencias
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property integer $calcular_por
 * @property integer $tiempo
 * @property string $observacion
 * @property string $imgen
 * @property integer $orden_id
 * @property integer $rrhh_datos_empleado_id
 *
 * The followings are the available model relations:
 * @property RrhhDatosEmpleado $rrhhDatosEmpleado
 */
class RrhhIncapacidades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_incapacidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('origen_licencias, fecha_inicio, fecha_fin, calcular_por, imgen, rrhh_datos_empleado_id', 'required'),
			array('calcular_por, tiempo, orden_id, rrhh_datos_empleado_id', 'numerical', 'integerOnly'=>true),
			array('origen_licencias', 'length', 'max'=>45),
			array('observacion, imgen', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, origen_licencias, fecha_inicio, fecha_fin, calcular_por, tiempo, observacion, imgen, orden_id, rrhh_datos_empleado_id', 'safe', 'on'=>'search'),
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
			'origen_licencias' => 'type:select;table:rrhh_nombre_incapacidades',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'calcular_por' => 'Calcular Por',
			'tiempo' => 'Tiempo',
			'observacion' => 'Observacion',
			'imgen' => 'type:img',
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
		$criteria->compare('origen_licencias',$this->origen_licencias,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('calcular_por',$this->calcular_por);
		$criteria->compare('tiempo',$this->tiempo);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('imgen',$this->imgen,true);
		$criteria->compare('orden_id',$this->orden_id);
		$criteria->compare('rrhh_datos_empleado_id',$this->rrhh_datos_empleado_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RrhhIncapacidades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
