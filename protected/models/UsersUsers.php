<?php

/**
 * This is the model class for table "users_users".
 *
 * The followings are the available columns in table 'users_users':
 * @property integer $id
 * @property string $password
 * @property string $email
 * @property string $name
 * @property string $lastname
 * @property string $username
 * @property integer $state
 * @property integer $state_email
 * @property string $img
 * @property string $registered
 * @property integer $trash
 * @property string $phone
 * @property string $address
 * @property string $birthdate
 * @property string $identity
 * @property string $gender
 * @property string $fb_id
 * @property string $fb_img
 *
 * The followings are the available model relations:
 * @property UsersAccessTokens[] $usersAccessTokens
 * @property UsersApps[] $usersApps
 * @property UsersCodeAuth[] $usersCodeAuths
 * @property UsersFollowers[] $usersFollowers
 * @property UsersFollowers[] $usersFollowers1
 * @property UsersFollowing[] $usersFollowings
 * @property UsersFollowing[] $usersFollowings1
 * @property UsersNotifications[] $usersNotifications
 */
class UsersUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, email, state, registered', 'required'),
			array('state, state_email, trash', 'numerical', 'integerOnly'=>true),
			array('password, email', 'length', 'max'=>128),
			array('name, lastname, username, img, phone, address, fb_id, fb_img', 'length', 'max'=>255),
			array('identity', 'length', 'max'=>100),
			array('gender', 'length', 'max'=>10),
			array('birthdate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, password, email, name, lastname, username, state, state_email, img, registered, trash, phone, address, birthdate, identity, gender, fb_id, fb_img', 'safe', 'on'=>'search'),
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
			'usersAccessTokens' => array(self::HAS_MANY, 'UsersAccessTokens', 'users_id'),
			'usersApps' => array(self::HAS_MANY, 'UsersApps', 'users_id'),
			'usersCodeAuths' => array(self::HAS_MANY, 'UsersCodeAuth', 'users_id'),
			'usersFollowers' => array(self::HAS_MANY, 'UsersFollowers', 'users_users_id'),
			'usersFollowers1' => array(self::HAS_MANY, 'UsersFollowers', 'users_follower_id'),
			'usersFollowings' => array(self::HAS_MANY, 'UsersFollowing', 'users_users_id'),
			'usersFollowings1' => array(self::HAS_MANY, 'UsersFollowing', 'users_following_id'),
			'usersNotifications' => array(self::HAS_MANY, 'UsersNotifications', 'users_users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'password' => 'Password',
			'email' => 'Email',
			'name' => 'Name',
			'lastname' => 'Lastname',
			'username' => 'Username',
			'state' => 'State',
			'state_email' => 'State Email',
			'img' => 'type:img;label:Image',
			'registered' => 'Registered',
			'trash' => 'Trash',
			'phone' => 'Phone',
			'address' => 'Address',
			'birthdate' => 'Birthdate',
			'identity' => 'Identity',
			'gender' => 'Gender',
			'fb_id' => 'Fb',
			'fb_img' => 'Fb Img',
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
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('state_email',$this->state_email);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('registered',$this->registered,true);
		$criteria->compare('trash',$this->trash);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('identity',$this->identity,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('fb_id',$this->fb_id,true);
		$criteria->compare('fb_img',$this->fb_img,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
