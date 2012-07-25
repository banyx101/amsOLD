<?php

/**
 * This is the model class for table "kliente".
 *
 * The followings are the available columns in table 'kliente':
 * @property integer $idKliente
 * @property string $kompania
 * @property string $pershkrimi
 * @property string $NIPT
 * @property string $updateDate
 * @property integer $idPersona
 *
 * The followings are the available model relations:
 * @property Faturshitje[] $faturshitjes
 * @property Persona $idPersona0
 */
class Kliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kliente the static model class
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
		return 'kliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('updateDate', 'required'),
			array('idPersona', 'numerical', 'integerOnly'=>true),
			array('kompania, pershkrimi, NIPT', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idKliente, kompania, pershkrimi, NIPT, updateDate, idPersona', 'safe', 'on'=>'search'),
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
			'faturshitjes' => array(self::HAS_MANY, 'Faturshitje', 'Kliente_idKliente'),
			'idPersona0' => array(self::BELONGS_TO, 'Persona', 'idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idKliente' => 'Id Kliente',
			'kompania' => 'Kompania',
			'pershkrimi' => 'Pershkrimi',
			'NIPT' => 'Nipt',
			'updateDate' => 'Update Date',
			'idPersona' => 'Id Persona',
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

		$criteria->compare('idKliente',$this->idKliente);
		$criteria->compare('kompania',$this->kompania,true);
		$criteria->compare('pershkrimi',$this->pershkrimi,true);
		$criteria->compare('NIPT',$this->NIPT,true);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('idPersona',$this->idPersona);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}