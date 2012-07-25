<?php

/**
 * This is the model class for table "faturblerjes".
 *
 * The followings are the available columns in table 'faturblerjes':
 * @property integer $nrFatureBlerje
 * @property integer $Furnitore_idFurnitore
 * @property string $dataFatures
 * @property integer $updatedBy
 * @property string $updateDate
 * @property string $shenime
 * @property integer $Shoqata_idShoqata
 *
 * The followings are the available model relations:
 * @property Blerje[] $blerjes
 * @property Users $updatedBy0
 * @property Shoqata $shoqataIdShoqata
 * @property Furnitore $furnitoreIdFurnitore
 */
class Faturblerjes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Faturblerjes the static model class
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
		return 'faturblerjes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Furnitore_idFurnitore, dataFatures, updateDate, Shoqata_idShoqata', 'required'),
			array('Furnitore_idFurnitore, updatedBy, Shoqata_idShoqata', 'numerical', 'integerOnly'=>true),
			array('shenime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nrFatureBlerje, Furnitore_idFurnitore, dataFatures, updatedBy, updateDate, shenime, Shoqata_idShoqata', 'safe', 'on'=>'search'),
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
			'blerjes' => array(self::HAS_MANY, 'Blerje', 'fk_FatureBlerje_Nr'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
			'shoqataIdShoqata' => array(self::BELONGS_TO, 'Shoqata', 'Shoqata_idShoqata'),
			'furnitoreIdFurnitore' => array(self::BELONGS_TO, 'Furnitore', 'Furnitore_idFurnitore'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nrFatureBlerje' => 'Nr Fature Blerje',
			'Furnitore_idFurnitore' => 'Furnitore Id Furnitore',
			'dataFatures' => 'Data Fatures',
			'updatedBy' => 'Updated By',
			'updateDate' => 'Update Date',
			'shenime' => 'Shenime',
			'Shoqata_idShoqata' => 'Shoqata Id Shoqata',
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

		$criteria->compare('nrFatureBlerje',$this->nrFatureBlerje);
		$criteria->compare('Furnitore_idFurnitore',$this->Furnitore_idFurnitore);
		$criteria->compare('dataFatures',$this->dataFatures,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('shenime',$this->shenime,true);
		$criteria->compare('Shoqata_idShoqata',$this->Shoqata_idShoqata);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}