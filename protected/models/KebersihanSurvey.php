<?php

/**
 * This is the model class for table "tbl_kebersihan_survey".
 *
 * The followings are the available columns in table 'tbl_kebersihan_survey':
 * @property integer $id_kebersihan_survey
 * @property integer $id_rt
 * @property string $tps
 * @property string $bentuk_tps
 * @property string $pemilihan_sampah
 * @property string $tps_alternatif
 * @property string $layanan_tps_keliling
 * @property string $intensitas_pengangkutan_sampah
 * @property string $alasan_tidak_berlangganan
 * @property string $keanggotaan_urusan_sampah
 */
class KebersihanSurvey extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_kebersihan_survey';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rt', 'required'),
			array('id_rt', 'numerical', 'integerOnly'=>true),
			array('tps, bentuk_tps, pemilihan_sampah, tps_alternatif, layanan_tps_keliling, intensitas_pengangkutan_sampah, alasan_tidak_berlangganan, keanggotaan_urusan_sampah', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kebersihan_survey, id_rt, tps, bentuk_tps, pemilihan_sampah, tps_alternatif, layanan_tps_keliling, intensitas_pengangkutan_sampah, alasan_tidak_berlangganan, keanggotaan_urusan_sampah', 'safe', 'on'=>'search'),
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
			'id_kebersihan_survey' => 'Id Kebersihan Survey',
			'id_rt' => 'Id Rt',
			'tps' => 'Tps',
			'bentuk_tps' => 'Bentuk Tps',
			'pemilihan_sampah' => 'Pemilihan Sampah',
			'tps_alternatif' => 'Tps Alternatif',
			'layanan_tps_keliling' => 'Layanan Tps Keliling',
			'intensitas_pengangkutan_sampah' => 'Intensitas Pengangkutan Sampah',
			'alasan_tidak_berlangganan' => 'Alasan Tidak Berlangganan',
			'keanggotaan_urusan_sampah' => 'Keanggotaan Urusan Sampah',
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

		$criteria->compare('id_kebersihan_survey',$this->id_kebersihan_survey);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('tps',$this->tps,true);
		$criteria->compare('bentuk_tps',$this->bentuk_tps,true);
		$criteria->compare('pemilihan_sampah',$this->pemilihan_sampah,true);
		$criteria->compare('tps_alternatif',$this->tps_alternatif,true);
		$criteria->compare('layanan_tps_keliling',$this->layanan_tps_keliling,true);
		$criteria->compare('intensitas_pengangkutan_sampah',$this->intensitas_pengangkutan_sampah,true);
		$criteria->compare('alasan_tidak_berlangganan',$this->alasan_tidak_berlangganan,true);
		$criteria->compare('keanggotaan_urusan_sampah',$this->keanggotaan_urusan_sampah,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return KebersihanSurvey the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
