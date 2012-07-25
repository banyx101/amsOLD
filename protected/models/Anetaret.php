<?php

/**
 * This is the model class for table "anetaret".
 *
 * The followings are the available columns in table 'anetaret':
 * @property integer $Persona_idPersona
 * @property integer $anetareTip_idanetareTip
 * @property string $anetarKode
 * @property string $regDate
 * @property integer $anetarStatus
 * @property integer $pronarMbajtes
 * @property string $tipiProdhimit
 * @property integer $updatedBy
 * @property string $dateUpdate
 * @property string $kodiFermes
 *
 * The followings are the available model relations:
 * @property Users $updatedBy0
 * @property Persona $personaIdPersona
 * @property Anetaretip $anetareTipIdanetareTip
 * @property Deklarimifinanciar[] $deklarimifinanciars
 * @property Pagesaanetareve[] $pagesaanetareves
 * @property Regkafsheve[] $regkafsheves
 */
class Anetaret extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Anetaret the static model class
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
		return 'anetaret';
	}
	
	//Contante qe lidhen me listatarray qe furnizojne ne anetaret/view dropDownList() si meposhteme:
	const pQumesht =1;
	const pMish = 2;
	const pMix = 3;
	
	const aJoAktiv = 0;
	const aAktiv = 1;
	
	const pronar=0;
	const pronarMbajtesi=1;
	const mbajtes=2;
	
	//krijon listat dropDownList() ne forma
	public function getpronarMbajtes(){
		return array(
				
				self::pronar => 'Pronar',
				self::pronarMbajtesi=>'Pronar + Mbajtes',
				self::mbajtes=>'Mbajtes',);
		
	}
	//krijon listat dropDownList() ne forma
	public function getAnetareStatus(){
		return array(
	
				self::aJoAktiv => 'Jo Aktiv',
				self::aAktiv=>'Aktiv',
				);
	
	}
	//krijon listat dropDownList() ne forma
	public function getTipiProdhimit(){
		return array(
	
				self::pMix=>'Mix',
				self::pQumesht => 'Qumesht',
				self::pMish=>'Mish',
		);
	
	}
	
	

	protected function afterFind ()
	{
		// convert to display format konverton ne format europian daten si ne View ashtu edhe ne input per fushat Datelindja
		//dhe per fushen data e regjistrimit
		
		$this->regDate = strtotime ($this->regDate);
		$this->regDate = date ('d/m/Y', $this->regDate);
		
		$this->dateUpdate = strtotime ($this->dateUpdate);
		$this->dateUpdate = date ('d/m/Y', $this->dateUpdate);
	
		// $this->regDate = strtotime ($this->updateDate);
		//$this->regDate = date ('d/m/Y h:m:s', $this->updateDate);
		//perfundon kontrolli per shfaqet e datave ---------------------------------------------------------------------------//
		
		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
		$perdoruesi = $this->updatedBy;
		if($perdoruesi == 1){
			$this->updatedBy =  "Admin";
		}//perfundon perdoruesi-------------------------------------------------------------------------//
	
		//me ane te ketij kontrolli konvertohet vlera per gjinine dhe printohet Femer apo Mashkull------//
		$konvertoTipProdhimi = $this->tipiProdhimit;
	
		switch ($konvertoTipProdhimi) {
			case "1":
				$this->tipiProdhimit = "Qumesh";
				break;
	
			case "2":
				$this->tipiProdhimit = "Mish";
				break;
				
				case "3":
					$this->tipiProdhimit = "Mix";
					break;
					
		}//perfundon konvertimi i gjinise----------------------------------------------------------------//
			
		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
			
		$perdoruesi = $this->updatedBy;
					
		if(isset($perdoruesi) || $perdoruesi!==null){
			$perdoruesi=Yii::app()->user->name;
		}//perfundon perdoruesi-----------------------------------------------------------------------//
			
		//konverton Anetare Status me 0 ose numer tejter Jo Altiv vetem nese mban nje vlere numerike 1 //
		$konvertoAnetareStatus = $this->anetarStatus;
		if ($konvertoAnetareStatus ==1) 		
			$this->anetarStatus = "Aktiv";
			else
				$this->anetarStatus = "Jo Aktiv";//perfundon konvertimi
			
		//konverton anetaret.pronarMbajtessipas: = 3 eshte kur eshte Pronar + Mbajtes // nese eshte =2 Pronar
		// dhe vetem nese eshte 1=Mabjtes //
		$konvertoPronarMbajtes = $this->pronarMbajtes;
		if ($konvertoPronarMbajtes ==1)
			$this->pronarMbajtes = "Mbajtes";
		elseif ($konvertoPronarMbajtes==2)
		$this->pronarMbajtes = "Pronar";
		else 
			$this->pronarMbajtes = "Pronar dhe Mbajtes";//perfundon konvertimi
		
	
		parent::afterFind ();
	}
	
	protected function beforeValidate ()
	{
		// convert to storage format  // lidhet me funksionin me lart afterFind(), dhe pergatit daten per tu pranuar nga MySQL
		
		$this->regDate = strtotime ($this->regDate);
		$this->regDate = date ('Y-m-d', $this->regDate);
	
		// convert to storage format  // lidhet me funksionin me lart afterFind(), dhe pergatit daten per tu pranuar nga MySQL
		//$this->dateUpdate = strtotime ($this->dateUpdate);
		//$this->dateUpdate = date ('Y-m-d', $this->dateUpdate);
		
		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
		$perdoruesi = $this->updatedBy;
		if($perdoruesi == "Admin"){
			$this->updatedBy =  1;
		}//perfundon perdoruesi-------------------------------------------------------------------------//
		
		
		$this->dateUpdate = date("Y-m-d H:i:s", time());
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
			array('Persona_idPersona, regDate, kodiFermes', 'required'),
			array('Persona_idPersona, anetareTip_idanetareTip, anetarStatus, pronarMbajtes, updatedBy', 'numerical', 'integerOnly'=>true),
			array('anetarKode', 'length', 'max'=>10),
				array('kodiFermes', 'length', 'min'=>14,'max'=>14),
			array('tipiProdhimit', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kodiFermes, anetareTip_idanetareTip, anetarKode, regDate, anetarStatus, pronarMbajtes, tipiProdhimit, updatedBy, dateUpdate', 'safe', 'on'=>'search'),
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
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
			'personaIdPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_idPersona'),
			'anetareTipIdanetareTip' => array(self::BELONGS_TO, 'Anetaretip', 'anetareTip_idanetareTip'),
			'deklarimifinanciars' => array(self::HAS_MANY, 'Deklarimifinanciar', 'Anetaret_idAnetare'),
			'pagesaanetareves' => array(self::HAS_MANY, 'Pagesaanetareve', 'Anetaret_Persona_idPersona'),
			'regkafsheves' => array(self::HAS_MANY, 'Regkafsheve', 'Anetaret_idAnetare'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Persona_idPersona' => 'ID Personit',
			'anetareTip_idanetareTip' => 'Tipi i Anetarit',
			'anetarKode' => 'Kodi i Anetarit',
			'regDate' => 'Data Regjistrimit',
			'anetarStatus' => 'Statusi Anetarit',
			'pronarMbajtes' => 'Pronar Mbajtes',
			'tipiProdhimit' => 'Tipi Prodhimit',
			'updatedBy' => 'Perditesuar prej',
			'dateUpdate' => 'Perditesimi Fundit',
				'kodiFermes' => 'Kodi i Ferems (RUDA)',
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

		$criteria->compare('Persona_idPersona',$this->Persona_idPersona);
		$criteria->compare('anetareTip_idanetareTip',$this->anetareTip_idanetareTip);
		$criteria->compare('anetarKode',$this->anetarKode,true);
		$criteria->compare('regDate',$this->regDate,true);
		$criteria->compare('anetarStatus',$this->anetarStatus);
		$criteria->compare('pronarMbajtes',$this->pronarMbajtes);
		$criteria->compare('tipiProdhimit',$this->tipiProdhimit,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('dateUpdate',$this->dateUpdate,true);
		$criteria->compare('kodiFermes',$this->kodiFermes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}