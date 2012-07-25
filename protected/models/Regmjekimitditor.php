<?php

/**
 * This is the model class for table "regmjekimitditor".
 *
 * The followings are the available columns in table 'regmjekimitditor':
 * @property integer $idRegMjekimitDitor
 * @property string $semundja
 * @property string $medikamentiPerdorur
 * @property string $doza
 * @property string $dataPerdorimit
 * @property integer $updatedBy
 * @property string $shenimeMbetjes
 * @property integer $RegKafsheve_idKafshet
 * @property string $updateDate
 *
 * The followings are the available model relations:
 * @property Regkafsheve $regKafsheveIdKafshet
 * @property Users $updatedBy0
 */
class Regmjekimitditor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Regmjekimitditor the static model class
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
		return 'regmjekimitditor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('semundja, medikamentiPerdorur, doza, dataPerdorimit, updatedBy, RegKafsheve_idKafshet, updateDate', 'required'),
			array('updatedBy, RegKafsheve_idKafshet', 'numerical', 'integerOnly'=>true),
			array('semundja, medikamentiPerdorur', 'length', 'max'=>45),
			array('doza', 'length', 'max'=>10),
			array('shenimeMbetjes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idRegMjekimitDitor, semundja, medikamentiPerdorur, doza, dataPerdorimit, updatedBy, shenimeMbetjes, RegKafsheve_idKafshet, updateDate', 'safe', 'on'=>'search'),
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
			'regKafsheveIdKafshet' => array(self::BELONGS_TO, 'Regkafsheve', 'RegKafsheve_idKafshet'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idRegMjekimitDitor' => 'Id Reg Mjekimit Ditor',
			'semundja' => 'Semundja',
			'medikamentiPerdorur' => 'Medikamenti Perdorur',
			'doza' => 'Doza',
			'dataPerdorimit' => 'Data Perdorimit',
			'updatedBy' => 'Updated By',
			'shenimeMbetjes' => 'Shenime Mbetjes',
			'RegKafsheve_idKafshet' => 'Reg Kafsheve Id Kafshet',
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

		$criteria->compare('idRegMjekimitDitor',$this->idRegMjekimitDitor);
		$criteria->compare('semundja',$this->semundja,true);
		$criteria->compare('medikamentiPerdorur',$this->medikamentiPerdorur,true);
		$criteria->compare('doza',$this->doza,true);
		$criteria->compare('dataPerdorimit',$this->dataPerdorimit,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('shenimeMbetjes',$this->shenimeMbetjes,true);
		$criteria->compare('RegKafsheve_idKafshet',$this->RegKafsheve_idKafshet);
		$criteria->compare('updateDate',$this->updateDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}