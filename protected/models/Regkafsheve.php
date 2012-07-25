<?php

/**
 * This is the model class for table "regkafsheve".
 *
 * The followings are the available columns in table 'regkafsheve':
 * @property integer $idKafshet
 * @property string $matrikulli
 * @property integer $llojiSpecia
 * @property integer $raca
 * @property integer $sasiaKafsheve
 * @property string $dataLindjes
 * @property string $updateDate
 * @property string $inventariFundit
 * @property integer $updatedBy
 * @property integer $Anetaret_idAnetare
 * @property integer $seksi
 * @property string $Hyrje
 * @property string $Dalje
 * @property string $arsyejaLevizjes
 * @property integer $idNderzimi
 * @property string $Shenime
 *
 * The followings are the available model relations:
 * @property Kartaperformances[] $kartaperformances
 * @property Anetaret $anetaretIdAnetare
 * @property Users $updatedBy0
 * @property Nderzimi $idNderzimi0
 * @property Llojisepcia $llojiSpecia0
 * @property Raca $raca0
 * @property Regmjekimitditor[] $regmjekimitditors
 */
class Regkafsheve extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Regkafsheve the static model class
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
		return 'regkafsheve';
	}

	//Contante qe lidhen me listatarray qe furnizojne ne anetaret/view dropDownList() si meposhteme:
	const Lindje ='Lindje';
	const Transferim = 'Transferim';
	const Shitje = 'Shitje';
	const Therje = 'Therje';
	const Ngordhje = 'Ngordhje';
	const Tjeter = 'Tjeter';
	
	const Mashkull = '1';
	const Femer = '2';
	
		//merr nje liste per te mbushur fushen arsyejaLevizjes ne DB sipas percaktimeve ne ENUM field
		
	public function getarsyejaLevizjes(){
		return array (self::Lindje =>'Lindje', self::Transferim =>'Transferim', self::Therje=>'Therje',self::Shitje=>'Shitje',self::Ngordhje => 'Ngordhje', self::Tjeter=>'Tjeter');
	}// nese ne listen enum do te shtohet ndonje opsion duhet te pasqyrohet edhe ketu.

	public function getSexi(){
		return array (self::Mashkull=>'Mashkull', self::Femer=>'Femer');//kujdes per tu ripare shfaqa e te dhenave ne view---------------------//
	}
		
		protected function afterFind ()
	{
		// convert to display format konverton ne format europian daten si ne View ashtu edhe ne input per fushat Datelindja
		//dhe per fushen data e regjistrimit
		$this->dataLindjes = strtotime ($this->dataLindjes);
		$this->dataLindjes = date ('d/m/Y', $this->dataLindjes);
	
		$this->inventariFundit = strtotime ($this->inventariFundit);
		$this->inventariFundit = date ('d/m/Y', $this->inventariFundit);
		
		$this->updateDate = strtotime ($this->updateDate);
		$this->updateDate = date ('d/m/Y h:m:s', $this->updateDate);
	
		//perfundon kontrolli per shfaqet e datave ---------------------------------------------------------------------------//
		
						
		//kontrollon per User dhe paraqet Emrin Mbimerin e Personit--------------------------------------//
		$perdoruesi = $this->updatedBy;
		if($perdoruesi == 1){
			$this->updatedBy =  "Admin";
		}//perfundon perdoruesi-------------------------------------------------------------------------//
			
		
	
		parent::afterFind ();
	}
	
	protected function beforeValidate ()
	{
		// convert to storage format  // lidhet me funksionin me lart afterFind(), dhe pergatit daten per tu pranuar nga MySQL
		$this->dataLindjes = strtotime ($this->dataLindjes);
		$this->dataLindjes = date ('Y-m-d', $this->dataLindjes);
	
		$this->inventariFundit = strtotime ($this->inventariFundit);
		$this->inventariFundit = date ('Y-m-d', $this->inventariFundit);
		
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
			array('llojiSpecia, raca, Anetaret_idAnetare, seksi, arsyejaLevizjes', 'required'),
			array('llojiSpecia, raca, sasiaKafsheve, updatedBy, Anetaret_idAnetare, seksi, idNderzimi', 'numerical', 'integerOnly'=>true),
			array('matrikulli', 'length', 'max'=>45),
			array('Hyrje, Dalje', 'length', 'max'=>1),
			array('arsyejaLevizjes', 'length', 'max'=>10),
			array('dataLindjes, updateDate, inventariFundit', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idKafshet, matrikulli, llojiSpecia, raca, sasiaKafsheve, dataLindjes, updateDate, inventariFundit, updatedBy, Anetaret_idAnetare, seksi, Hyrje, Dalje, arsyejaLevizjes, idNderzimi, Shenime', 'safe', 'on'=>'search'),
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
			'kartaperformances' => array(self::HAS_MANY, 'Kartaperformances', 'RegKafsheve_idKafshet'),
			'anetaretIdAnetare' => array(self::BELONGS_TO, 'Anetaret', 'Anetaret_idAnetare'),
			'updatedBy0' => array(self::BELONGS_TO, 'Users', 'updatedBy'),
			'idNderzimi0' => array(self::BELONGS_TO, 'Nderzimi', 'idNderzimi'),
			'llojiSpecia0' => array(self::BELONGS_TO, 'Llojisepcia', 'llojiSpecia'),
			'raca0' => array(self::BELONGS_TO, 'Raca', 'raca'),
			'regmjekimitditors' => array(self::HAS_MANY, 'Regmjekimitditor', 'RegKafsheve_idKafshet'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idKafshet' => 'Id Kafshet',
			'matrikulli' => 'Matrikulli',
			'llojiSpecia' => 'Lloji Specia',
			'raca' => 'Raca',
			'sasiaKafsheve' => 'Sasia Kafsheve',
			'dataLindjes' => 'Data Lindjes',
			'updateDate' => 'Update Date',
			'inventariFundit' => 'Inventari Fundit',
			'updatedBy' => 'Updated By',
			'Anetaret_idAnetare' => 'Anetaret Id Anetare',
			'seksi' => 'Seksi',
			'Hyrje' => 'Hyrje',
			'Dalje' => 'Dalje',
			'arsyejaLevizjes' => 'Arsyeja Levizjes',
			'idNderzimi' => 'Id Nderzimi',
			'Shenime' => 'Shenime',
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

		$criteria->compare('idKafshet',$this->idKafshet);
		$criteria->compare('matrikulli',$this->matrikulli,true);
		$criteria->compare('llojiSpecia',$this->llojiSpecia);
		$criteria->compare('raca',$this->raca);
		$criteria->compare('sasiaKafsheve',$this->sasiaKafsheve);
		$criteria->compare('dataLindjes',$this->dataLindjes,true);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('inventariFundit',$this->inventariFundit,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('Anetaret_idAnetare',$this->Anetaret_idAnetare);
		$criteria->compare('seksi',$this->seksi);
		$criteria->compare('Hyrje',$this->Hyrje,true);
		$criteria->compare('Dalje',$this->Dalje,true);
		$criteria->compare('arsyejaLevizjes',$this->arsyejaLevizjes,true);
		$criteria->compare('idNderzimi',$this->idNderzimi);
		$criteria->compare('Shenime',$this->Shenime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}