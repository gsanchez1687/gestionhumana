<?php

/**
 * This is the model class for table "rrhh_punto_operacion".
 *
 * The followings are the available columns in table 'rrhh_punto_operacion':
 * @property integer $id
 * @property string $nombre
 * @property integer $telefono
 * @property string $direccion
 * @property string $ciudad
 * @property string $description
 * @property integer $orden_id
 * @property integer $rrhh_centro_costo_id
 *
 * The followings are the available model relations:
 * @property RrhhContratos[] $rrhhContratoses
 * @property RrhhCentroCosto $rrhhCentroCosto
 */
class RrhhPuntoOperacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_punto_operacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, telefono, direccion, ciudad, rrhh_centro_costo_id', 'required'),
			array('telefono, orden_id, rrhh_centro_costo_id', 'numerical', 'integerOnly'=>true),
			array('nombre, direccion, ciudad, description', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, telefono, direccion, ciudad, description, orden_id, rrhh_centro_costo_id', 'safe', 'on'=>'search'),
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
			'rrhhContratoses' => array(self::HAS_MANY, 'RrhhContratos', 'rrhh_punto_operacion_id'),
			'rrhhCentroCosto' => array(self::BELONGS_TO, 'RrhhCentroCosto', 'rrhh_centro_costo_id'),
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
			'telefono' => 'Telefono',
			'direccion' => 'Direccion',
			'ciudad' => 'type:select;table:users_location_cities',
			'description' => 'Description',
			'orden_id' => 'Orden',
			'rrhh_centro_costo_id' => 'Rrhh Centro Costo',
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
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('orden_id',$this->orden_id);
		$criteria->compare('rrhh_centro_costo_id',$this->rrhh_centro_costo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RrhhPuntoOperacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
