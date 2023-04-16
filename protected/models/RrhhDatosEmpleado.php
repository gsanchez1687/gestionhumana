<?php

/**
 * This is the model class for table "rrhh_datos_empleado".
 *
 * The followings are the available columns in table 'rrhh_datos_empleado':
 * @property integer $id
 * @property string $tipo_documento
 * @property double $numero_documento
 * @property string $lugar_expedicion
 * @property string $primer_nombre
 * @property string $segundo_nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $direccion
 * @property double $tel_fijo
 * @property double $tel_movil
 * @property string $mail_personal
 * @property string $mail_corporativo
 * @property string $fecha_nacimiento
 * @property string $estado_civil
 * @property string $escolaridad
 * @property string $lugar_nacimiento
 * @property string $lugar_residencia
 * @property string $avisar
 * @property double $numero_contacto
 * @property string $parentesco
 * @property string $tipo_sangre
 * @property string $datos_clinicos
 * @property string $eps
 * @property string $fondo_pensiones
 * @property string $cesantias
 * @property string $arl
 * @property string $caja_compensacion
 * @property string $banco
 * @property string $cuenta_bancaria
 * @property string $causal_retiro
 * @property string $item_retiro
 * @property string $poliza
 * @property string $ruta_hojadevida
 * @property string $foto
 * @property integer $estado
 * @property integer $orden_id
 *
 * The followings are the available model relations:
 * @property RrhhContratos[] $rrhhContratoses
 * @property RrhhDotaciones[] $rrhhDotaciones
 * @property RrhhExamenMedico[] $rrhhExamenMedicos
 * @property RrhhIncapacidades[] $rrhhIncapacidades
 * @property RrhhPersonasACargo[] $rrhhPersonasACargos
 * @property RrhhVacaciones[] $rrhhVacaciones
 * @property RrhhVeneficiosExtralegales[] $rrhhVeneficiosExtralegales
 */
class RrhhDatosEmpleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_datos_empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo_documento, numero_documento, primer_nombre, primer_apellido, direccion, tel_fijo, mail_personal, estado_civil, lugar_residencia, avisar, numero_contacto, parentesco, tipo_sangre, eps, fondo_pensiones, cesantias, arl, caja_compensacion, banco, cuenta_bancaria', 'required'),
			array('estado, orden_id', 'numerical', 'integerOnly'=>true),
			array('numero_documento, tel_fijo, tel_movil, numero_contacto', 'numerical'),
			array('tipo_documento, lugar_expedicion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, mail_corporativo, estado_civil, escolaridad, lugar_nacimiento, lugar_residencia, avisar, parentesco, tipo_sangre, datos_clinicos, eps, fondo_pensiones, cesantias, arl, caja_compensacion, banco, item_retiro, poliza', 'length', 'max'=>45),
			array('direccion, foto', 'length', 'max'=>100),
			array('mail_personal', 'length', 'max'=>50),
			array('cuenta_bancaria', 'length', 'max'=>60),
			array('causal_retiro', 'length', 'max'=>300),
			array('ruta_hojadevida', 'length', 'max'=>200),
                       array('ruta_hojadevida', 'file', 
                        'allowEmpty'=>true, 
                        'types'=>'doc, docx, pdf',
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
			array('fecha_nacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipo_documento, numero_documento, lugar_expedicion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, direccion, tel_fijo, tel_movil, mail_personal, mail_corporativo, fecha_nacimiento, estado_civil, escolaridad, lugar_nacimiento, lugar_residencia, avisar, numero_contacto, parentesco, tipo_sangre, datos_clinicos, eps, fondo_pensiones, cesantias, arl, caja_compensacion, banco, cuenta_bancaria, causal_retiro, item_retiro, poliza, ruta_hojadevida, foto, estado, orden_id', 'safe', 'on'=>'search'),
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
			'rrhhContratoses' => array(self::HAS_MANY, 'RrhhContratos', 'rrhh_datos_empleado_id'),
			'rrhhDotaciones' => array(self::HAS_MANY, 'RrhhDotaciones', 'rrhh_datos_empleado_id'),
			'rrhhExamenMedicos' => array(self::HAS_MANY, 'RrhhExamenMedico', 'rrhh_datos_empleado_id'),
			'rrhhIncapacidades' => array(self::HAS_MANY, 'RrhhIncapacidades', 'rrhh_datos_empleado_id'),
			'rrhhPersonasACargos' => array(self::HAS_MANY, 'RrhhPersonasACargo', 'rrhh_datos_empleado_id'),
			'rrhhVacaciones' => array(self::HAS_MANY, 'RrhhVacaciones', 'rrhh_datos_empleado_id'),
			'rrhhVeneficiosExtralegales' => array(self::HAS_MANY, 'RrhhVeneficiosExtralegales', 'rrhh_datos_empleado_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tipo_documento' => 'tipo documento',
			'numero_documento' => 'Numero Documento',
			'lugar_expedicion' => 'lugar expedicion',
			'primer_nombre' => 'Primer Nombre',
			'segundo_nombre' => 'Segundo Nombre',
			'primer_apellido' => 'Primer Apellido',
			'segundo_apellido' => 'Segundo Apellido',
			'direccion' => 'Direccion',
			'tel_fijo' => 'Tel Fijo',
			'tel_movil' => 'Tel Movil',
			'mail_personal' => 'Mail Personal',
			'mail_corporativo' => 'Mail Corporativo',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'estado_civil' => 'estado civil',
			'escolaridad' => 'escolaridad',
			'lugar_nacimiento' => 'lugar nacimiento',
			'lugar_residencia' => 'lugar residencia',
			'avisar' => 'Avisar',
			'numero_contacto' => 'Numero Contacto',
			'parentesco' => 'Parentesco',
			'tipo_sangre' => 'tipo de sangre',
			'datos_clinicos' => 'Datos Clinicos',
			'eps' => 'eps',
			'fondo_pensiones' => 'fondo pensiones',
			'cesantias' => 'cesantias',
			'arl' => 'arl',
			'caja_compensacion' => 'caja compensacion',
			'banco' => 'bancos',
			'cuenta_bancaria' => 'Cuenta Bancaria',
			'causal_retiro' => 'causal retiro',
			'item_retiro' => 'Item Retiro',
			'poliza' => 'poliza',
			'ruta_hojadevida' => 'hoja de vida',
			'foto' => 'foto',
			'estado' => 'Estado',
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
		$criteria->compare('tipo_documento',$this->tipo_documento,true);
		$criteria->compare('numero_documento',$this->numero_documento);
		$criteria->compare('lugar_expedicion',$this->lugar_expedicion,true);
		$criteria->compare('primer_nombre',$this->primer_nombre,true);
		$criteria->compare('segundo_nombre',$this->segundo_nombre,true);
		$criteria->compare('primer_apellido',$this->primer_apellido,true);
		$criteria->compare('segundo_apellido',$this->segundo_apellido,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('tel_fijo',$this->tel_fijo);
		$criteria->compare('tel_movil',$this->tel_movil);
		$criteria->compare('mail_personal',$this->mail_personal,true);
		$criteria->compare('mail_corporativo',$this->mail_corporativo,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('escolaridad',$this->escolaridad,true);
		$criteria->compare('lugar_nacimiento',$this->lugar_nacimiento,true);
		$criteria->compare('lugar_residencia',$this->lugar_residencia,true);
		$criteria->compare('avisar',$this->avisar,true);
		$criteria->compare('numero_contacto',$this->numero_contacto);
		$criteria->compare('parentesco',$this->parentesco,true);
		$criteria->compare('tipo_sangre',$this->tipo_sangre,true);
		$criteria->compare('datos_clinicos',$this->datos_clinicos,true);
		$criteria->compare('eps',$this->eps,true);
		$criteria->compare('fondo_pensiones',$this->fondo_pensiones,true);
		$criteria->compare('cesantias',$this->cesantias,true);
		$criteria->compare('arl',$this->arl,true);
		$criteria->compare('caja_compensacion',$this->caja_compensacion,true);
		$criteria->compare('banco',$this->banco,true);
		$criteria->compare('cuenta_bancaria',$this->cuenta_bancaria,true);
		$criteria->compare('causal_retiro',$this->causal_retiro,true);
		$criteria->compare('item_retiro',$this->item_retiro,true);
		$criteria->compare('poliza',$this->poliza,true);
		$criteria->compare('ruta_hojadevida',$this->ruta_hojadevida,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('t.estado',$this->estado,true);
		$criteria->compare('orden_id',$this->orden_id);
                
		$criteria->order = "id DESC";		
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RrhhDatosEmpleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
