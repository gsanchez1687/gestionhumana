<?php

/**
 * This is the model class for table "rrhh_perfil".
 *
 * The followings are the available columns in table 'rrhh_perfil':
 * @property integer $id
 * @property string $cargo
 * @property string $area_departamento
 * @property string $mision
 * @property string $jefe_directo
 * @property string $formato_contrato
 * @property integer $orden_id
 *
 * The followings are the available model relations:
 * @property RrhhContratos[] $rrhhContratoses
 * @property RrhhFunciones[] $rrhhFunciones
 */
class RrhhPerfil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rrhh_perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cargo, mision', 'required'),
			array('orden_id', 'numerical', 'integerOnly'=>true),
			array('cargo, area_departamento, jefe_directo', 'length', 'max'=>100),
			array('mision', 'length', 'max'=>100),
			array('formato_contrato', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cargo, area_departamento, mision, jefe_directo, formato_contrato, orden_id', 'safe', 'on'=>'search'),
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
			'rrhhContratoses' => array(self::HAS_MANY, 'RrhhContratos', 'rrhh_perfil_id'),
			'rrhhFunciones' => array(self::HAS_MANY, 'RrhhFunciones', 'rrhh_perfil_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cargo' => 'Cargo',
			'area_departamento' => 'Area o Departamento',
			'mision' => 'Mision',
			'jefe_directo' => 'Jefe Directo',
			'formato_contrato' => 'Archivo',
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
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('area_departamento',$this->area_departamento,true);
		$criteria->compare('mision',$this->mision,true);
		$criteria->compare('jefe_directo',$this->jefe_directo,true);
		$criteria->compare('formato_contrato',$this->formato_contrato,true);
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
	 * @return RrhhPerfil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
