<?php

/**
 * This is the model class for table "dokumenta".
 *
 * The followings are the available columns in table 'dokumenta':
 * @property integer $idDokumenta
 * @property integer $Shoqata_idShoqata
 * @property string $dokEmer
 * @property string $dokPershkrimi
 * @property string $dokLloji
 * @property string $dokTabelReference
 * @property integer $dokReference
 * @property string $filePath
 * @property double $fileSize
 * @property integer $updatedBy
 * @property string $updateDate
 *
 * The followings are the available model relations:
 * @property Shoqata $shoqataIdShoqata
 * @property Users $updatedBy0
 */
class Doku extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Doku the static model class
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
		return 'dokumenta';
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
			array('Shoqata_idShoqata, dokReference, updatedBy', 'numerical', 'integerOnly'=>true),
			array('fileSize', 'numerical'),
			array('dokEmer', 'length', 'max'=>100),
			array('dokLloji, dokTabelReference, filePath', 'length', 'max'=>45),
			array('dokPershkrimi', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idDokumenta, Shoqata_idShoqata, dokEmer, dokPershkrimi, dokLloji, dokTabelReference, dokReference, filePath, fileSize, updatedBy, updateDate', 'safe', 'on'=>'search'),
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
			'shoqataIdShoqata' => array(self::BELONGS_TO, 'Shoqata', 'Shoqata_idShoqata'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idDokumenta' => 'Id Dokumenta',
			'Shoqata_idShoqata' => 'Shoqata Id Shoqata',
			'dokEmer' => 'Dok Emer',
			'dokPershkrimi' => 'Dok Pershkrimi',
			'dokLloji' => 'Dok Lloji',
			'dokTabelReference' => 'Dok Tabel Reference',
			'dokReference' => 'Dok Reference',
			'filePath' => 'File Path',
			'fileSize' => 'File Size',
			'updatedBy' => 'Updated By',
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

		$criteria->compare('idDokumenta',$this->idDokumenta);
		$criteria->compare('Shoqata_idShoqata',$this->Shoqata_idShoqata);
		$criteria->compare('dokEmer',$this->dokEmer,true);
		$criteria->compare('dokPershkrimi',$this->dokPershkrimi,true);
		$criteria->compare('dokLloji',$this->dokLloji,true);
		$criteria->compare('dokTabelReference',$this->dokTabelReference,true);
		$criteria->compare('dokReference',$this->dokReference);
		$criteria->compare('filePath',$this->filePath,true);
		$criteria->compare('fileSize',$this->fileSize);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('updateDate',$this->updateDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}