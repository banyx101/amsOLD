<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $idPersona
 * @property integer $Shoqata_idShoqata
 * @property string $emri
 * @property string $mbiemri
 * @property string $dateLindja
 * @property string $atesia
 * @property string $regDate
 * @property integer $updatedBy
 * @property string $updateDate
 * @property string $dokumentID
 *
 * The followings are the available model relations:
 * @property Anetaret $anetaret
 * @property Furnitore[] $furnitores
 * @property Kliente[] $klientes
 * @property Kontakte[] $kontaktes
 * @property Users $updatedBy0
 * @property Shoqata $shoqataIdShoqata
 * @property Stafishoqates[] $stafishoqates
 * @property Users[] $users
 */
class Persona extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Persona the static model class
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
		return 'persona';
	}



 protected function afterFind ()
    {
            // convert to display format konverton ne format europian daten si ne View ashtu edhe ne input per fushat Datelindja 
			//dhe per fushen data e regjistrimit
        $this->dateLindja = strtotime ($this->dateLindja);
        $this->dateLindja = date ('d/m/Y', $this->dateLindja);
		
		$this->regDate = strtotime ($this->regDate);
        $this->regDate = date ('d/m/Y', $this->regDate);
        
       // $this->regDate = strtotime ($this->updateDate);
        //$this->regDate = date ('d/m/Y h:m:s', $this->updateDate);
        //perfundon kontrolli per shfaqet e datave ---------------------------------------------------------------------------//
        
		
		//me ane te ketij kontrolli konvertohet vlera per gjinine dhe printohet Femer apo Mashkull------//
       
        
        $konvertoGjinine = $this->gender;

        switch ($konvertoGjinine) {
 			case "F":
 			$this->gender = "Femer";
 			break;
 			
 			case "M":
 			$this->gender = "Mashkull";
 			break;
 												
 		}//perfundon konvertimi i gjinise----------------------------------------------------------------//
 		
 		
 		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
 		$perdoruesi = $this->updatedBy;
 			if($perdoruesi == 1){
 			$this->updatedBy =  "Admin";
 		}//perfundon perdoruesi-------------------------------------------------------------------------//
 		
 		$this->updateDate = date("Y-m-d H:i:s", time());
          
        parent::afterFind ();
    }

    protected function beforeValidate ()
    {
        // convert to storage format  // lidhet me funksionin me lart afterFind(), dhe pergatit daten per tu pranuar nga MySQL
        $this->dateLindja = strtotime ($this->dateLindja);
        $this->dateLindja = date ('Y-m-d', $this->dateLindja);
		
		$this->regDate = strtotime ($this->regDate);
        $this->regDate = date ('Y-m-d', $this->regDate);
        
        //kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
        $perdoruesi = $this->updatedBy;
        if($perdoruesi == "Admin"){
        	$this->updatedBy =  1;
        }//perfundon perdoruesi-------------------------------------------------------------------------//
         	

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
			array('Shoqata_idShoqata, emri, mbiemri, dateLindja', 'required'),
			array('Shoqata_idShoqata, updatedBy', 'numerical', 'integerOnly'=>true),
			array('emri, mbiemri, atesia, dokumentID', 'length', 'min'=>2, 'max'=>45),
			array('regDate, gender', 'safe'),
				//array('gender', ),
			//array('dateLindja','date','format'=>Yii::app()->locale->getDateFormat('medium')),
			//array('regDate','date','format'=>Yii::app()->locale->getDateFormat('medium')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('emri, mbiemri, dateLindja, atesia, regDate, dokumentID', 'safe', 'on'=>'search'),
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
			'anetaret' => array(self::HAS_ONE, 'Anetaret', 'Persona_idPersona'),
			'furnitores' => array(self::HAS_MANY, 'Furnitore', 'idPersona'),
			'klientes' => array(self::HAS_MANY, 'Kliente', 'idPersona'),
			'kontaktes' => array(self::HAS_MANY, 'Kontakte', 'Persona_idPersona'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
			'shoqataIdShoqata' => array(self::BELONGS_TO, 'Shoqata', 'Shoqata_idShoqata'),
			'stafishoqates' => array(self::HAS_MANY, 'Stafishoqates', 'Persona_idPersona'),
			'users' => array(self::HAS_MANY, 'Users', 'Persona_idPersona'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPersona' => 'Id',
			'Shoqata_idShoqata' => 'Shoqata ku ben pjese',
			'emri' => 'Emri',
			'mbiemri' => 'Mbiemri',
			'dateLindja' => 'Datelindja',
			'atesia' => 'Atesia',
			'regDate' => 'Date e Regjistrimit',
			'updatedBy' => 'Perditesuar prej:',
			'updateDate' => 'Perditesuar me date',
			'dokumentID' => 'Numri ID Dokumentit',
				'gender' => 'Gjinia'
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
			//$this->dateLindja = strftime('%Y-%m-%d', strtotime(str_replace(".", "-", $this->dateLindja)));
		$criteria=new CDbCriteria;

		$criteria->compare('idPersona',$this->idPersona);
		$criteria->compare('Shoqata_idShoqata',$this->Shoqata_idShoqata);
		$criteria->compare('emri',$this->emri,true);
		$criteria->compare('mbiemri',$this->mbiemri,true);
		$criteria->compare('dateLindja',$this->dateLindja,true);
		$criteria->compare('atesia',$this->atesia,true);
		$criteria->compare('regDate',$this->regDate,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('dokumentID',$this->dokumentID,true);
		$criteria->compare('gender',$this->gender,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria, 
		));
	}
	
	
}