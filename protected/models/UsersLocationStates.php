<?php

/**
 * This is the model class for table "users_location_states".
 *
 * The followings are the available columns in table 'users_location_states':
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property integer $users_location_countries_id
 * @property integer $orden_id
 *
 * The followings are the available model relations:
 * @property UsersLocationCities[] $usersLocationCities
 * @property UsersLocationCountries $usersLocationCountries
 */
class UsersLocationStates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_location_states';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, code, users_location_countries_id, orden_id', 'required'),
			array('users_location_countries_id, orden_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('code', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, code, users_location_countries_id, orden_id', 'safe', 'on'=>'search'),
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
			'usersLocationCities' => array(self::HAS_MANY, 'UsersLocationCities', 'users_location_states_id'),
			'usersLocationCountries' => array(self::BELONGS_TO, 'UsersLocationCountries', 'users_location_countries_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'code' => 'unique:1',
			'users_location_countries_id' => 'type:select;table:users_location_countries',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('users_location_countries_id',$this->users_location_countries_id);
		$criteria->compare('orden_id',$this->orden_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersLocationStates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
