<?php

/**
 * This is the model class for table "tbl_sosial_ekonomi".
 *
 * The followings are the available columns in table 'tbl_sosial_ekonomi':
 * @property integer $id_sosial_ekonomi
 * @property integer $id_rt
 * @property string $kategori_miskin
 * @property string $kartu_kesehatan
 * @property string $memperoleh_kartu_kesehatan
 * @property string $rawat_jalan_inap_kartu_kesehatan_3_bulan
 * @property string $biaya_rawat_jalan_inap
 * @property string $melahirkan_kehamilan_kartu_kesehatan_3_bulan
 * @property string $biaya_melahirkan_kehamilan
 * @property string $keperluan_kb_kartu_kesehatan_3_bulan
 * @property string $biaya_keperluan_kb
 * @property string $beras_murah
 * @property string $jumlah_beras_murah
 * @property string $harga_beras_murah
 * @property string $kredit_usaha
 * @property string $jumlah_kredit_usaha
 * @property string $bunga_kredit_usaha
 * @property string $sumber_kredit_usaha
 * @property string $art_sebagai_tki
 * @property string $tki_perawat_jumlah
 * @property string $tki_perawat_tahun
 * @property string $tki_pembantu_jumlah
 * @property string $tki_pembantu_tahun
 * @property string $tki_supir_jumlah
 * @property string $tki_supir_tahun
 * @property string $tki_tukang_bangunan_jumlah
 * @property string $tki_tukang_bangunan_tahun
 * @property string $tki_buruh_perkebunan_jumlah
 * @property string $tki_buruh_perkebunan_tahun
 * @property string $tki_buruh_pabrik_jumlah
 * @property string $tki_buruh_pabrik_tahun
 * @property string $beasiswa_pemerintah_jps
 * @property string $beasiswa_pemerintah_non_jps
 * @property string $beasiswa_gn_ota
 * @property string $beasiswa_swasta
 * @property string $beasiswa_sekolah
 * @property string $beasiswa_perorangan
 * @property string $beasiswa_lainnya
 * @property string $beasiswa_sd_jumlah
 * @property string $beasiswa_sd_tahun
 * @property string $beasiswa_smp_jumlah
 * @property string $beasiswa_smp_tahun
 * @property string $beasiswa_sma_jumlah
 * @property string $beasiswa_sma_tahun
 */
class SosialEkonomi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_sosial_ekonomi';
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
			array('kategori_miskin, kartu_kesehatan, memperoleh_kartu_kesehatan, rawat_jalan_inap_kartu_kesehatan_3_bulan, biaya_rawat_jalan_inap, melahirkan_kehamilan_kartu_kesehatan_3_bulan, biaya_melahirkan_kehamilan, keperluan_kb_kartu_kesehatan_3_bulan, biaya_keperluan_kb, beras_murah, jumlah_beras_murah, harga_beras_murah, kredit_usaha, jumlah_kredit_usaha, bunga_kredit_usaha, sumber_kredit_usaha, art_sebagai_tki, tki_perawat_jumlah, tki_perawat_tahun, tki_pembantu_jumlah, tki_pembantu_tahun, tki_supir_jumlah, tki_supir_tahun, tki_tukang_bangunan_jumlah, tki_tukang_bangunan_tahun, tki_buruh_perkebunan_jumlah, tki_buruh_perkebunan_tahun, tki_buruh_pabrik_jumlah, tki_buruh_pabrik_tahun, beasiswa_pemerintah_jps, beasiswa_pemerintah_non_jps, beasiswa_gn_ota, beasiswa_swasta, beasiswa_sekolah, beasiswa_perorangan, beasiswa_lainnya, beasiswa_sd_jumlah, beasiswa_sd_tahun, beasiswa_smp_jumlah, beasiswa_smp_tahun, beasiswa_sma_jumlah, beasiswa_sma_tahun', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sosial_ekonomi, id_rt, kategori_miskin, kartu_kesehatan, memperoleh_kartu_kesehatan, rawat_jalan_inap_kartu_kesehatan_3_bulan, biaya_rawat_jalan_inap, melahirkan_kehamilan_kartu_kesehatan_3_bulan, biaya_melahirkan_kehamilan, keperluan_kb_kartu_kesehatan_3_bulan, biaya_keperluan_kb, beras_murah, jumlah_beras_murah, harga_beras_murah, kredit_usaha, jumlah_kredit_usaha, bunga_kredit_usaha, sumber_kredit_usaha, art_sebagai_tki, tki_perawat_jumlah, tki_perawat_tahun, tki_pembantu_jumlah, tki_pembantu_tahun, tki_supir_jumlah, tki_supir_tahun, tki_tukang_bangunan_jumlah, tki_tukang_bangunan_tahun, tki_buruh_perkebunan_jumlah, tki_buruh_perkebunan_tahun, tki_buruh_pabrik_jumlah, tki_buruh_pabrik_tahun, beasiswa_pemerintah_jps, beasiswa_pemerintah_non_jps, beasiswa_gn_ota, beasiswa_swasta, beasiswa_sekolah, beasiswa_perorangan, beasiswa_lainnya, beasiswa_sd_jumlah, beasiswa_sd_tahun, beasiswa_smp_jumlah, beasiswa_smp_tahun, beasiswa_sma_jumlah, beasiswa_sma_tahun', 'safe', 'on'=>'search'),
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
			'id_sosial_ekonomi' => 'Id Sosial Ekonomi',
			'id_rt' => 'Id Rt',
			'kategori_miskin' => 'Kategori Miskin',
			'kartu_kesehatan' => 'Kartu Kesehatan',
			'memperoleh_kartu_kesehatan' => 'Memperoleh Kartu Kesehatan',
			'rawat_jalan_inap_kartu_kesehatan_3_bulan' => 'Rawat Jalan Inap Kartu Kesehatan 3 Bulan',
			'biaya_rawat_jalan_inap' => 'Biaya Rawat Jalan Inap',
			'melahirkan_kehamilan_kartu_kesehatan_3_bulan' => 'Melahirkan Kehamilan Kartu Kesehatan 3 Bulan',
			'biaya_melahirkan_kehamilan' => 'Biaya Melahirkan Kehamilan',
			'keperluan_kb_kartu_kesehatan_3_bulan' => 'Keperluan Kb Kartu Kesehatan 3 Bulan',
			'biaya_keperluan_kb' => 'Biaya Keperluan Kb',
			'beras_murah' => 'Beras Murah',
			'jumlah_beras_murah' => 'Jumlah Beras Murah',
			'harga_beras_murah' => 'Harga Beras Murah',
			'kredit_usaha' => 'Kredit Usaha',
			'jumlah_kredit_usaha' => 'Jumlah Kredit Usaha',
			'bunga_kredit_usaha' => 'Bunga Kredit Usaha',
			'sumber_kredit_usaha' => 'Sumber Kredit Usaha',
			'art_sebagai_tki' => 'Art Sebagai Tki',
			'tki_perawat_jumlah' => 'Tki Perawat Jumlah',
			'tki_perawat_tahun' => 'Tki Perawat Tahun',
			'tki_pembantu_jumlah' => 'Tki Pembantu Jumlah',
			'tki_pembantu_tahun' => 'Tki Pembantu Tahun',
			'tki_supir_jumlah' => 'Tki Supir Jumlah',
			'tki_supir_tahun' => 'Tki Supir Tahun',
			'tki_tukang_bangunan_jumlah' => 'Tki Tukang Bangunan Jumlah',
			'tki_tukang_bangunan_tahun' => 'Tki Tukang Bangunan Tahun',
			'tki_buruh_perkebunan_jumlah' => 'Tki Buruh Perkebunan Jumlah',
			'tki_buruh_perkebunan_tahun' => 'Tki Buruh Perkebunan Tahun',
			'tki_buruh_pabrik_jumlah' => 'Tki Buruh Pabrik Jumlah',
			'tki_buruh_pabrik_tahun' => 'Tki Buruh Pabrik Tahun',
			'beasiswa_pemerintah_jps' => 'Beasiswa Pemerintah Jps',
			'beasiswa_pemerintah_non_jps' => 'Beasiswa Pemerintah Non Jps',
			'beasiswa_gn_ota' => 'Beasiswa Gn Ota',
			'beasiswa_swasta' => 'Beasiswa Swasta',
			'beasiswa_sekolah' => 'Beasiswa Sekolah',
			'beasiswa_perorangan' => 'Beasiswa Perorangan',
			'beasiswa_lainnya' => 'Beasiswa Lainnya',
			'beasiswa_sd_jumlah' => 'Beasiswa Sd Jumlah',
			'beasiswa_sd_tahun' => 'Beasiswa Sd Tahun',
			'beasiswa_smp_jumlah' => 'Beasiswa Smp Jumlah',
			'beasiswa_smp_tahun' => 'Beasiswa Smp Tahun',
			'beasiswa_sma_jumlah' => 'Beasiswa Sma Jumlah',
			'beasiswa_sma_tahun' => 'Beasiswa Sma Tahun',
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

		$criteria->compare('id_sosial_ekonomi',$this->id_sosial_ekonomi);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('kategori_miskin',$this->kategori_miskin,true);
		$criteria->compare('kartu_kesehatan',$this->kartu_kesehatan,true);
		$criteria->compare('memperoleh_kartu_kesehatan',$this->memperoleh_kartu_kesehatan,true);
		$criteria->compare('rawat_jalan_inap_kartu_kesehatan_3_bulan',$this->rawat_jalan_inap_kartu_kesehatan_3_bulan,true);
		$criteria->compare('biaya_rawat_jalan_inap',$this->biaya_rawat_jalan_inap,true);
		$criteria->compare('melahirkan_kehamilan_kartu_kesehatan_3_bulan',$this->melahirkan_kehamilan_kartu_kesehatan_3_bulan,true);
		$criteria->compare('biaya_melahirkan_kehamilan',$this->biaya_melahirkan_kehamilan,true);
		$criteria->compare('keperluan_kb_kartu_kesehatan_3_bulan',$this->keperluan_kb_kartu_kesehatan_3_bulan,true);
		$criteria->compare('biaya_keperluan_kb',$this->biaya_keperluan_kb,true);
		$criteria->compare('beras_murah',$this->beras_murah,true);
		$criteria->compare('jumlah_beras_murah',$this->jumlah_beras_murah,true);
		$criteria->compare('harga_beras_murah',$this->harga_beras_murah,true);
		$criteria->compare('kredit_usaha',$this->kredit_usaha,true);
		$criteria->compare('jumlah_kredit_usaha',$this->jumlah_kredit_usaha,true);
		$criteria->compare('bunga_kredit_usaha',$this->bunga_kredit_usaha,true);
		$criteria->compare('sumber_kredit_usaha',$this->sumber_kredit_usaha,true);
		$criteria->compare('art_sebagai_tki',$this->art_sebagai_tki,true);
		$criteria->compare('tki_perawat_jumlah',$this->tki_perawat_jumlah,true);
		$criteria->compare('tki_perawat_tahun',$this->tki_perawat_tahun,true);
		$criteria->compare('tki_pembantu_jumlah',$this->tki_pembantu_jumlah,true);
		$criteria->compare('tki_pembantu_tahun',$this->tki_pembantu_tahun,true);
		$criteria->compare('tki_supir_jumlah',$this->tki_supir_jumlah,true);
		$criteria->compare('tki_supir_tahun',$this->tki_supir_tahun,true);
		$criteria->compare('tki_tukang_bangunan_jumlah',$this->tki_tukang_bangunan_jumlah,true);
		$criteria->compare('tki_tukang_bangunan_tahun',$this->tki_tukang_bangunan_tahun,true);
		$criteria->compare('tki_buruh_perkebunan_jumlah',$this->tki_buruh_perkebunan_jumlah,true);
		$criteria->compare('tki_buruh_perkebunan_tahun',$this->tki_buruh_perkebunan_tahun,true);
		$criteria->compare('tki_buruh_pabrik_jumlah',$this->tki_buruh_pabrik_jumlah,true);
		$criteria->compare('tki_buruh_pabrik_tahun',$this->tki_buruh_pabrik_tahun,true);
		$criteria->compare('beasiswa_pemerintah_jps',$this->beasiswa_pemerintah_jps,true);
		$criteria->compare('beasiswa_pemerintah_non_jps',$this->beasiswa_pemerintah_non_jps,true);
		$criteria->compare('beasiswa_gn_ota',$this->beasiswa_gn_ota,true);
		$criteria->compare('beasiswa_swasta',$this->beasiswa_swasta,true);
		$criteria->compare('beasiswa_sekolah',$this->beasiswa_sekolah,true);
		$criteria->compare('beasiswa_perorangan',$this->beasiswa_perorangan,true);
		$criteria->compare('beasiswa_lainnya',$this->beasiswa_lainnya,true);
		$criteria->compare('beasiswa_sd_jumlah',$this->beasiswa_sd_jumlah,true);
		$criteria->compare('beasiswa_sd_tahun',$this->beasiswa_sd_tahun,true);
		$criteria->compare('beasiswa_smp_jumlah',$this->beasiswa_smp_jumlah,true);
		$criteria->compare('beasiswa_smp_tahun',$this->beasiswa_smp_tahun,true);
		$criteria->compare('beasiswa_sma_jumlah',$this->beasiswa_sma_jumlah,true);
		$criteria->compare('beasiswa_sma_tahun',$this->beasiswa_sma_tahun,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SosialEkonomi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
