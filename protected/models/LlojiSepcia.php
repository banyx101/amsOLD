<?php

/**
 * This is the model class for table "llojisepcia".
 *
 * The followings are the available columns in table 'llojisepcia':
 * @property integer $idllojiSepcia
 * @property string $emrtimi
 * @property string $familja
 *
 * The followings are the available model relations:
 * @property Regkafsheve[] $regkafsheves
 */
class LlojiSepcia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LlojiSepcia the static model class
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
		return 'llojisepcia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idllojiSepcia', 'required'),
			array('idllojiSepcia', 'numerical', 'integerOnly'=>true),
			array('emrtimi, familja', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idllojiSepcia, emrtimi, familja', 'safe', 'on'=>'search'),
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
			'regkafsheves' => array(self::HAS_MANY, 'Regkafsheve', 'llojiSpecia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idllojiSepcia' => 'Idlloji Sepcia',
			'emrtimi' => 'Emrtimi',
			'familja' => 'Familja',
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

		$criteria->compare('idllojiSepcia',$this->idllojiSepcia);
		$criteria->compare('emrtimi',$this->emrtimi,true);
		$criteria->compare('familja',$this->familja,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}