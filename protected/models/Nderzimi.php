<?php

/**
 * This is the model class for table "nderzimi".
 *
 * The followings are the available columns in table 'nderzimi':
 * @property integer $id
 * @property string $matrikullBabai
 * @property string $matrikullNena
 * @property string $dataNderzmit
 * @property string $kryqezim
 * @property string $raceEPaster
 * @property string $libriRaces
 * @property string $genealogicCertificate
 *
 * The followings are the available model relations:
 * @property Regkafsheve[] $regkafsheves
 */
class Nderzimi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nderzimi the static model class
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
		return 'nderzimi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('matrikullBabai, matrikullNena, libriRaces, genealogicCertificate', 'length', 'max'=>45),
			array('dataNderzmit, kryqezim, raceEPaster', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, matrikullBabai, matrikullNena, dataNderzmit, kryqezim, raceEPaster, libriRaces, genealogicCertificate', 'safe', 'on'=>'search'),
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
			'regkafsheves' => array(self::HAS_MANY, 'Regkafsheve', 'idNderzimi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'matrikullBabai' => 'Matrikull Babai',
			'matrikullNena' => 'Matrikull Nena',
			'dataNderzmit' => 'Data Nderzmit',
			'kryqezim' => 'Kryqezim',
			'raceEPaster' => 'Race Epaster',
			'libriRaces' => 'Libri Races',
			'genealogicCertificate' => 'Genealogic Certificate',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('matrikullBabai',$this->matrikullBabai,true);
		$criteria->compare('matrikullNena',$this->matrikullNena,true);
		$criteria->compare('dataNderzmit',$this->dataNderzmit,true);
		$criteria->compare('kryqezim',$this->kryqezim,true);
		$criteria->compare('raceEPaster',$this->raceEPaster,true);
		$criteria->compare('libriRaces',$this->libriRaces,true);
		$criteria->compare('genealogicCertificate',$this->genealogicCertificate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}