<?php

/**
 * This is the model class for table "rrhh_veneficios_extralegales".
 *
 * The followings are the available columns in table 'rrhh_veneficios_extralegales':
 * @property integer $id
 * @property string $nombre
 * @property double $valor
 * @property integer $orden_id
 * @property integer $rrhh_datos_empleado_id
 *
 * The followings are the available model relations:
 * @property RrhhDatosEmpleado $rrhhDatosEmpleado
 */
class RrhhVeneficiosExtralegales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_veneficios_extralegales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, valor, rrhh_datos_empleado_id', 'required'),
			array('orden_id, rrhh_datos_empleado_id', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, valor, orden_id, rrhh_datos_empleado_id', 'safe', 'on'=>'search'),
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
			'valor' => 'Valor',
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
		$criteria->compare('valor',$this->valor);
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
	 * @return RrhhVeneficiosExtralegales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
