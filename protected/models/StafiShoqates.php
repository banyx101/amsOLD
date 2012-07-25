<?php

/**
 * This is the model class for table "stafishoqates".
 *
 * The followings are the available columns in table 'stafishoqates':
 * @property integer $idstafiShoqates
 * @property integer $Persona_idPersona
 * @property string $pozicioni
 * @property string $dtStart
 * @property string $endDate
 * @property double $pagaNeto
 * @property string $updateDate
 * @property integer $updatedBy
 *
 * The followings are the available model relations:
 * @property Persona $personaIdPersona
 * @property Users $updatedBy0
 */
class StafiShoqates extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StafiShoqates the static model class
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
		return 'stafishoqates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Persona_idPersona, pozicioni, dtStart, updateDate, updatedBy', 'required'),
			array('Persona_idPersona, updatedBy', 'numerical', 'integerOnly'=>true),
			array('pagaNeto', 'numerical'),
			array('pozicioni', 'length', 'max'=>45),
			array('endDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idstafiShoqates, Persona_idPersona, pozicioni, dtStart, endDate, pagaNeto, updateDate, updatedBy', 'safe', 'on'=>'search'),
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
			'personaIdPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_idPersona'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idstafiShoqates' => 'Idstafi Shoqates',
			'Persona_idPersona' => 'Persona Id Persona',
			'pozicioni' => 'Pozicioni',
			'dtStart' => 'Dt Start',
			'endDate' => 'End Date',
			'pagaNeto' => 'Paga Neto',
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

		$criteria->compare('idstafiShoqates',$this->idstafiShoqates);
		$criteria->compare('Persona_idPersona',$this->Persona_idPersona);
		$criteria->compare('pozicioni',$this->pozicioni,true);
		$criteria->compare('dtStart',$this->dtStart,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('pagaNeto',$this->pagaNeto);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('updatedBy',$this->updatedBy);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}