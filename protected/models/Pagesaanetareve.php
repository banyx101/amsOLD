<?php

/**
 * This is the model class for table "pagesaanetareve".
 *
 * The followings are the available columns in table 'pagesaanetareve':
 * @property integer $idpagesaAnetareve
 * @property integer $Anetaret_Persona_idPersona
 * @property string $shumaPaguar
 * @property string $dataPageses
 * @property string $lajmerimPagese
 * @property string $shenime
 * @property integer $udatedBy
 * @property string $updateDate
 *
 * The followings are the available model relations:
 * @property Users $udatedBy0
 * @property Anetaret $anetaretPersonaIdPersona
 */
class Pagesaanetareve extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pagesaanetareve the static model class
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
		return 'pagesaanetareve';
	}

	
	
	protected function afterFind ()
	{
		// convert to display format konverton ne format europian daten si ne View ashtu edhe ne input per fushat Datelindja
		//dhe per fushen data e regjistrimit
		$this->dataPageses = strtotime ($this->dataPageses);
		$this->dataPageses = date ('d/m/Y', $this->dataPageses);
	
		$this->lajmerimPagese = strtotime ($this->lajmerimPagese);
		$this->lajmerimPagese = date ('d/m/Y', $this->lajmerimPagese);
	
		// $this->regDate = strtotime ($this->updateDate);
		//$this->regDate = date ('d/m/Y h:m:s', $this->updateDate);
		//perfundon kontrolli per shfaqet e datave ---------------------------------------------------------------------------//
	
			
		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
		$perdoruesi = $this->udatedBy;
		if($perdoruesi == 1){
			$this->udatedBy =  "Admin";
		}//perfundon perdoruesi-------------------------------------------------------------------------//
			
	
		parent::afterFind ();
	}
	
	protected function beforeValidate ()
	{
		// convert to storage format  // lidhet me funksionin me lart afterFind(), dhe pergatit daten per tu pranuar nga MySQL
		$this->dataPageses = strtotime ($this->dataPageses);
		$this->dataPageses = date ('Y-m-d', $this->dataPageses);
	
		$this->lajmerimPagese = strtotime ($this->lajmerimPagese);
		$this->lajmerimPagese = date ('Y-m-d', $this->lajmerimPagese);
	
		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
		$perdoruesi = $this->udatedBy;
		if($perdoruesi == "Admin"){
			$this->udatedBy =  1;
		}//perfundon perdoruesi-------------------------------------------------------------------------//
	
		
		$this->updateDate = date("Y-m-d H:i:s", time());
	
		return parent::beforeValidate ();
	}
	
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Anetaret_Persona_idPersona', 'required'),
			array('Anetaret_Persona_idPersona, udatedBy', 'numerical', 'integerOnly'=>true),
			array('shumaPaguar', 'length', 'max'=>10),
			array('dataPageses, lajmerimPagese, shenime, updateDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpagesaAnetareve, Anetaret_Persona_idPersona, shumaPaguar, dataPageses, lajmerimPagese, shenime, udatedBy, updateDate', 'safe', 'on'=>'search'),
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
			'udatedBy0' => array(self::BELONGS_TO, 'Users', 'udatedBy'),
			'anetaretPersonaIdPersona' => array(self::BELONGS_TO, 'Anetaret', 'Anetaret_Persona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpagesaAnetareve' => 'Idpagesa Anetareve',
			'Anetaret_Persona_idPersona' => 'Anetaret Persona Id Persona',
			'shumaPaguar' => 'Shuma Paguar',
			'dataPageses' => 'Data Pageses',
			'lajmerimPagese' => 'Lajmerim Pagese',
			'shenime' => 'Shenime',
			'udatedBy' => 'Udated By',
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

		$criteria->compare('idpagesaAnetareve',$this->idpagesaAnetareve);
		$criteria->compare('Anetaret_Persona_idPersona',$this->Anetaret_Persona_idPersona);
		$criteria->compare('shumaPaguar',$this->shumaPaguar,true);
		$criteria->compare('dataPageses',$this->dataPageses,true);
		$criteria->compare('lajmerimPagese',$this->lajmerimPagese,true);
		$criteria->compare('shenime',$this->shenime,true);
		$criteria->compare('udatedBy',$this->udatedBy);
		$criteria->compare('updateDate',$this->updateDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}