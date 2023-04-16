<?php

/**
 * This is the model class for table "rrhh_examen_medico".
 *
 * The followings are the available columns in table 'rrhh_examen_medico':
 * @property integer $id
 * @property string $fecha
 * @property string $nombre_examen
 * @property integer $estado
 * @property string $fecha_proximo_examen
 * @property string $imagen
 * @property integer $orden_id
 * @property integer $rrhh_datos_empleado_id
 *
 * The followings are the available model relations:
 * @property RrhhDatosEmpleado $rrhhDatosEmpleado
 */
class RrhhExamenMedico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_examen_medico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, nombre_examen, estado, fecha_proximo_examen, imagen, rrhh_datos_empleado_id', 'required'),
			array('estado, orden_id, rrhh_datos_empleado_id', 'numerical', 'integerOnly'=>true),
			array('nombre_examen', 'length', 'max'=>45),
			array('imagen', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, nombre_examen, estado, fecha_proximo_examen, imagen, orden_id, rrhh_datos_empleado_id', 'safe', 'on'=>'search'),
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
			'fecha' => 'Fecha',
			'nombre_examen' => 'Nombre de Examene', /*'type:select;table:rrhh_nombre_examenes',*/
			'estado' => 'Estado',
			'fecha_proximo_examen' => 'Fecha Proximo Examen',
			'imagen' => 'Imagen', //'type:img',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('nombre_examen',$this->nombre_examen,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('fecha_proximo_examen',$this->fecha_proximo_examen,true);
		$criteria->compare('imagen',$this->imagen,true);
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
	 * @return RrhhExamenMedico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
