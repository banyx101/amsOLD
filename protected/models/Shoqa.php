<?php

/**
 * This is the model class for table "shoqata".
 *
 * The followings are the available columns in table 'shoqata':
 * @property integer $idShoqata
 * @property string $kodiShoqates
 * @property string $emriShoqates
 * @property string $pershkrimi
 * @property string $startDate
 * @property string $closeDate
 * @property integer $shoqateStatus
 * @property string $vendimiGjykates
 * @property integer $updatedBy
 * @property string $updateDate
 *
 * The followings are the available model relations:
 * @property Dokumenta[] $dokumentas
 * @property Faturblerjes[] $faturblerjes
 * @property Faturshitje[] $faturshitjes
 * @property Persona[] $personas
 */
class Shoqa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Shoqa the static model class
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
		return 'shoqata';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kodiShoqates, emriShoqates, startDate', 'required'),
			array('shoqateStatus, updatedBy', 'numerical', 'integerOnly'=>true),
			array('kodiShoqates, emriShoqates, vendimiGjykates', 'length', 'max'=>45),
			array('pershkrimi, closeDate, updateDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idShoqata, kodiShoqates, emriShoqates, pershkrimi, startDate, closeDate, shoqateStatus, vendimiGjykates, updatedBy, updateDate', 'safe', 'on'=>'search'),
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
			'dokumentas' => array(self::HAS_MANY, 'Dokumenta', 'Shoqata_idShoqata'),
			'faturblerjes' => array(self::HAS_MANY, 'Faturblerjes', 'Shoqata_idShoqata'),
			'faturshitjes' => array(self::HAS_MANY, 'Faturshitje', 'Shoqata_idShoqata'),
			'personas' => array(self::HAS_MANY, 'Persona', 'Shoqata_idShoqata'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idShoqata' => 'Id Shoqata',
			'kodiShoqates' => 'Kodi Shoqates',
			'emriShoqates' => 'Emri Shoqates',
			'pershkrimi' => 'Pershkrimi',
			'startDate' => 'Start Date',
			'closeDate' => 'Close Date',
			'shoqateStatus' => 'Shoqate Status',
			'vendimiGjykates' => 'Vendimi Gjykates',
			'updatedBy' => 'Updated By',
			'updateDate' => 'Update Date',
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

		$criteria->compare('idShoqata',$this->idShoqata);
		$criteria->compare('kodiShoqates',$this->kodiShoqates,true);
		$criteria->compare('emriShoqates',$this->emriShoqates,true);
		$criteria->compare('pershkrimi',$this->pershkrimi,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('closeDate',$this->closeDate,true);
		$criteria->compare('shoqateStatus',$this->shoqateStatus);
		$criteria->compare('vendimiGjykates',$this->vendimiGjykates,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('updateDate',$this->updateDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}