<?php

/**
 * This is the model class for table "tbl_perumahan_survey".
 *
 * The followings are the available columns in table 'tbl_perumahan_survey':
 * @property integer $id_perumahan_survey
 * @property integer $id_rt
 * @property string $jenis_rumah
 * @property string $konstruksi_rumah
 * @property string $kepemilikan_rumah
 * @property string $fungsi_rumah
 * @property string $tahun_pembuatan_rumah
 * @property string $jumlah_lantai
 * @property string $luas_lantai_1
 * @property string $luas_lantai_2
 * @property string $luas_lantai_3
 * @property string $luas_pekarangan
 * @property string $bagian_terluas_atap
 * @property string $kondisi_atap_rumah
 * @property string $bagian_terluas_dinding
 * @property string $kondisi_dinding_rumah
 * @property string $bagian_terluas_lantai
 * @property string $kondisi_lantai_rumah
 * @property string $jumlah_kepemilikan_rumah_lainnya
 * @property string $alamat_rumah_lainnya
 * @property string $kepemilikan_imb
 * @property string $penertiban_imb
 * @property string $kepemilikan_surat_tanah
 * @property string $jarak_sempadan_jalan
 * @property string $jarak_sempadan_sungai
 * @property string $jarak_sempadan_pantai
 * @property string $jarak_sempadan_irigasi
 */
class PerumahanSurvey extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_perumahan_survey';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rt, alamat_rumah_lainnya, gambar, gambar_2, gambar_3', 'required'),
			array('id_rt', 'numerical', 'integerOnly'=>true),
			array('jenis_rumah, konstruksi_rumah, kepemilikan_rumah, fungsi_rumah, tahun_pembuatan_rumah, jumlah_lantai, luas_lantai_1, luas_lantai_2, luas_lantai_3, luas_pekarangan, bagian_terluas_atap, kondisi_atap_rumah, bagian_terluas_dinding, kondisi_dinding_rumah, bagian_terluas_lantai, kondisi_lantai_rumah, jumlah_kepemilikan_rumah_lainnya, kepemilikan_imb, penertiban_imb, kepemilikan_surat_tanah, jarak_sempadan_jalan, jarak_sempadan_sungai, jarak_sempadan_pantai, jarak_sempadan_irigasi', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_perumahan_survey, id_rt, jenis_rumah, konstruksi_rumah, kepemilikan_rumah, fungsi_rumah, tahun_pembuatan_rumah, jumlah_lantai, luas_lantai_1, luas_lantai_2, luas_lantai_3, luas_pekarangan, bagian_terluas_atap, kondisi_atap_rumah, bagian_terluas_dinding, kondisi_dinding_rumah, bagian_terluas_lantai, kondisi_lantai_rumah, jumlah_kepemilikan_rumah_lainnya, alamat_rumah_lainnya, kepemilikan_imb, penertiban_imb, kepemilikan_surat_tanah, jarak_sempadan_jalan, jarak_sempadan_sungai, jarak_sempadan_pantai, jarak_sempadan_irigasi', 'safe', 'on'=>'search'),
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
			'id_perumahan_survey' => 'Id Perumahan Survey',
			'id_rt' => 'Id Rt',
			'jenis_rumah' => 'Jenis Rumah',
			'konstruksi_rumah' => 'Konstruksi Rumah',
			'kepemilikan_rumah' => 'Kepemilikan Rumah',
			'fungsi_rumah' => 'Fungsi Rumah',
			'tahun_pembuatan_rumah' => 'Tahun Pembuatan Rumah',
			'jumlah_lantai' => 'Jumlah Lantai',
			'luas_lantai_1' => 'Luas Lantai 1',
			'luas_lantai_2' => 'Luas Lantai 2',
			'luas_lantai_3' => 'Luas Lantai 3',
			'luas_pekarangan' => 'Luas Pekarangan',
			'bagian_terluas_atap' => 'Bagian Terluas Atap',
			'kondisi_atap_rumah' => 'Kondisi Atap Rumah',
			'bagian_terluas_dinding' => 'Bagian Terluas Dinding',
			'kondisi_dinding_rumah' => 'Kondisi Dinding Rumah',
			'bagian_terluas_lantai' => 'Bagian Terluas Lantai',
			'kondisi_lantai_rumah' => 'Kondisi Lantai Rumah',
			'jumlah_kepemilikan_rumah_lainnya' => 'Jumlah Kepemilikan Rumah Lainnya',
			'alamat_rumah_lainnya' => 'Alamat Rumah Lainnya',
			'kepemilikan_imb' => 'Kepemilikan Imb',
			'penertiban_imb' => 'Penertiban Imb',
			'kepemilikan_surat_tanah' => 'Kepemilikan Surat Tanah',
			'jarak_sempadan_jalan' => 'Jarak Sempadan Jalan',
			'jarak_sempadan_sungai' => 'Jarak Sempadan Sungai',
			'jarak_sempadan_pantai' => 'Jarak Sempadan Pantai',
			'jarak_sempadan_irigasi' => 'Jarak Sempadan Irigasi',
			'gambar_2' => 'Gambar 2',
			'gambar_3' => 'Gambar 3',
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

		$criteria->compare('id_perumahan_survey',$this->id_perumahan_survey);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('jenis_rumah',$this->jenis_rumah,true);
		$criteria->compare('konstruksi_rumah',$this->konstruksi_rumah,true);
		$criteria->compare('kepemilikan_rumah',$this->kepemilikan_rumah,true);
		$criteria->compare('fungsi_rumah',$this->fungsi_rumah,true);
		$criteria->compare('tahun_pembuatan_rumah',$this->tahun_pembuatan_rumah,true);
		$criteria->compare('jumlah_lantai',$this->jumlah_lantai,true);
		$criteria->compare('luas_lantai_1',$this->luas_lantai_1,true);
		$criteria->compare('luas_lantai_2',$this->luas_lantai_2,true);
		$criteria->compare('luas_lantai_3',$this->luas_lantai_3,true);
		$criteria->compare('luas_pekarangan',$this->luas_pekarangan,true);
		$criteria->compare('bagian_terluas_atap',$this->bagian_terluas_atap,true);
		$criteria->compare('kondisi_atap_rumah',$this->kondisi_atap_rumah,true);
		$criteria->compare('bagian_terluas_dinding',$this->bagian_terluas_dinding,true);
		$criteria->compare('kondisi_dinding_rumah',$this->kondisi_dinding_rumah,true);
		$criteria->compare('bagian_terluas_lantai',$this->bagian_terluas_lantai,true);
		$criteria->compare('kondisi_lantai_rumah',$this->kondisi_lantai_rumah,true);
		$criteria->compare('jumlah_kepemilikan_rumah_lainnya',$this->jumlah_kepemilikan_rumah_lainnya,true);
		$criteria->compare('alamat_rumah_lainnya',$this->alamat_rumah_lainnya,true);
		$criteria->compare('kepemilikan_imb',$this->kepemilikan_imb,true);
		$criteria->compare('penertiban_imb',$this->penertiban_imb,true);
		$criteria->compare('kepemilikan_surat_tanah',$this->kepemilikan_surat_tanah,true);
		$criteria->compare('jarak_sempadan_jalan',$this->jarak_sempadan_jalan,true);
		$criteria->compare('jarak_sempadan_sungai',$this->jarak_sempadan_sungai,true);
		$criteria->compare('jarak_sempadan_pantai',$this->jarak_sempadan_pantai,true);
		$criteria->compare('jarak_sempadan_irigasi',$this->jarak_sempadan_irigasi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PerumahanSurvey the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
