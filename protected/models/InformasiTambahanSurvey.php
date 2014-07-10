<?php

/**
 * This is the model class for table "tbl_informasi_tambahan_survey".
 *
 * The followings are the available columns in table 'tbl_informasi_tambahan_survey':
 * @property integer $id_informasi_tambahan_survey
 * @property integer $id_rt
 * @property string $drainase
 * @property string $bentuk_drainase
 * @property string $fungsi_drainase
 * @property string $kualitas_drainase
 * @property string $klasifikasi_drainase
 * @property string $penanganan_limbah_rt
 * @property string $status_jalan_rumah
 * @property string $bentuk_fisik_permukaan_jalan
 * @property string $kualitas_jalan
 * @property string $fungsi_jalan
 * @property string $nama_jalan
 */
class InformasiTambahanSurvey extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_informasi_tambahan_survey';
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
			array('drainase, bentuk_drainase, fungsi_drainase, kualitas_drainase, klasifikasi_drainase, penanganan_limbah_rt, status_jalan_rumah, bentuk_fisik_permukaan_jalan, kualitas_jalan, fungsi_jalan, nama_jalan', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_informasi_tambahan_survey, id_rt, drainase, bentuk_drainase, fungsi_drainase, kualitas_drainase, klasifikasi_drainase, penanganan_limbah_rt, status_jalan_rumah, bentuk_fisik_permukaan_jalan, kualitas_jalan, fungsi_jalan, nama_jalan', 'safe', 'on'=>'search'),
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
			'id_informasi_tambahan_survey' => 'Id Informasi Tambahan Survey',
			'id_rt' => 'Id Rt',
			'drainase' => 'Drainase',
			'bentuk_drainase' => 'Bentuk Drainase',
			'fungsi_drainase' => 'Fungsi Drainase',
			'kualitas_drainase' => 'Kualitas Drainase',
			'klasifikasi_drainase' => 'Klasifikasi Drainase',
			'penanganan_limbah_rt' => 'Penanganan Limbah Rt',
			'status_jalan_rumah' => 'Status Jalan Rumah',
			'bentuk_fisik_permukaan_jalan' => 'Bentuk Fisik Permukaan Jalan',
			'kualitas_jalan' => 'Kualitas Jalan',
			'fungsi_jalan' => 'Fungsi Jalan',
			'nama_jalan' => 'Nama Jalan',
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

		$criteria->compare('id_informasi_tambahan_survey',$this->id_informasi_tambahan_survey);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('drainase',$this->drainase,true);
		$criteria->compare('bentuk_drainase',$this->bentuk_drainase,true);
		$criteria->compare('fungsi_drainase',$this->fungsi_drainase,true);
		$criteria->compare('kualitas_drainase',$this->kualitas_drainase,true);
		$criteria->compare('klasifikasi_drainase',$this->klasifikasi_drainase,true);
		$criteria->compare('penanganan_limbah_rt',$this->penanganan_limbah_rt,true);
		$criteria->compare('status_jalan_rumah',$this->status_jalan_rumah,true);
		$criteria->compare('bentuk_fisik_permukaan_jalan',$this->bentuk_fisik_permukaan_jalan,true);
		$criteria->compare('kualitas_jalan',$this->kualitas_jalan,true);
		$criteria->compare('fungsi_jalan',$this->fungsi_jalan,true);
		$criteria->compare('nama_jalan',$this->nama_jalan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InformasiTambahanSurvey the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
