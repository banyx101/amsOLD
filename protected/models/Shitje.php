<?php

/**
 * This is the model class for table "shitje".
 *
 * The followings are the available columns in table 'shitje':
 * @property integer $idShitje
 * @property string $dataDaljes
 * @property string $njesia
 * @property double $sasia
 * @property double $cmimiShitjes
 * @property double $shtesaNeto
 * @property integer $updatedBy
 * @property string $shenime
 * @property integer $Produkte_idProdukte
 * @property integer $fk_FatureShitje_Nr
 *
 * The followings are the available model relations:
 * @property Faturshitje $fkFatureShitjeNr
 * @property Produkte $produkteIdProdukte
 * @property Users $updatedBy0
 */
class Shitje extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Shitje the static model class
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
		return 'shitje';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dataDaljes, sasia, Produkte_idProdukte, fk_FatureShitje_Nr', 'required'),
			array('updatedBy, Produkte_idProdukte, fk_FatureShitje_Nr', 'numerical', 'integerOnly'=>true),
			array('sasia, cmimiShitjes, shtesaNeto', 'numerical'),
			array('njesia', 'length', 'max'=>45),
			array('shenime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idShitje, dataDaljes, njesia, sasia, cmimiShitjes, shtesaNeto, updatedBy, shenime, Produkte_idProdukte, fk_FatureShitje_Nr', 'safe', 'on'=>'search'),
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
			'fkFatureShitjeNr' => array(self::BELONGS_TO, 'Faturshitje', 'fk_FatureShitje_Nr'),
			'produkteIdProdukte' => array(self::BELONGS_TO, 'Produkte', 'Produkte_idProdukte'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idShitje' => 'Id Shitje',
			'dataDaljes' => 'Data Daljes',
			'njesia' => 'Njesia',
			'sasia' => 'Sasia',
			'cmimiShitjes' => 'Cmimi Shitjes',
			'shtesaNeto' => 'Shtesa Neto',
			'updatedBy' => 'Updated By',
			'shenime' => 'Shenime',
			'Produkte_idProdukte' => 'Produkte Id Produkte',
			'fk_FatureShitje_Nr' => 'Fk Fature Shitje Nr',
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

		$criteria->compare('idShitje',$this->idShitje);
		$criteria->compare('dataDaljes',$this->dataDaljes,true);
		$criteria->compare('njesia',$this->njesia,true);
		$criteria->compare('sasia',$this->sasia);
		$criteria->compare('cmimiShitjes',$this->cmimiShitjes);
		$criteria->compare('shtesaNeto',$this->shtesaNeto);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('shenime',$this->shenime,true);
		$criteria->compare('Produkte_idProdukte',$this->Produkte_idProdukte);
		$criteria->compare('fk_FatureShitje_Nr',$this->fk_FatureShitje_Nr);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}