<?php

/**
 * This is the model class for table "rrhh_vacaciones".
 *
 * The followings are the available columns in table 'rrhh_vacaciones':
 * @property integer $id
 * @property integer $dias_tomados
 * @property string $periodo_afectado
 * @property string $fecha_salida
 * @property string $fecha_reintegro
 * @property integer $rrhh_datos_empleado_id
 * @property string $imagen
 * @property integer $orden_id
 *
 * The followings are the available model relations:
 * @property RrhhDatosEmpleado $rrhhDatosEmpleado
 */
class RrhhVacaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_vacaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dias_tomados, periodo_afectado, rrhh_datos_empleado_id', 'required'),
			array('dias_tomados, rrhh_datos_empleado_id, orden_id', 'numerical', 'integerOnly'=>true),
			array('periodo_afectado', 'length', 'max'=>45),
			array('imagen', 'length', 'max'=>100),
			array('fecha_salida, fecha_reintegro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dias_tomados, periodo_afectado, fecha_salida, fecha_reintegro, rrhh_datos_empleado_id, imagen, orden_id', 'safe', 'on'=>'search'),
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
			'dias_tomados' => 'Dias Tomados',
			'periodo_afectado' => 'Periodo Afectado',
			'fecha_salida' => 'Fecha Salida',
			'fecha_reintegro' => 'Fecha Reintegro',
			'rrhh_datos_empleado_id' => 'type:img',
			'imagen' => 'Imagen',
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
		$criteria->compare('dias_tomados',$this->dias_tomados);
		$criteria->compare('periodo_afectado',$this->periodo_afectado,true);
		$criteria->compare('fecha_salida',$this->fecha_salida,true);
		$criteria->compare('fecha_reintegro',$this->fecha_reintegro,true);
		$criteria->compare('rrhh_datos_empleado_id',$this->rrhh_datos_empleado_id);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('orden_id',$this->orden_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RrhhVacaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
