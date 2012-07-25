<?php

/**
 * This is the model class for table "produkte".
 *
 * The followings are the available columns in table 'produkte':
 * @property integer $idProdukte
 * @property string $emriProduktit
 * @property string $pershkrimi
 * @property string $updateDate
 * @property double $sasia
 * @property string $njesiaMatese
 * @property integer $idFurnitori
 * @property integer $updatedBy
 * @property string $produktSherbim
 *
 * The followings are the available model relations:
 * @property Blerje[] $blerjes
 * @property Furnitore $idFurnitori0
 * @property Users $updatedBy0
 * @property Shitje[] $shitjes
 */
class Produkte extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Produkte the static model class
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
		return 'produkte';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emriProduktit, updateDate, updatedBy, produktSherbim', 'required'),
			array('idFurnitori, updatedBy', 'numerical', 'integerOnly'=>true),
			array('sasia', 'numerical'),
			array('emriProduktit', 'length', 'max'=>100),
			array('pershkrimi', 'length', 'max'=>255),
			array('njesiaMatese', 'length', 'max'=>45),
			array('produktSherbim', 'length', 'max'=>7),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idProdukte, emriProduktit, pershkrimi, updateDate, sasia, njesiaMatese, idFurnitori, updatedBy, produktSherbim', 'safe', 'on'=>'search'),
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
			'blerjes' => array(self::HAS_MANY, 'Blerje', 'Produkte_idProdukte'),
			'idFurnitori0' => array(self::BELONGS_TO, 'Furnitore', 'idFurnitori'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
			'shitjes' => array(self::HAS_MANY, 'Shitje', 'Produkte_idProdukte'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProdukte' => 'Id Produkte',
			'emriProduktit' => 'Emri Produktit',
			'pershkrimi' => 'Pershkrimi',
			'updateDate' => 'Update Date',
			'sasia' => 'Sasia',
			'njesiaMatese' => 'Njesia Matese',
			'idFurnitori' => 'Id Furnitori',
			'updatedBy' => 'Updated By',
			'produktSherbim' => 'Produkt Sherbim',
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

		$criteria->compare('idProdukte',$this->idProdukte);
		$criteria->compare('emriProduktit',$this->emriProduktit,true);
		$criteria->compare('pershkrimi',$this->pershkrimi,true);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('sasia',$this->sasia);
		$criteria->compare('njesiaMatese',$this->njesiaMatese,true);
		$criteria->compare('idFurnitori',$this->idFurnitori);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('produktSherbim',$this->produktSherbim,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}