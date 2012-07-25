<?php

/**
 * This is the model class for table "blerje".
 *
 * The followings are the available columns in table 'blerje':
 * @property integer $idBlerje
 * @property string $dataHyrjes
 * @property double $sasia
 * @property string $njesiaMatese
 * @property double $cmimiBlerjes
 * @property string $shenime
 * @property string $burimiParave
 * @property integer $Produkte_idProdukte
 * @property integer $fk_FatureBlerje_Nr
 *
 * The followings are the available model relations:
 * @property Faturblerjes $fkFatureBlerjeNr
 * @property Produkte $produkteIdProdukte
 */
class Blerje extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Blerje the static model class
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
		return 'blerje';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idBlerje, dataHyrjes, burimiParave, Produkte_idProdukte, fk_FatureBlerje_Nr', 'required'),
			array('idBlerje, Produkte_idProdukte, fk_FatureBlerje_Nr', 'numerical', 'integerOnly'=>true),
			array('sasia, cmimiBlerjes', 'numerical'),
			array('njesiaMatese, burimiParave', 'length', 'max'=>45),
			array('shenime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idBlerje, dataHyrjes, sasia, njesiaMatese, cmimiBlerjes, shenime, burimiParave, Produkte_idProdukte, fk_FatureBlerje_Nr', 'safe', 'on'=>'search'),
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
			'fkFatureBlerjeNr' => array(self::BELONGS_TO, 'Faturblerjes', 'fk_FatureBlerje_Nr'),
			'produkteIdProdukte' => array(self::BELONGS_TO, 'Produkte', 'Produkte_idProdukte'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idBlerje' => 'Id Blerje',
			'dataHyrjes' => 'Data Hyrjes',
			'sasia' => 'Sasia',
			'njesiaMatese' => 'Njesia Matese',
			'cmimiBlerjes' => 'Cmimi Blerjes',
			'shenime' => 'Shenime',
			'burimiParave' => 'Burimi Parave',
			'Produkte_idProdukte' => 'Produkte Id Produkte',
			'fk_FatureBlerje_Nr' => 'Fk Fature Blerje Nr',
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

		$criteria->compare('idBlerje',$this->idBlerje);
		$criteria->compare('dataHyrjes',$this->dataHyrjes,true);
		$criteria->compare('sasia',$this->sasia);
		$criteria->compare('njesiaMatese',$this->njesiaMatese,true);
		$criteria->compare('cmimiBlerjes',$this->cmimiBlerjes);
		$criteria->compare('shenime',$this->shenime,true);
		$criteria->compare('burimiParave',$this->burimiParave,true);
		$criteria->compare('Produkte_idProdukte',$this->Produkte_idProdukte);
		$criteria->compare('fk_FatureBlerje_Nr',$this->fk_FatureBlerje_Nr);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}