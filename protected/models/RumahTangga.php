<?php

/**
 * This is the model class for table "tbl_rt".
 *
 * The followings are the available columns in table 'tbl_rt':
 * @property integer $id_rt
 * @property integer $id_desa_kelurahan
 * @property string $nama_krt
 * @property string $suku_krt
 * @property integer $jumlah_art
 * @property integer $jumlah_anak
 * @property integer $jumlah_art_meninggal
 * @property integer $tahun
 */
class RumahTangga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_rt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_desa_kelurahan, nama_krt, suku_krt, jumlah_art, jumlah_anak, jumlah_art_meninggal, tahun', 'required'),
			array('id_desa_kelurahan, jumlah_art, jumlah_anak, jumlah_art_meninggal, tahun', 'numerical', 'integerOnly'=>true),
			array('nama_krt, suku_krt', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rt, id_desa_kelurahan, nama_krt, suku_krt, jumlah_art, jumlah_anak, jumlah_art_meninggal, tahun', 'safe', 'on'=>'search'),
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
			'DesaKelurahan'=>array(self::BELONGS_TO,'DesaKelurahan','id_desa_kelurahan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_rt' => 'Id Rt',
			'id_desa_kelurahan' => 'Id Desa Kelurahan',
			'nama_krt' => 'Nama Krt',
			'suku_krt' => 'Suku Krt',
			'jumlah_art' => 'Jumlah Art',
			'jumlah_anak' => 'Jumlah Anak',
			'jumlah_art_meninggal' => 'Jumlah Art Meninggal',
			'tahun' => 'Tahun',
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

		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('id_desa_kelurahan',$this->id_desa_kelurahan);
		$criteria->compare('nama_krt',$this->nama_krt,true);
		$criteria->compare('suku_krt',$this->suku_krt,true);
		$criteria->compare('jumlah_art',$this->jumlah_art);
		$criteria->compare('jumlah_anak',$this->jumlah_anak);
		$criteria->compare('jumlah_art_meninggal',$this->jumlah_art_meninggal);
		$criteria->compare('tahun',$this->tahun);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RumahTangga the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
