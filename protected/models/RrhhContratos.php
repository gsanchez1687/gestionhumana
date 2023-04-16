<?php

/**
 * This is the model class for table "rrhh_contratos".
 *
 * The followings are the available columns in table 'rrhh_contratos':
 * @property integer $id
 * @property string $tipo_contrato
 * @property string $fecha_inicio
 * @property string $fecha_terminacion
 * @property string $duracion
 * @property double $valor_salario
 * @property string $fecha_preaviso
 * @property integer $estado_preaviso
 * @property integer $estado
 * @property string $observacion
 * @property integer $conteo
 * @property integer $rrhh_centro_costo_id
 * @property integer $rrhh_punto_operacion_id
 * @property integer $rrhh_perfil_id
 * @property integer $rrhh_datos_empleado_id
 * @property string $contrato_firmado_en_pdf
 * @property string $orden_id
 *
 * The followings are the available model relations:
 * @property RrhhCentroCosto $rrhhCentroCosto
 * @property RrhhDatosEmpleado $rrhhDatosEmpleado
 * @property RrhhPerfil $rrhhPerfil
 * @property RrhhPuntoOperacion $rrhhPuntoOperacion
 * @property RrhhOtroSi[] $rrhhOtroSis
 */
class RrhhContratos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_contratos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_contrato, fecha_inicio, fecha_terminacion, valor_salario, fecha_preaviso, rrhh_centro_costo_id, rrhh_punto_operacion_id, rrhh_perfil_id, rrhh_datos_empleado_id', 'required'),
			array('estado_preaviso, estado, conteo, rrhh_centro_costo_id, rrhh_punto_operacion_id, rrhh_perfil_id, rrhh_datos_empleado_id', 'numerical', 'integerOnly'=>true),
			array('valor_salario', 'numerical'),
			array('tipo_contrato, duracion, orden_id', 'length', 'max'=>45),
			array('observacion, contrato_firmado_en_pdf', 'length', 'max'=>100),
                        array('contrato_firmado_en_pdf', 'file', 
                        'allowEmpty'=>true, 
                        'types'=>'pdf', 
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
			array('fecha_terminacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipo_contrato, fecha_inicio, fecha_terminacion, duracion, valor_salario, fecha_preaviso, estado_preaviso, estado, observacion, conteo, rrhh_centro_costo_id, rrhh_punto_operacion_id, rrhh_perfil_id, rrhh_datos_empleado_id, contrato_firmado_en_pdf, orden_id', 'safe', 'on'=>'search'),
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
			'rrhhCentroCosto' => array(self::BELONGS_TO, 'RrhhCentroCosto', 'rrhh_centro_costo_id'),
			'rrhhDatosEmpleado' => array(self::BELONGS_TO, 'RrhhDatosEmpleado', 'rrhh_datos_empleado_id'),
			'rrhhPerfil' => array(self::BELONGS_TO, 'RrhhPerfil', 'rrhh_perfil_id'),
			'rrhhPuntoOperacion' => array(self::BELONGS_TO, 'RrhhPuntoOperacion', 'rrhh_punto_operacion_id'),
			'rrhhOtroSis' => array(self::HAS_MANY, 'RrhhOtroSi', 'rrhh_contratos_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo_contrato' => 'Tipo Contrato',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_terminacion' => 'Fecha Culminacion',
			'duracion' => 'Duracion',
			'valor_salario' => 'Salarios',
			'fecha_preaviso' => 'Fecha Preaviso',
			'estado_preaviso' => 'Estado Preaviso',
			'estado' => 'Estado',
			'observacion' => 'Observacion',
			'conteo' => 'Conteo',
			'rrhh_centro_costo_id' => 'Centro Costo',
			'rrhh_punto_operacion_id' => 'Punto Operacion',
			'rrhh_perfil_id' => 'Perfil',
			'rrhh_datos_empleado_id' => 'Datos Empleado',
			'contrato_firmado_en_pdf' => 'Archivo',
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
		$criteria->compare('tipo_contrato',$this->tipo_contrato,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_terminacion',$this->fecha_terminacion,true);
		$criteria->compare('duracion',$this->duracion,true);
		$criteria->compare('valor_salario',$this->valor_salario);
		$criteria->compare('fecha_preaviso',$this->fecha_preaviso,true);
		$criteria->compare('estado_preaviso',$this->estado_preaviso);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('conteo',$this->conteo);
		$criteria->compare('rrhh_centro_costo_id',$this->rrhh_centro_costo_id);
		$criteria->compare('rrhh_punto_operacion_id',$this->rrhh_punto_operacion_id);
		$criteria->compare('rrhh_perfil_id',$this->rrhh_perfil_id);
		$criteria->compare('rrhh_datos_empleado_id',$this->rrhh_datos_empleado_id);
		$criteria->compare('contrato_firmado_en_pdf',$this->contrato_firmado_en_pdf,true);
		$criteria->compare('orden_id',$this->orden_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RrhhContratos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
