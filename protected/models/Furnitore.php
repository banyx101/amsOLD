<?php

/**
 * This is the model class for table "furnitore".
 *
 * The followings are the available columns in table 'furnitore':
 * @property integer $idFurnitore
 * @property string $kompania
 * @property string $NIPT
 * @property integer $idPersona
 * @property string $updateDate
 *
 * The followings are the available model relations:
 * @property Faturblerjes[] $faturblerjes
 * @property Persona $idPersona0
 * @property Produkte[] $produktes
 */
class Furnitore extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Furnitore the static model class
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
		return 'furnitore';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPersona', 'numerical', 'integerOnly'=>true),
			array('kompania, NIPT', 'length', 'max'=>45),
			array('updateDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idFurnitore, kompania, NIPT, idPersona, updateDate', 'safe', 'on'=>'search'),
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
			'faturblerjes' => array(self::HAS_MANY, 'Faturblerjes', 'Furnitore_idFurnitore'),
			'idPersona0' => array(self::BELONGS_TO, 'Persona', 'idPersona'),
			'produktes' => array(self::HAS_MANY, 'Produkte', 'idFurnitori'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idFurnitore' => 'Id Furnitore',
			'kompania' => 'Kompania',
			'NIPT' => 'Nipt',
			'idPersona' => 'Id Persona',
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

		$criteria->compare('idFurnitore',$this->idFurnitore);
		$criteria->compare('kompania',$this->kompania,true);
		$criteria->compare('NIPT',$this->NIPT,true);
		$criteria->compare('idPersona',$this->idPersona);
		$criteria->compare('updateDate',$this->updateDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}