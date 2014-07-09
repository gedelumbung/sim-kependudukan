<?php

/**
 * This is the model class for table "tbl_tik".
 *
 * The followings are the available columns in table 'tbl_tik':
 * @property integer $id_tik
 * @property integer $id_rt
 * @property string $telepon
 * @property string $handphone
 * @property string $jumlah_no_handphone
 * @property string $komputer
 * @property string $internet
 * @property string $jumlah_pengguna_internet
 * @property string $internet_warnet
 * @property string $jumlah_pengguna_internet_warnet
 * @property string $internet_kantor_sekolah
 * @property string $jumlah_pengguna_internet_kantor_sekolah
 * @property string $internet_lainnya
 * @property string $jumlah_pengguna_internet_lainnya
 */
class Tik extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_tik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rt, telepon, handphone, jumlah_no_handphone, komputer, internet, jumlah_pengguna_internet, internet_warnet, jumlah_pengguna_internet_warnet, internet_kantor_sekolah, jumlah_pengguna_internet_kantor_sekolah, internet_lainnya, jumlah_pengguna_internet_lainnya', 'required'),
			array('id_rt', 'numerical', 'integerOnly'=>true),
			array('telepon, handphone, jumlah_no_handphone, komputer, internet, jumlah_pengguna_internet, internet_warnet, jumlah_pengguna_internet_warnet, internet_kantor_sekolah, jumlah_pengguna_internet_kantor_sekolah, internet_lainnya, jumlah_pengguna_internet_lainnya', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tik, id_rt, telepon, handphone, jumlah_no_handphone, komputer, internet, jumlah_pengguna_internet, internet_warnet, jumlah_pengguna_internet_warnet, internet_kantor_sekolah, jumlah_pengguna_internet_kantor_sekolah, internet_lainnya, jumlah_pengguna_internet_lainnya', 'safe', 'on'=>'search'),
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
			'RumahTangga'=>array(self::BELONGS_TO,'RumahTangga','id_rt'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tik' => 'Id Tik',
			'id_rt' => 'Id Rt',
			'telepon' => 'Telepon',
			'handphone' => 'Handphone',
			'jumlah_no_handphone' => 'Jumlah No Handphone',
			'komputer' => 'Komputer',
			'internet' => 'Internet',
			'jumlah_pengguna_internet' => 'Jumlah Pengguna Internet',
			'internet_warnet' => 'Internet Warnet',
			'jumlah_pengguna_internet_warnet' => 'Jumlah Pengguna Internet Warnet',
			'internet_kantor_sekolah' => 'Internet Kantor Sekolah',
			'jumlah_pengguna_internet_kantor_sekolah' => 'Jumlah Pengguna Internet Kantor Sekolah',
			'internet_lainnya' => 'Internet Lainnya',
			'jumlah_pengguna_internet_lainnya' => 'Jumlah Pengguna Internet Lainnya',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_tik',$this->id_tik);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('handphone',$this->handphone,true);
		$criteria->compare('jumlah_no_handphone',$this->jumlah_no_handphone,true);
		$criteria->compare('komputer',$this->komputer,true);
		$criteria->compare('internet',$this->internet,true);
		$criteria->compare('jumlah_pengguna_internet',$this->jumlah_pengguna_internet,true);
		$criteria->compare('internet_warnet',$this->internet_warnet,true);
		$criteria->compare('jumlah_pengguna_internet_warnet',$this->jumlah_pengguna_internet_warnet,true);
		$criteria->compare('internet_kantor_sekolah',$this->internet_kantor_sekolah,true);
		$criteria->compare('jumlah_pengguna_internet_kantor_sekolah',$this->jumlah_pengguna_internet_kantor_sekolah,true);
		$criteria->compare('internet_lainnya',$this->internet_lainnya,true);
		$criteria->compare('jumlah_pengguna_internet_lainnya',$this->jumlah_pengguna_internet_lainnya,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tik the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
