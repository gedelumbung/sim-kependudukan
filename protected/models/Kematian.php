<?php

/**
 * This is the model class for table "tbl_kematian".
 *
 * The followings are the available columns in table 'tbl_kematian':
 * @property integer $id_kematian
 * @property integer $id_rt
 * @property string $nama
 * @property integer $tahun
 * @property string $jenis_kelamin
 * @property string $umur
 * @property string $sebab_kematian
 * @property string $masa_kehamilan
 * @property string $persalinan
 * @property string $nifas
 */
class Kematian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_kematian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rt, nama, tahun, jenis_kelamin, umur, sebab_kematian', 'required'),
			array('id_rt, tahun', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>150),
			array('jenis_kelamin', 'length', 'max'=>10),
			array('umur', 'length', 'max'=>30),
			array('masa_kehamilan, persalinan, nifas', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kematian, id_rt, nama, tahun, jenis_kelamin, umur, sebab_kematian, masa_kehamilan, persalinan, nifas', 'safe', 'on'=>'search'),
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
			'id_kematian' => 'Id Kematian',
			'id_rt' => 'Id Rt',
			'nama' => 'Nama',
			'tahun' => 'Tahun',
			'jenis_kelamin' => 'Jenis Kelamin',
			'umur' => 'Umur',
			'sebab_kematian' => 'Sebab Kematian',
			'masa_kehamilan' => 'Masa Kehamilan',
			'persalinan' => 'Persalinan',
			'nifas' => 'Nifas',
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
	public function search($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->condition = "id_rt = '".$id."'";

		$criteria->compare('id_kematian',$this->id_kematian);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tahun',$this->tahun);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('umur',$this->umur,true);
		$criteria->compare('sebab_kematian',$this->sebab_kematian,true);
		$criteria->compare('masa_kehamilan',$this->masa_kehamilan,true);
		$criteria->compare('persalinan',$this->persalinan,true);
		$criteria->compare('nifas',$this->nifas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kematian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
