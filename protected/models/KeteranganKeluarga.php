<?php

/**
 * This is the model class for table "tbl_keterangan_keluarga".
 *
 * The followings are the available columns in table 'tbl_keterangan_keluarga':
 * @property integer $id_keterangan_keluarga
 * @property string $nama_kepala_rt
 * @property string $jenis_kelamin_rt
 * @property integer $jumlah_keluarga
 * @property integer $jumlah_anggota_keluarga
 * @property string $jenis_lantai_bangunan
 * @property string $jenis_dinding_bangunan
 * @property string $fasilitas_buang_air
 * @property string $sumber_air
 * @property string $sumber_penerangan
 * @property string $jenis_bahan_bakar_memasak
 * @property string $frekuensi_membeli_daging_seminggu
 * @property string $frekuensi_makan_perhari
 * @property string $kuantitas_membeli_pakaian_pertahun
 * @property string $kemampuan_berobat
 * @property string $pekerjaan_kepala_rt
 * @property string $pendidikan_kepala_rt
 * @property string $tabungan
 * @property string $emas
 * @property string $televisi
 * @property string $ternak
 * @property string $sepeda_motor
 * @property string $art_balita
 * @property string $art_7_18
 * @property string $art_7_18_sd
 * @property string $art_7_18_smp
 * @property string $art_7_18_sma
 * @property string $art_7_18_tidak_sekolah
 * @property string $art_10_49
 * @property string $kredit_usaha
 */
class KeteranganKeluarga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_keterangan_keluarga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_kepala_rt, id_rt, jenis_kelamin_rt, jumlah_keluarga, jumlah_anggota_keluarga, jenis_lantai_bangunan, jenis_dinding_bangunan, fasilitas_buang_air, sumber_air, sumber_penerangan, jenis_bahan_bakar_memasak, frekuensi_membeli_daging_seminggu, frekuensi_makan_perhari, kuantitas_membeli_pakaian_pertahun, kemampuan_berobat, pekerjaan_kepala_rt, pendidikan_kepala_rt, tabungan, emas, televisi, ternak, sepeda_motor, art_balita, art_7_18, art_7_18_sd, art_7_18_smp, art_7_18_sma, art_7_18_tidak_sekolah, art_10_49, kredit_usaha', 'required'),
			array('jumlah_keluarga, jumlah_anggota_keluarga', 'numerical', 'integerOnly'=>true),
			array('nama_kepala_rt', 'length', 'max'=>150),
			array('jenis_kelamin_rt', 'length', 'max'=>20),
			array('jenis_lantai_bangunan, jenis_dinding_bangunan, fasilitas_buang_air, sumber_air, sumber_penerangan, jenis_bahan_bakar_memasak, frekuensi_membeli_daging_seminggu, frekuensi_makan_perhari, kuantitas_membeli_pakaian_pertahun, kemampuan_berobat, pekerjaan_kepala_rt, pendidikan_kepala_rt', 'length', 'max'=>100),
			array('tabungan, emas, televisi, ternak, sepeda_motor', 'length', 'max'=>5),
			array('art_balita, art_7_18, art_7_18_sd, art_7_18_smp, art_7_18_sma, art_7_18_tidak_sekolah, art_10_49, kredit_usaha', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_keterangan_keluarga, nama_kepala_rt, jenis_kelamin_rt, jumlah_keluarga, jumlah_anggota_keluarga, jenis_lantai_bangunan, jenis_dinding_bangunan, fasilitas_buang_air, sumber_air, sumber_penerangan, jenis_bahan_bakar_memasak, frekuensi_membeli_daging_seminggu, frekuensi_makan_perhari, kuantitas_membeli_pakaian_pertahun, kemampuan_berobat, pekerjaan_kepala_rt, pendidikan_kepala_rt, tabungan, emas, televisi, ternak, sepeda_motor, art_balita, art_7_18, art_7_18_sd, art_7_18_smp, art_7_18_sma, art_7_18_tidak_sekolah, art_10_49, kredit_usaha', 'safe', 'on'=>'search'),
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
			'id_keterangan_keluarga' => 'Id Keterangan Keluarga',
			'id_rt' => 'Id Rt',
			'nama_kepala_rt' => 'Nama Kepala Rt',
			'jenis_kelamin_rt' => 'Jenis Kelamin Rt',
			'jumlah_keluarga' => 'Jumlah Keluarga',
			'jumlah_anggota_keluarga' => 'Jumlah Anggota Keluarga',
			'jenis_lantai_bangunan' => 'Jenis Lantai Bangunan',
			'jenis_dinding_bangunan' => 'Jenis Dinding Bangunan',
			'fasilitas_buang_air' => 'Fasilitas Buang Air',
			'sumber_air' => 'Sumber Air',
			'sumber_penerangan' => 'Sumber Penerangan',
			'jenis_bahan_bakar_memasak' => 'Jenis Bahan Bakar Memasak',
			'frekuensi_membeli_daging_seminggu' => 'Frekuensi Membeli Daging Seminggu',
			'frekuensi_makan_perhari' => 'Frekuensi Makan Perhari',
			'kuantitas_membeli_pakaian_pertahun' => 'Kuantitas Membeli Pakaian Pertahun',
			'kemampuan_berobat' => 'Kemampuan Berobat',
			'pekerjaan_kepala_rt' => 'Pekerjaan Kepala Rt',
			'pendidikan_kepala_rt' => 'Pendidikan Kepala Rt',
			'tabungan' => 'Tabungan',
			'emas' => 'Emas',
			'televisi' => 'Televisi',
			'ternak' => 'Ternak',
			'sepeda_motor' => 'Sepeda Motor',
			'art_balita' => 'Art Balita',
			'art_7_18' => 'Art 7 18',
			'art_7_18_sd' => 'Art 7 18 Sd',
			'art_7_18_smp' => 'Art 7 18 Smp',
			'art_7_18_sma' => 'Art 7 18 Sma',
			'art_7_18_tidak_sekolah' => 'Art 7 18 Tidak Sekolah',
			'art_10_49' => 'Art 10 49',
			'kredit_usaha' => 'Kredit Usaha',
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

		$criteria->compare('id_keterangan_keluarga',$this->id_keterangan_keluarga);
		$criteria->compare('nama_kepala_rt',$this->nama_kepala_rt,true);
		$criteria->compare('jenis_kelamin_rt',$this->jenis_kelamin_rt,true);
		$criteria->compare('jumlah_keluarga',$this->jumlah_keluarga);
		$criteria->compare('jumlah_anggota_keluarga',$this->jumlah_anggota_keluarga);
		$criteria->compare('jenis_lantai_bangunan',$this->jenis_lantai_bangunan,true);
		$criteria->compare('jenis_dinding_bangunan',$this->jenis_dinding_bangunan,true);
		$criteria->compare('fasilitas_buang_air',$this->fasilitas_buang_air,true);
		$criteria->compare('sumber_air',$this->sumber_air,true);
		$criteria->compare('sumber_penerangan',$this->sumber_penerangan,true);
		$criteria->compare('jenis_bahan_bakar_memasak',$this->jenis_bahan_bakar_memasak,true);
		$criteria->compare('frekuensi_membeli_daging_seminggu',$this->frekuensi_membeli_daging_seminggu,true);
		$criteria->compare('frekuensi_makan_perhari',$this->frekuensi_makan_perhari,true);
		$criteria->compare('kuantitas_membeli_pakaian_pertahun',$this->kuantitas_membeli_pakaian_pertahun,true);
		$criteria->compare('kemampuan_berobat',$this->kemampuan_berobat,true);
		$criteria->compare('pekerjaan_kepala_rt',$this->pekerjaan_kepala_rt,true);
		$criteria->compare('pendidikan_kepala_rt',$this->pendidikan_kepala_rt,true);
		$criteria->compare('tabungan',$this->tabungan,true);
		$criteria->compare('emas',$this->emas,true);
		$criteria->compare('televisi',$this->televisi,true);
		$criteria->compare('ternak',$this->ternak,true);
		$criteria->compare('sepeda_motor',$this->sepeda_motor,true);
		$criteria->compare('art_balita',$this->art_balita,true);
		$criteria->compare('art_7_18',$this->art_7_18,true);
		$criteria->compare('art_7_18_sd',$this->art_7_18_sd,true);
		$criteria->compare('art_7_18_smp',$this->art_7_18_smp,true);
		$criteria->compare('art_7_18_sma',$this->art_7_18_sma,true);
		$criteria->compare('art_7_18_tidak_sekolah',$this->art_7_18_tidak_sekolah,true);
		$criteria->compare('art_10_49',$this->art_10_49,true);
		$criteria->compare('kredit_usaha',$this->kredit_usaha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return KeteranganKeluarga the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
