<?php

/**
 * This is the model class for table "users_apps".
 *
 * The followings are the available columns in table 'users_apps':
 * @property integer $id
 * @property string $name
 * @property string $client_id
 * @property string $client_secret
 * @property string $redirect_uri
 * @property integer $users_id
 *
 * The followings are the available model relations:
 * @property UsersUsers $users
 * @property UsersAppsScopes[] $usersAppsScopes
 * @property UsersCodeAuthAppsScopes[] $usersCodeAuthAppsScopes
 */
class UsersApps extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_apps';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, client_id, client_secret, users_id', 'required'),
			array('users_id', 'numerical', 'integerOnly'=>true),
			array('name, client_id, client_secret, redirect_uri', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, client_id, client_secret, redirect_uri, users_id', 'safe', 'on'=>'search'),
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
			'users' => array(self::BELONGS_TO, 'UsersUsers', 'users_id'),
			'usersAppsScopes' => array(self::HAS_MANY, 'UsersAppsScopes', 'apps_id'),
			'usersCodeAuthAppsScopes' => array(self::HAS_MANY, 'UsersCodeAuthAppsScopes', 'apps_id'),
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
			'client_id' => 'Client',
			'client_secret' => 'Client Secret',
			'redirect_uri' => 'Redirect Uri',
			'users_id' => 'Users',
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
		$criteria->compare('client_id',$this->client_id,true);
		$criteria->compare('client_secret',$this->client_secret,true);
		$criteria->compare('redirect_uri',$this->redirect_uri,true);
		$criteria->compare('users_id',$this->users_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersApps the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
