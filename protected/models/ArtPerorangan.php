<?php

/**
 * This is the model class for table "tbl_art_perorangan".
 *
 * The followings are the available columns in table 'tbl_art_perorangan':
 * @property integer $id_art_perorangan
 * @property integer $id_art
 * @property string $no_urut_ibu_kandung
 * @property string $kehadiran_wawancara
 * @property string $keluhan_panas
 * @property string $keluhan_batuk
 * @property string $keluhan_pilek
 * @property string $keluhan_asma
 * @property string $keluhan_diare
 * @property string $keluhan_sakit_kepala
 * @property string $keluhan_sakit_gigi
 * @property string $keluhan_lainnya
 * @property string $implikasi_keluhan
 * @property string $lama_implikasi
 * @property string $masih_implikasi
 * @property string $pengobatan_sendiri
 * @property string $jenis_pengobatan_sendiri
 * @property string $pengobatan_jalan
 * @property string $berobat_jalan_rs_pemerintah
 * @property string $berobat_jalan_rs_swasta
 * @property string $berobat_jalan_poliklinik
 * @property string $berobat_jalan_puskesmas
 * @property string $berobat_jalan_nakes
 * @property string $berobat_jalan_batra
 * @property string $berobat_jalan_dukun
 * @property string $berobat_jalan_lainnya
 * @property string $rawat_inap
 * @property string $rawat_inap_rs_pemerintah
 * @property string $rawat_inap_rs_swasta
 * @property string $rawat_inap_puskesmas
 * @property string $rawat_inap_nakes
 * @property string $rawat_inap_batra
 * @property string $rawat_inap_lainnya
 * @property string $jamkesmas
 * @property string $jamkesda
 * @property string $jampersal
 * @property string $bpjs
 * @property string $umur_balita
 * @property string $penolong_kelahiran_1
 * @property string $penolong_kelahiran_2
 * @property string $imunisasi_bcg
 * @property string $imunisasi_dpt
 * @property string $imunisasi_polio
 * @property string $imunisasi_campak
 * @property string $imunisasi_hepatitis_b
 * @property string $asi
 * @property string $lama_pemberian_asi
 * @property string $diberi_asi_saja
 * @property string $asi_24_jam
 * @property string $pemeriksaan_kehamilan
 * @property string $pemeriksaan_kehamilan_trisemester_1
 * @property string $pemeriksaan_kehamilan_trisemester_2
 * @property string $pemeriksaan_kehamilan_trisemester_3
 * @property string $partisipasi_sekolah
 * @property string $berhenti_sekolah
 * @property string $pendidikan_tertinggi
 * @property string $penyelenggara_pendidikan
 * @property string $tingkat_tertinggi
 * @property string $ijazah_tertinggi
 * @property string $membaca_menulis
 * @property string $bekerja
 * @property string $sekolah
 * @property string $mengurus_rt
 * @property string $lainnya
 * @property string $kegiatan_terbanyak
 * @property string $tidak_bekerja_sementara
 * @property string $mencari_pekerjaan
 * @property string $membuat_usaha
 * @property string $alasan_tidak_bekerja
 * @property string $jika_ada_tawaran
 * @property string $hari_kerja
 * @property string $jumlah_jam_kerja_seminggu
 * @property string $lapangan_usaha
 * @property string $jenis_pekerjaan
 * @property string $jabatan_pekerjaan
 * @property string $gaji
 * @property string $umur_saat_nikah
 * @property string $jumlah_tahun_nikah
 * @property string $anak_lahir_hidup_laki
 * @property string $anak_lahir_hidup_perempuan
 * @property string $anak_lahir_masih_hidup_laki
 * @property string $anak_lahir_masih_hidup_perempuan
 * @property string $anak_meninggal_laki
 * @property string $anak_meninggal_perempuan
 * @property string $alat_kb
 * @property string $alat_kb_dipakai
 */
class ArtPerorangan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_art_perorangan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_art', 'required'),
			array('id_art', 'numerical', 'integerOnly'=>true),
			array('no_urut_ibu_kandung, kehadiran_wawancara, keluhan_panas, keluhan_batuk, keluhan_pilek, keluhan_asma, keluhan_diare, keluhan_sakit_kepala, keluhan_sakit_gigi, keluhan_lainnya, implikasi_keluhan, lama_implikasi, masih_implikasi, pengobatan_sendiri, jenis_pengobatan_sendiri, pengobatan_jalan, berobat_jalan_rs_pemerintah, berobat_jalan_rs_swasta, berobat_jalan_poliklinik, berobat_jalan_puskesmas, berobat_jalan_nakes, berobat_jalan_batra, berobat_jalan_dukun, berobat_jalan_lainnya, rawat_inap, rawat_inap_rs_pemerintah, rawat_inap_rs_swasta, rawat_inap_puskesmas, rawat_inap_nakes, rawat_inap_batra, rawat_inap_lainnya, jamkesmas, jamkesda, jampersal, bpjs, umur_balita, penolong_kelahiran_1, penolong_kelahiran_2, imunisasi_bcg, imunisasi_dpt, imunisasi_polio, imunisasi_campak, imunisasi_hepatitis_b, asi, lama_pemberian_asi, diberi_asi_saja, asi_24_jam, pemeriksaan_kehamilan, pemeriksaan_kehamilan_trisemester_1, pemeriksaan_kehamilan_trisemester_2, pemeriksaan_kehamilan_trisemester_3, partisipasi_sekolah, berhenti_sekolah, pendidikan_tertinggi, penyelenggara_pendidikan, tingkat_tertinggi, ijazah_tertinggi, membaca_menulis, bekerja, sekolah, mengurus_rt, lainnya, kegiatan_terbanyak, tidak_bekerja_sementara, mencari_pekerjaan, membuat_usaha, alasan_tidak_bekerja, jika_ada_tawaran, hari_kerja, jumlah_jam_kerja_seminggu, lapangan_usaha, jenis_pekerjaan, jabatan_pekerjaan, gaji, umur_saat_nikah, jumlah_tahun_nikah, anak_lahir_hidup_laki, anak_lahir_hidup_perempuan, anak_lahir_masih_hidup_laki, anak_lahir_masih_hidup_perempuan, anak_meninggal_laki, anak_meninggal_perempuan, alat_kb, alat_kb_dipakai, memakai_alat_kb', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_art_perorangan, id_art, no_urut_ibu_kandung, kehadiran_wawancara, keluhan_panas, keluhan_batuk, keluhan_pilek, keluhan_asma, keluhan_diare, keluhan_sakit_kepala, keluhan_sakit_gigi, keluhan_lainnya, implikasi_keluhan, lama_implikasi, masih_implikasi, pengobatan_sendiri, jenis_pengobatan_sendiri, pengobatan_jalan, berobat_jalan_rs_pemerintah, berobat_jalan_rs_swasta, berobat_jalan_poliklinik, berobat_jalan_puskesmas, berobat_jalan_nakes, berobat_jalan_batra, berobat_jalan_dukun, berobat_jalan_lainnya, rawat_inap, rawat_inap_rs_pemerintah, rawat_inap_rs_swasta, rawat_inap_puskesmas, rawat_inap_nakes, rawat_inap_batra, rawat_inap_lainnya, jamkesmas, jamkesda, jampersal, bpjs, umur_balita, penolong_kelahiran_1, penolong_kelahiran_2, imunisasi_bcg, imunisasi_dpt, imunisasi_polio, imunisasi_campak, imunisasi_hepatitis_b, asi, lama_pemberian_asi, diberi_asi_saja, asi_24_jam, pemeriksaan_kehamilan, pemeriksaan_kehamilan_trisemester_1, pemeriksaan_kehamilan_trisemester_2, pemeriksaan_kehamilan_trisemester_3, partisipasi_sekolah, berhenti_sekolah, pendidikan_tertinggi, penyelenggara_pendidikan, tingkat_tertinggi, ijazah_tertinggi, membaca_menulis, bekerja, sekolah, mengurus_rt, lainnya, kegiatan_terbanyak, tidak_bekerja_sementara, mencari_pekerjaan, membuat_usaha, alasan_tidak_bekerja, jika_ada_tawaran, hari_kerja, jumlah_jam_kerja_seminggu, lapangan_usaha, jenis_pekerjaan, jabatan_pekerjaan, gaji, umur_saat_nikah, jumlah_tahun_nikah, anak_lahir_hidup_laki, anak_lahir_hidup_perempuan, anak_lahir_masih_hidup_laki, anak_lahir_masih_hidup_perempuan, anak_meninggal_laki, anak_meninggal_perempuan, alat_kb, alat_kb_dipakai, memakai_alat_kb', 'safe', 'on'=>'search'),
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
			'Art'=>array(self::BELONGS_TO,'Art','id_art'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_art_perorangan' => 'Id Art Perorangan',
			'id_art' => 'Id Art',
			'no_urut_ibu_kandung' => 'No Urut Ibu Kandung',
			'kehadiran_wawancara' => 'Kehadiran Wawancara',
			'kurang_gizi' => 'Kurang Gizi',
			'keluhan_panas' => 'Keluhan Panas',
			'keluhan_batuk' => 'Keluhan Batuk',
			'keluhan_pilek' => 'Keluhan Pilek',
			'keluhan_asma' => 'Keluhan Asma',
			'keluhan_diare' => 'Keluhan Diare',
			'keluhan_sakit_kepala' => 'Keluhan Sakit Kepala',
			'keluhan_sakit_gigi' => 'Keluhan Sakit Gigi',
			'keluhan_lainnya' => 'Keluhan Lainnya',
			'implikasi_keluhan' => 'Implikasi Keluhan',
			'lama_implikasi' => 'Lama Implikasi',
			'masih_implikasi' => 'Masih Implikasi',
			'pengobatan_sendiri' => 'Pengobatan Sendiri',
			'jenis_pengobatan_sendiri' => 'Jenis Pengobatan Sendiri',
			'pengobatan_jalan' => 'Pengobatan Jalan',
			'berobat_jalan_rs_pemerintah' => 'Berobat Jalan Rs Pemerintah',
			'berobat_jalan_rs_swasta' => 'Berobat Jalan Rs Swasta',
			'berobat_jalan_poliklinik' => 'Berobat Jalan Poliklinik',
			'berobat_jalan_puskesmas' => 'Berobat Jalan Puskesmas',
			'berobat_jalan_nakes' => 'Berobat Jalan Nakes',
			'berobat_jalan_batra' => 'Berobat Jalan Batra',
			'berobat_jalan_dukun' => 'Berobat Jalan Dukun',
			'berobat_jalan_lainnya' => 'Berobat Jalan Lainnya',
			'rawat_inap' => 'Rawat Inap',
			'rawat_inap_rs_pemerintah' => 'Rawat Inap Rs Pemerintah',
			'rawat_inap_rs_swasta' => 'Rawat Inap Rs Swasta',
			'rawat_inap_puskesmas' => 'Rawat Inap Puskesmas',
			'rawat_inap_nakes' => 'Rawat Inap Nakes',
			'rawat_inap_batra' => 'Rawat Inap Batra',
			'rawat_inap_lainnya' => 'Rawat Inap Lainnya',
			'jamkesmas' => 'Jamkesmas',
			'jamkesda' => 'Jamkesda',
			'jampersal' => 'Jampersal',
			'bpjs' => 'Bpjs',
			'umur_balita' => 'Umur Balita',
			'penolong_kelahiran_1' => 'Penolong Kelahiran 1',
			'penolong_kelahiran_2' => 'Penolong Kelahiran 2',
			'imunisasi_bcg' => 'Imunisasi Bcg',
			'imunisasi_dpt' => 'Imunisasi Dpt',
			'imunisasi_polio' => 'Imunisasi Polio',
			'imunisasi_campak' => 'Imunisasi Campak',
			'imunisasi_hepatitis_b' => 'Imunisasi Hepatitis B',
			'asi' => 'Asi',
			'lama_pemberian_asi' => 'Lama Pemberian Asi',
			'diberi_asi_saja' => 'Diberi Asi Saja',
			'asi_24_jam' => 'Asi 24 Jam',
			'pemeriksaan_kehamilan' => 'Pemeriksaan Kehamilan',
			'pemeriksaan_kehamilan_trisemester_1' => 'Pemeriksaan Kehamilan Trisemester 1',
			'pemeriksaan_kehamilan_trisemester_2' => 'Pemeriksaan Kehamilan Trisemester 2',
			'pemeriksaan_kehamilan_trisemester_3' => 'Pemeriksaan Kehamilan Trisemester 3',
			'partisipasi_sekolah' => 'Partisipasi Sekolah',
			'berhenti_sekolah' => 'Berhenti Sekolah',
			'pendidikan_tertinggi' => 'Pendidikan Tertinggi',
			'penyelenggara_pendidikan' => 'Penyelenggara Pendidikan',
			'tingkat_tertinggi' => 'Tingkat Tertinggi',
			'ijazah_tertinggi' => 'Ijazah Tertinggi',
			'membaca_menulis' => 'Membaca Menulis',
			'bekerja' => 'Bekerja',
			'sekolah' => 'Sekolah',
			'mengurus_rt' => 'Mengurus Rt',
			'lainnya' => 'Lainnya',
			'kegiatan_terbanyak' => 'Kegiatan Terbanyak',
			'tidak_bekerja_sementara' => 'Tidak Bekerja Sementara',
			'mencari_pekerjaan' => 'Mencari Pekerjaan',
			'membuat_usaha' => 'Membuat Usaha',
			'alasan_tidak_bekerja' => 'Alasan Tidak Bekerja',
			'jika_ada_tawaran' => 'Jika Ada Tawaran',
			'hari_kerja' => 'Hari Kerja',
			'jumlah_jam_kerja_seminggu' => 'Jumlah Jam Kerja Seminggu',
			'lapangan_usaha' => 'Lapangan Usaha',
			'jenis_pekerjaan' => 'Jenis Pekerjaan',
			'jabatan_pekerjaan' => 'Jabatan Pekerjaan',
			'gaji' => 'Gaji',
			'umur_saat_nikah' => 'Umur Saat Nikah',
			'jumlah_tahun_nikah' => 'Jumlah Tahun Nikah',
			'anak_lahir_hidup_laki' => 'Anak Lahir Hidup Laki',
			'anak_lahir_hidup_perempuan' => 'Anak Lahir Hidup Perempuan',
			'anak_lahir_masih_hidup_laki' => 'Anak Lahir Masih Hidup Laki',
			'anak_lahir_masih_hidup_perempuan' => 'Anak Lahir Masih Hidup Perempuan',
			'anak_meninggal_laki' => 'Anak Meninggal Laki',
			'anak_meninggal_perempuan' => 'Anak Meninggal Perempuan',
			'alat_kb' => 'Alat Kb',
			'alat_kb_dipakai' => 'Alat Kb Dipakai',
			'memakai_alat_kb' => 'Memakai Alat KB'
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

		$criteria->join = "left join tbl_art a on t.id_art=a.id_art";

		$criteria->condition = "a.id_rt = '".$id."'";

		$criteria->compare('id_art_perorangan',$this->id_art_perorangan);
		$criteria->compare('a.id_art',$this->id_art);
		$criteria->compare('no_urut_ibu_kandung',$this->no_urut_ibu_kandung,true);
		$criteria->compare('kehadiran_wawancara',$this->kehadiran_wawancara,true);
		$criteria->compare('keluhan_panas',$this->keluhan_panas,true);
		$criteria->compare('keluhan_batuk',$this->keluhan_batuk,true);
		$criteria->compare('keluhan_pilek',$this->keluhan_pilek,true);
		$criteria->compare('keluhan_asma',$this->keluhan_asma,true);
		$criteria->compare('keluhan_diare',$this->keluhan_diare,true);
		$criteria->compare('keluhan_sakit_kepala',$this->keluhan_sakit_kepala,true);
		$criteria->compare('keluhan_sakit_gigi',$this->keluhan_sakit_gigi,true);
		$criteria->compare('keluhan_lainnya',$this->keluhan_lainnya,true);
		$criteria->compare('implikasi_keluhan',$this->implikasi_keluhan,true);
		$criteria->compare('lama_implikasi',$this->lama_implikasi,true);
		$criteria->compare('masih_implikasi',$this->masih_implikasi,true);
		$criteria->compare('pengobatan_sendiri',$this->pengobatan_sendiri,true);
		$criteria->compare('jenis_pengobatan_sendiri',$this->jenis_pengobatan_sendiri,true);
		$criteria->compare('pengobatan_jalan',$this->pengobatan_jalan,true);
		$criteria->compare('berobat_jalan_rs_pemerintah',$this->berobat_jalan_rs_pemerintah,true);
		$criteria->compare('berobat_jalan_rs_swasta',$this->berobat_jalan_rs_swasta,true);
		$criteria->compare('berobat_jalan_poliklinik',$this->berobat_jalan_poliklinik,true);
		$criteria->compare('berobat_jalan_puskesmas',$this->berobat_jalan_puskesmas,true);
		$criteria->compare('berobat_jalan_nakes',$this->berobat_jalan_nakes,true);
		$criteria->compare('berobat_jalan_batra',$this->berobat_jalan_batra,true);
		$criteria->compare('berobat_jalan_dukun',$this->berobat_jalan_dukun,true);
		$criteria->compare('berobat_jalan_lainnya',$this->berobat_jalan_lainnya,true);
		$criteria->compare('rawat_inap',$this->rawat_inap,true);
		$criteria->compare('rawat_inap_rs_pemerintah',$this->rawat_inap_rs_pemerintah,true);
		$criteria->compare('rawat_inap_rs_swasta',$this->rawat_inap_rs_swasta,true);
		$criteria->compare('rawat_inap_puskesmas',$this->rawat_inap_puskesmas,true);
		$criteria->compare('rawat_inap_nakes',$this->rawat_inap_nakes,true);
		$criteria->compare('rawat_inap_batra',$this->rawat_inap_batra,true);
		$criteria->compare('rawat_inap_lainnya',$this->rawat_inap_lainnya,true);
		$criteria->compare('jamkesmas',$this->jamkesmas,true);
		$criteria->compare('jamkesda',$this->jamkesda,true);
		$criteria->compare('jampersal',$this->jampersal,true);
		$criteria->compare('bpjs',$this->bpjs,true);
		$criteria->compare('umur_balita',$this->umur_balita,true);
		$criteria->compare('penolong_kelahiran_1',$this->penolong_kelahiran_1,true);
		$criteria->compare('penolong_kelahiran_2',$this->penolong_kelahiran_2,true);
		$criteria->compare('imunisasi_bcg',$this->imunisasi_bcg,true);
		$criteria->compare('imunisasi_dpt',$this->imunisasi_dpt,true);
		$criteria->compare('imunisasi_polio',$this->imunisasi_polio,true);
		$criteria->compare('imunisasi_campak',$this->imunisasi_campak,true);
		$criteria->compare('imunisasi_hepatitis_b',$this->imunisasi_hepatitis_b,true);
		$criteria->compare('asi',$this->asi,true);
		$criteria->compare('lama_pemberian_asi',$this->lama_pemberian_asi,true);
		$criteria->compare('diberi_asi_saja',$this->diberi_asi_saja,true);
		$criteria->compare('asi_24_jam',$this->asi_24_jam,true);
		$criteria->compare('pemeriksaan_kehamilan',$this->pemeriksaan_kehamilan,true);
		$criteria->compare('pemeriksaan_kehamilan_trisemester_1',$this->pemeriksaan_kehamilan_trisemester_1,true);
		$criteria->compare('pemeriksaan_kehamilan_trisemester_2',$this->pemeriksaan_kehamilan_trisemester_2,true);
		$criteria->compare('pemeriksaan_kehamilan_trisemester_3',$this->pemeriksaan_kehamilan_trisemester_3,true);
		$criteria->compare('partisipasi_sekolah',$this->partisipasi_sekolah,true);
		$criteria->compare('berhenti_sekolah',$this->berhenti_sekolah,true);
		$criteria->compare('pendidikan_tertinggi',$this->pendidikan_tertinggi,true);
		$criteria->compare('penyelenggara_pendidikan',$this->penyelenggara_pendidikan,true);
		$criteria->compare('tingkat_tertinggi',$this->tingkat_tertinggi,true);
		$criteria->compare('ijazah_tertinggi',$this->ijazah_tertinggi,true);
		$criteria->compare('membaca_menulis',$this->membaca_menulis,true);
		$criteria->compare('bekerja',$this->bekerja,true);
		$criteria->compare('sekolah',$this->sekolah,true);
		$criteria->compare('mengurus_rt',$this->mengurus_rt,true);
		$criteria->compare('lainnya',$this->lainnya,true);
		$criteria->compare('kegiatan_terbanyak',$this->kegiatan_terbanyak,true);
		$criteria->compare('tidak_bekerja_sementara',$this->tidak_bekerja_sementara,true);
		$criteria->compare('mencari_pekerjaan',$this->mencari_pekerjaan,true);
		$criteria->compare('membuat_usaha',$this->membuat_usaha,true);
		$criteria->compare('alasan_tidak_bekerja',$this->alasan_tidak_bekerja,true);
		$criteria->compare('jika_ada_tawaran',$this->jika_ada_tawaran,true);
		$criteria->compare('hari_kerja',$this->hari_kerja,true);
		$criteria->compare('jumlah_jam_kerja_seminggu',$this->jumlah_jam_kerja_seminggu,true);
		$criteria->compare('lapangan_usaha',$this->lapangan_usaha,true);
		$criteria->compare('jenis_pekerjaan',$this->jenis_pekerjaan,true);
		$criteria->compare('jabatan_pekerjaan',$this->jabatan_pekerjaan,true);
		$criteria->compare('gaji',$this->gaji,true);
		$criteria->compare('umur_saat_nikah',$this->umur_saat_nikah,true);
		$criteria->compare('jumlah_tahun_nikah',$this->jumlah_tahun_nikah,true);
		$criteria->compare('anak_lahir_hidup_laki',$this->anak_lahir_hidup_laki,true);
		$criteria->compare('anak_lahir_hidup_perempuan',$this->anak_lahir_hidup_perempuan,true);
		$criteria->compare('anak_lahir_masih_hidup_laki',$this->anak_lahir_masih_hidup_laki,true);
		$criteria->compare('anak_lahir_masih_hidup_perempuan',$this->anak_lahir_masih_hidup_perempuan,true);
		$criteria->compare('anak_meninggal_laki',$this->anak_meninggal_laki,true);
		$criteria->compare('anak_meninggal_perempuan',$this->anak_meninggal_perempuan,true);
		$criteria->compare('alat_kb',$this->alat_kb,true);
		$criteria->compare('alat_kb_dipakai',$this->alat_kb_dipakai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArtPerorangan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
