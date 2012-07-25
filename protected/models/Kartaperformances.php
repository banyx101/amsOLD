<?php

/**
 * This is the model class for table "kartaperformances".
 *
 * The followings are the available columns in table 'kartaperformances':
 * @property integer $idKartaPerformances
 * @property string $matrikullQengja
 * @property string $peshaLindjes
 * @property string $dataShkeputjes
 * @property string $peshaShkeputjes
 * @property string $peshaNeLargim
 * @property string $cmimiShitjes
 * @property integer $totalQengjaPerDele
 * @property integer $pjelljetEDeleve
 * @property integer $RegKafsheve_idKafshet
 *
 * The followings are the available model relations:
 * @property Regkafsheve $regKafsheveIdKafshet
 */
class Kartaperformances extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kartaperformances the static model class
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
		return 'kartaperformances';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RegKafsheve_idKafshet', 'required'),
			array('totalQengjaPerDele, pjelljetEDeleve, RegKafsheve_idKafshet', 'numerical', 'integerOnly'=>true),
			array('matrikullQengja', 'length', 'max'=>45),
			array('peshaLindjes, peshaShkeputjes, peshaNeLargim, cmimiShitjes', 'length', 'max'=>10),
			array('dataShkeputjes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idKartaPerformances, matrikullQengja, peshaLindjes, dataShkeputjes, peshaShkeputjes, peshaNeLargim, cmimiShitjes, totalQengjaPerDele, pjelljetEDeleve, RegKafsheve_idKafshet', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idKartaPerformances' => 'Id Karta Performances',
			'matrikullQengja' => 'Matrikull Qengja',
			'peshaLindjes' => 'Pesha Lindjes',
			'dataShkeputjes' => 'Data Shkeputjes',
			'peshaShkeputjes' => 'Pesha Shkeputjes',
			'peshaNeLargim' => 'Pesha Ne Largim',
			'cmimiShitjes' => 'Cmimi Shitjes',
			'totalQengjaPerDele' => 'Total Qengja Per Dele',
			'pjelljetEDeleve' => 'Pjelljet Edeleve',
			'RegKafsheve_idKafshet' => 'Reg Kafsheve Id Kafshet',
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

		$criteria->compare('idKartaPerformances',$this->idKartaPerformances);
		$criteria->compare('matrikullQengja',$this->matrikullQengja,true);
		$criteria->compare('peshaLindjes',$this->peshaLindjes,true);
		$criteria->compare('dataShkeputjes',$this->dataShkeputjes,true);
		$criteria->compare('peshaShkeputjes',$this->peshaShkeputjes,true);
		$criteria->compare('peshaNeLargim',$this->peshaNeLargim,true);
		$criteria->compare('cmimiShitjes',$this->cmimiShitjes,true);
		$criteria->compare('totalQengjaPerDele',$this->totalQengjaPerDele);
		$criteria->compare('pjelljetEDeleve',$this->pjelljetEDeleve);
		$criteria->compare('RegKafsheve_idKafshet',$this->RegKafsheve_idKafshet);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}