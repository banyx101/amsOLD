<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $idUsers
 * @property integer $Persona_idPersona
 * @property string $username
 * @property string $password
 * @property string $regDate
 * @property string $userStatus
 * @property string $updateDate
 * @property integer $updatedBy
 *
 * The followings are the available model relations:
 * @property Anetaret[] $anetarets
 * @property Deklarimifinanciar[] $deklarimifinanciars
 * @property Dokumenta[] $dokumentas
 * @property Faturblerjes[] $faturblerjes
 * @property Faturshitje[] $faturshitjes
 * @property Pagesaanetareve[] $pagesaanetareves
 * @property Persona[] $personas
 * @property Produkte[] $produktes
 * @property Regkafsheve[] $regkafsheves
 * @property Regmjekimitditor[] $regmjekimitditors
 * @property Shitje[] $shitjes
 * @property Stafishoqates[] $stafishoqates
 * @property Users $updatedBy0
 * @property Users[] $users
 * @property Persona $personaIdPersona
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Persona_idPersona, username, password', 'required'),
			array('Persona_idPersona, updatedBy', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>45),
			array('password', 'length', 'max'=>255),
			array('userStatus', 'length', 'max'=>1),
			array('regDate, updateDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsers, Persona_idPersona, username, password, regDate, userStatus, updateDate, updatedBy', 'safe', 'on'=>'search'),
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
			'anetarets' => array(self::HAS_MANY, 'Anetaret', 'updatedBy'),
			'deklarimifinanciars' => array(self::HAS_MANY, 'Deklarimifinanciar', 'updatedBy'),
			'dokumentas' => array(self::HAS_MANY, 'Dokumenta', 'updatedBy'),
			'faturblerjes' => array(self::HAS_MANY, 'Faturblerjes', 'updatedBy'),
			'faturshitjes' => array(self::HAS_MANY, 'Faturshitje', 'updatedBy'),
			'pagesaanetareves' => array(self::HAS_MANY, 'Pagesaanetareve', 'udatedBy'),
			'personas' => array(self::HAS_MANY, 'Persona', 'updatedBy'),
			'produktes' => array(self::HAS_MANY, 'Produkte', 'updatedBy'),
			'regkafsheves' => array(self::HAS_MANY, 'Regkafsheve', 'updatedBy'),
			'regmjekimitditors' => array(self::HAS_MANY, 'Regmjekimitditor', 'updatedBy'),
			'shitjes' => array(self::HAS_MANY, 'Shitje', 'updatedBy'),
			'stafishoqates' => array(self::HAS_MANY, 'Stafishoqates', 'updatedBy'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
			'users' => array(self::HAS_MANY, 'Users', 'updatedBy'),
			'personaIdPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsers' => 'Id Users',
			'Persona_idPersona' => 'Persona Id Persona',
			'username' => 'Username',
			'password' => 'Password',
			'regDate' => 'Reg Date',
			'userStatus' => 'User Status',
			'updateDate' => 'Update Date',
			'updatedBy' => 'Updated By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idUsers',$this->idUsers);
		$criteria->compare('Persona_idPersona',$this->Persona_idPersona);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('regDate',$this->regDate,true);
		$criteria->compare('userStatus',$this->userStatus,true);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('updatedBy',$this->updatedBy);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}