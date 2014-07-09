<?php

/**
 * This is the model class for table "tbl_perumahan".
 *
 * The followings are the available columns in table 'tbl_perumahan':
 * @property integer $id_perumahan
 * @property integer $id_rt
 * @property string $status_penguasaan_bangunan
 * @property string $luas_lantai
 * @property string $sumber_air_minum
 * @property string $jarak_sumber_air_sepiteng
 * @property string $penggunaan_tempat_buang_air
 */
class Perumahan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_perumahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rt, status_penguasaan_bangunan, luas_lantai, sumber_air_minum, jarak_sumber_air_sepiteng, penggunaan_tempat_buang_air', 'required'),
			array('id_rt', 'numerical', 'integerOnly'=>true),
			array('status_penguasaan_bangunan', 'length', 'max'=>100),
			array('luas_lantai', 'length', 'max'=>50),
			array('sumber_air_minum, jarak_sumber_air_sepiteng, penggunaan_tempat_buang_air', 'length', 'max'=>75),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_perumahan, id_rt, status_penguasaan_bangunan, luas_lantai, sumber_air_minum, jarak_sumber_air_sepiteng, penggunaan_tempat_buang_air', 'safe', 'on'=>'search'),
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
			'id_perumahan' => 'Id Perumahan',
			'id_rt' => 'Id Rt',
			'status_penguasaan_bangunan' => 'Status Penguasaan Bangunan',
			'luas_lantai' => 'Luas Lantai',
			'sumber_air_minum' => 'Sumber Air Minum',
			'jarak_sumber_air_sepiteng' => 'Jarak Sumber Air Sepiteng',
			'penggunaan_tempat_buang_air' => 'Penggunaan Tempat Buang Air',
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

		$criteria->compare('id_perumahan',$this->id_perumahan);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('status_penguasaan_bangunan',$this->status_penguasaan_bangunan,true);
		$criteria->compare('luas_lantai',$this->luas_lantai,true);
		$criteria->compare('sumber_air_minum',$this->sumber_air_minum,true);
		$criteria->compare('jarak_sumber_air_sepiteng',$this->jarak_sumber_air_sepiteng,true);
		$criteria->compare('penggunaan_tempat_buang_air',$this->penggunaan_tempat_buang_air,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perumahan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
