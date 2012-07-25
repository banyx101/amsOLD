<?php

/**
 * This is the model class for table "faturshitje".
 *
 * The followings are the available columns in table 'faturshitje':
 * @property integer $nrFatureShitje
 * @property integer $Kliente_idKliente
 * @property string $dataFatures
 * @property integer $updatedBy
 * @property string $updateDate
 * @property integer $faturePostuar
 * @property string $shenime
 * @property integer $Shoqata_idShoqata
 *
 * The followings are the available model relations:
 * @property Kliente $klienteIdKliente
 * @property Shoqata $shoqataIdShoqata
 * @property Users $updatedBy0
 * @property Shitje[] $shitjes
 */
class Faturshitje extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Faturshitje the static model class
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
		return 'faturshitje';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Kliente_idKliente, updateDate, Shoqata_idShoqata', 'required'),
			array('Kliente_idKliente, updatedBy, faturePostuar, Shoqata_idShoqata', 'numerical', 'integerOnly'=>true),
			array('dataFatures, shenime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nrFatureShitje, Kliente_idKliente, dataFatures, updatedBy, updateDate, faturePostuar, shenime, Shoqata_idShoqata', 'safe', 'on'=>'search'),
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
			'klienteIdKliente' => array(self::BELONGS_TO, 'Kliente', 'Kliente_idKliente'),
			'shoqataIdShoqata' => array(self::BELONGS_TO, 'Shoqata', 'Shoqata_idShoqata'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
			'shitjes' => array(self::HAS_MANY, 'Shitje', 'fk_FatureShitje_Nr'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nrFatureShitje' => 'Nr Fature Shitje',
			'Kliente_idKliente' => 'Kliente Id Kliente',
			'dataFatures' => 'Data Fatures',
			'updatedBy' => 'Updated By',
			'updateDate' => 'Update Date',
			'faturePostuar' => 'Fature Postuar',
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

		$criteria->compare('nrFatureShitje',$this->nrFatureShitje);
		$criteria->compare('Kliente_idKliente',$this->Kliente_idKliente);
		$criteria->compare('dataFatures',$this->dataFatures,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('faturePostuar',$this->faturePostuar);
		$criteria->compare('shenime',$this->shenime,true);
		$criteria->compare('Shoqata_idShoqata',$this->Shoqata_idShoqata);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}