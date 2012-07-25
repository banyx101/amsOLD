<?php

/**
 * This is the model class for table "raca".
 *
 * The followings are the available columns in table 'raca':
 * @property integer $idraca
 * @property string $raca
 * @property string $familia
 *
 * The followings are the available model relations:
 * @property Regkafsheve[] $regkafsheves
 */
class Raca extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Raca the static model class
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
		return 'raca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idraca', 'required'),
			array('idraca', 'numerical', 'integerOnly'=>true),
			array('raca, familia', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idraca, raca, familia', 'safe', 'on'=>'search'),
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
			'regkafsheves' => array(self::HAS_MANY, 'Regkafsheve', 'raca'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idraca' => 'Idraca',
			'raca' => 'Raca',
			'familia' => 'Familia',
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

		$criteria->compare('idraca',$this->idraca);
		$criteria->compare('raca',$this->raca,true);
		$criteria->compare('familia',$this->familia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}