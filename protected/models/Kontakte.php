<?php

/**
 * This is the model class for table "kontakte".
 *
 * The followings are the available columns in table 'kontakte':
 * @property integer $idKontakte
 * @property integer $Persona_idPersona
 * @property string $rrugaNr
 * @property string $komunaBashki
 * @property string $shteti
 * @property double $longitude
 * @property double $latitude
 * @property integer $telefon
 * @property integer $fax
 * @property string $mobile
 * @property string $email
 * @property string $web
 * @property string $shenime
 * @property integer $updatedBy
 * @property string $updateDate
 * @property string $kotegoria
 *
 * The followings are the available model relations:
 * @property Persona $personaIdPersona
 */
class Kontakte extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kontakte the static model class
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
		return 'kontakte';
	}

	//disa percaktime per Pamjen e te dhenave ne kontakte
	protected function afterFind ()
	{
		// convert to display format konverton ne format europian daten si ne View ashtu edhe ne input per fushat Datelindja
		//dhe per fushen data e regjistrimit
		//$this->updateDate = strtotime ($this->updateDate);
		//$this->updateDate = date ('d/m/Y', $this->updateDate);
		//perfundon kontrolli per shfaqet e datave ---------------------------------------------------------------------------//
					
		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
		$perdoruesi = $this->updatedBy;
		if($perdoruesi == 1){
			$this->updatedBy =  "Admin";
		}//perfundon perdoruesi-------------------------------------------------------------------------//
			
		
		
		parent::afterFind ();
	}
	
	
	//disa konvertime te tipeve te te dhenave perpara se te hune ne DB
	protected function beforeValidate ()
	{
		// convert to storage format  // lidhet me funksionin me lart afterFind(), dhe pergatit daten per tu pranuar nga MySQL
		$this->updateDate = strtotime ($this->updateDate);
		$this->updateDate = date ('Y-m-d', $this->updateDate);
	
		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
		$perdoruesi = $this->updatedBy;
		if($perdoruesi == "Admin"){
			$this->updatedBy =  1;
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
			array('Persona_idPersona, komunaBashki', 'required'),
			array('Persona_idPersona, telefon, fax, updatedBy', 'numerical', 'integerOnly'=>true),
			array('longitude, latitude', 'numerical'),
			array('rrugaNr', 'length', 'max'=>60),
			array('komunaBashki, shteti, mobile, email, web', 'length', 'max'=>45),
			array('shenime, kategoria', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idKontakte, Persona_idPersona, rrugaNr, komunaBashki, shteti, longitude, latitude, telefon, fax, mobile, email, web, shenime, updatedBy, updateDate', 'safe', 'on'=>'search'),
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
			'personaIdPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idKontakte' => 'Id Kontakte',
			'Persona_idPersona' => 'Personi i Lidhur',
			'rrugaNr' => 'Rruga, Nr',
			'komunaBashki' => 'Komuna/Bashki',
			'shteti' => 'Shteti',
			'longitude' => 'Longitude',
			'latitude' => 'Latitude',
			'telefon' => 'Telefoni',
			'fax' => 'Fax',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'web' => 'Web',
			'shenime' => 'Shenime',
			'updatedBy' => 'Perditesuar Prej',
			'updateDate' => 'Perditesimi Fundit',
				'kategoria' => 'Kotegoria e Kontaktit',
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

		$criteria->compare('idKontakte',$this->idKontakte);
		$criteria->compare('Persona_idPersona',$this->Persona_idPersona);
		$criteria->compare('rrugaNr',$this->rrugaNr,true);
		$criteria->compare('komunaBashki',$this->komunaBashki,true);
		$criteria->compare('shteti',$this->shteti,true);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('telefon',$this->telefon);
		$criteria->compare('fax',$this->fax);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('web',$this->web,true);
		$criteria->compare('shenime',$this->shenime,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('updateDate',$this->updateDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}