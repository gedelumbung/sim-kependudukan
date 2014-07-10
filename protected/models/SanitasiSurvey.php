<?php

/**
 * This is the model class for table "tbl_sanitasi_penerangan_survey".
 *
 * The followings are the available columns in table 'tbl_sanitasi_penerangan_survey':
 * @property integer $id_sanitasi_penerangan_survey
 * @property integer $id_rt
 * @property string $kepemilikan_jamban
 * @property string $jumlah_kepemilikan_jamban
 * @property string $jenis_jamban
 * @property string $jamban_alternatif
 * @property string $sumber_penerangan
 * @property string $sumber_air_bersih
 * @property string $kualitas_air_bersih
 */
class SanitasiSurvey extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_sanitasi_penerangan_survey';
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
			array('kepemilikan_jamban, jumlah_kepemilikan_jamban, jenis_jamban, jamban_alternatif, sumber_penerangan, sumber_air_bersih, kualitas_air_bersih', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sanitasi_penerangan_survey, id_rt, kepemilikan_jamban, jumlah_kepemilikan_jamban, jenis_jamban, jamban_alternatif, sumber_penerangan, sumber_air_bersih, kualitas_air_bersih', 'safe', 'on'=>'search'),
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
			'id_sanitasi_penerangan_survey' => 'Id Sanitasi Penerangan Survey',
			'id_rt' => 'Id Rt',
			'kepemilikan_jamban' => 'Kepemilikan Jamban',
			'jumlah_kepemilikan_jamban' => 'Jumlah Kepemilikan Jamban',
			'jenis_jamban' => 'Jenis Jamban',
			'jamban_alternatif' => 'Jamban Alternatif',
			'sumber_penerangan' => 'Sumber Penerangan',
			'sumber_air_bersih' => 'Sumber Air Bersih',
			'kualitas_air_bersih' => 'Kualitas Air Bersih',
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

		$criteria->compare('id_sanitasi_penerangan_survey',$this->id_sanitasi_penerangan_survey);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('kepemilikan_jamban',$this->kepemilikan_jamban,true);
		$criteria->compare('jumlah_kepemilikan_jamban',$this->jumlah_kepemilikan_jamban,true);
		$criteria->compare('jenis_jamban',$this->jenis_jamban,true);
		$criteria->compare('jamban_alternatif',$this->jamban_alternatif,true);
		$criteria->compare('sumber_penerangan',$this->sumber_penerangan,true);
		$criteria->compare('sumber_air_bersih',$this->sumber_air_bersih,true);
		$criteria->compare('kualitas_air_bersih',$this->kualitas_air_bersih,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SanitasiSurvey the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
