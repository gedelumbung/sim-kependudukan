<?php

/**
 * This is the model class for table "tbl_art".
 *
 * The followings are the available columns in table 'tbl_art':
 * @property integer $id_art
 * @property integer $id_rt
 * @property string $nik
 * @property string $nama_art
 * @property string $hubungan_krt
 * @property string $jk
 * @property string $tmp_lahir
 * @property string $tgl_lahir
 * @property string $status_kawin
 * @property string $gol_darah
 * @property integer $kartu_kk
 * @property integer $kartu_ak
 * @property integer $buku_nikah
 */
class Art extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_art';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rt, nik, nama_art, hubungan_krt, jk, tmp_lahir, tgl_lahir, status_kawin, gol_darah, kartu_kk, kartu_ak, buku_nikah', 'required'),
			array('id_rt', 'numerical', 'integerOnly'=>true),
			array('nik', 'length', 'max'=>100),
			array('nama_art', 'length', 'max'=>150),
			array('hubungan_krt, tmp_lahir', 'length', 'max'=>10),
			array('jk', 'length', 'max'=>15),
			array('tgl_lahir', 'length', 'max'=>30),
			array('status_kawin', 'length', 'max'=>75),
			array('gol_darah', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_art, id_rt, nik, nama_art, hubungan_krt, jk, tmp_lahir, tgl_lahir, status_kawin, gol_darah, kartu_kk, kartu_ak, buku_nikah', 'safe', 'on'=>'search'),
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
			'id_art' => 'Id Art',
			'id_rt' => 'Id Rt',
			'nik' => 'Nik',
			'nama_art' => 'Nama Art',
			'hubungan_krt' => 'Hubungan Krt',
			'jk' => 'Jk',
			'tmp_lahir' => 'Tmp Lahir',
			'tgl_lahir' => 'Tgl Lahir',
			'status_kawin' => 'Status Kawin',
			'gol_darah' => 'Gol Darah',
			'kartu_kk' => 'Kartu Kk',
			'kartu_ak' => 'Kartu Ak',
			'buku_nikah' => 'Buku Nikah',
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

		$criteria->compare('id_art',$this->id_art);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('nama_art',$this->nama_art,true);
		$criteria->compare('hubungan_krt',$this->hubungan_krt,true);
		$criteria->compare('jk',$this->jk,true);
		$criteria->compare('tmp_lahir',$this->tmp_lahir,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('status_kawin',$this->status_kawin,true);
		$criteria->compare('gol_darah',$this->gol_darah,true);
		$criteria->compare('kartu_kk',$this->kartu_kk);
		$criteria->compare('kartu_ak',$this->kartu_ak);
		$criteria->compare('buku_nikah',$this->buku_nikah);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Art the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
