<?php

/**
 * This is the model class for table "tbl_pengeluaran_non_makanan".
 *
 * The followings are the available columns in table 'tbl_pengeluaran_non_makanan':
 * @property integer $id_pengeluaran_non_makanan
 * @property integer $id_rt
 * @property integer $sewa_rumah
 * @property integer $pemeliharaan_rumah
 * @property integer $rekening_rt
 * @property integer $rekening_elektrik
 * @property integer $sabun_kosmetik
 * @property integer $biaya_kesehatan
 * @property integer $biaya_pendidikan
 * @property integer $jasa_lainnya
 * @property integer $pakaian
 * @property integer $barang_tahan_lama
 * @property integer $pbb
 * @property integer $retribusi
 * @property integer $askes
 * @property integer $pajak_lainnya
 * @property integer $keperluan_pesta
 * @property integer $sumber_penghasilan_utama_rt
 * @property integer $kode_status_pekerjaan
 * @property integer $sewa_rumah_setahun
 * @property integer $pemeliharaan_rumah_setahun
 * @property integer $rekening_rt_setahun
 * @property integer $rekening_elektrik_setahun
 * @property integer $sabun_kosmetik_setahun
 * @property integer $biaya_kesehatan_setahun
 * @property integer $biaya_pendidikan_setahun
 * @property integer $jasa_lainnya_setahun
 * @property integer $pakaian_setahun
 * @property integer $barang_tahan_lama_setahun
 * @property integer $pbb_setahun
 * @property integer $retribusi_setahun
 * @property integer $askes_setahun
 * @property integer $pajak_lainnya_setahun
 * @property integer $keperluan_pesta_setahun
 */
class PengeluaranNonMakanan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pengeluaran_non_makanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rt, sewa_rumah, pemeliharaan_rumah, rekening_rt, rekening_elektrik, sabun_kosmetik, biaya_kesehatan, biaya_pendidikan, jasa_lainnya, pakaian, barang_tahan_lama, pbb, retribusi, askes, pajak_lainnya, keperluan_pesta, sumber_penghasilan_utama_rt, kode_status_pekerjaan, sewa_rumah_setahun, pemeliharaan_rumah_setahun, rekening_rt_setahun, rekening_elektrik_setahun, sabun_kosmetik_setahun, biaya_kesehatan_setahun, biaya_pendidikan_setahun, jasa_lainnya_setahun, pakaian_setahun, barang_tahan_lama_setahun, pbb_setahun, retribusi_setahun, askes_setahun, pajak_lainnya_setahun, keperluan_pesta_setahun', 'required'),
			array('id_rt, sewa_rumah, pemeliharaan_rumah, rekening_rt, rekening_elektrik, sabun_kosmetik, biaya_kesehatan, biaya_pendidikan, jasa_lainnya, pakaian, barang_tahan_lama, pbb, retribusi, askes, pajak_lainnya, keperluan_pesta, sumber_penghasilan_utama_rt, kode_status_pekerjaan, sewa_rumah_setahun, pemeliharaan_rumah_setahun, rekening_rt_setahun, rekening_elektrik_setahun, sabun_kosmetik_setahun, biaya_kesehatan_setahun, biaya_pendidikan_setahun, jasa_lainnya_setahun, pakaian_setahun, barang_tahan_lama_setahun, pbb_setahun, retribusi_setahun, askes_setahun, pajak_lainnya_setahun, keperluan_pesta_setahun', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pengeluaran_non_makanan, id_rt, sewa_rumah, pemeliharaan_rumah, rekening_rt, rekening_elektrik, sabun_kosmetik, biaya_kesehatan, biaya_pendidikan, jasa_lainnya, pakaian, barang_tahan_lama, pbb, retribusi, askes, pajak_lainnya, keperluan_pesta, sumber_penghasilan_utama_rt, kode_status_pekerjaan, sewa_rumah_setahun, pemeliharaan_rumah_setahun, rekening_rt_setahun, rekening_elektrik_setahun, sabun_kosmetik_setahun, biaya_kesehatan_setahun, biaya_pendidikan_setahun, jasa_lainnya_setahun, pakaian_setahun, barang_tahan_lama_setahun, pbb_setahun, retribusi_setahun, askes_setahun, pajak_lainnya_setahun, keperluan_pesta_setahun', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pengeluaran_non_makanan' => 'Id Pengeluaran Non Makanan',
			'id_rt' => 'Id Rt',
			'sewa_rumah' => 'Sewa Rumah',
			'pemeliharaan_rumah' => 'Pemeliharaan Rumah',
			'rekening_rt' => 'Rekening Rt',
			'rekening_elektrik' => 'Rekening Elektrik',
			'sabun_kosmetik' => 'Sabun Kosmetik',
			'biaya_kesehatan' => 'Biaya Kesehatan',
			'biaya_pendidikan' => 'Biaya Pendidikan',
			'jasa_lainnya' => 'Jasa Lainnya',
			'pakaian' => 'Pakaian',
			'barang_tahan_lama' => 'Barang Tahan Lama',
			'pbb' => 'Pbb',
			'retribusi' => 'Retribusi',
			'askes' => 'Askes',
			'pajak_lainnya' => 'Pajak Lainnya',
			'keperluan_pesta' => 'Keperluan Pesta',
			'sumber_penghasilan_utama_rt' => 'Sumber Penghasilan Utama Rt',
			'kode_status_pekerjaan' => 'Kode Status Pekerjaan',
			'sewa_rumah_setahun' => 'Sewa Rumah Setahun',
			'pemeliharaan_rumah_setahun' => 'Pemeliharaan Rumah Setahun',
			'rekening_rt_setahun' => 'Rekening Rt Setahun',
			'rekening_elektrik_setahun' => 'Rekening Elektrik Setahun',
			'sabun_kosmetik_setahun' => 'Sabun Kosmetik Setahun',
			'biaya_kesehatan_setahun' => 'Biaya Kesehatan Setahun',
			'biaya_pendidikan_setahun' => 'Biaya Pendidikan Setahun',
			'jasa_lainnya_setahun' => 'Jasa Lainnya Setahun',
			'pakaian_setahun' => 'Pakaian Setahun',
			'barang_tahan_lama_setahun' => 'Barang Tahan Lama Setahun',
			'pbb_setahun' => 'Pbb Setahun',
			'retribusi_setahun' => 'Retribusi Setahun',
			'askes_setahun' => 'Askes Setahun',
			'pajak_lainnya_setahun' => 'Pajak Lainnya Setahun',
			'keperluan_pesta_setahun' => 'Keperluan Pesta Setahun',
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

		$criteria->compare('id_pengeluaran_non_makanan',$this->id_pengeluaran_non_makanan);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('sewa_rumah',$this->sewa_rumah);
		$criteria->compare('pemeliharaan_rumah',$this->pemeliharaan_rumah);
		$criteria->compare('rekening_rt',$this->rekening_rt);
		$criteria->compare('rekening_elektrik',$this->rekening_elektrik);
		$criteria->compare('sabun_kosmetik',$this->sabun_kosmetik);
		$criteria->compare('biaya_kesehatan',$this->biaya_kesehatan);
		$criteria->compare('biaya_pendidikan',$this->biaya_pendidikan);
		$criteria->compare('jasa_lainnya',$this->jasa_lainnya);
		$criteria->compare('pakaian',$this->pakaian);
		$criteria->compare('barang_tahan_lama',$this->barang_tahan_lama);
		$criteria->compare('pbb',$this->pbb);
		$criteria->compare('retribusi',$this->retribusi);
		$criteria->compare('askes',$this->askes);
		$criteria->compare('pajak_lainnya',$this->pajak_lainnya);
		$criteria->compare('keperluan_pesta',$this->keperluan_pesta);
		$criteria->compare('sumber_penghasilan_utama_rt',$this->sumber_penghasilan_utama_rt);
		$criteria->compare('kode_status_pekerjaan',$this->kode_status_pekerjaan);
		$criteria->compare('sewa_rumah_setahun',$this->sewa_rumah_setahun);
		$criteria->compare('pemeliharaan_rumah_setahun',$this->pemeliharaan_rumah_setahun);
		$criteria->compare('rekening_rt_setahun',$this->rekening_rt_setahun);
		$criteria->compare('rekening_elektrik_setahun',$this->rekening_elektrik_setahun);
		$criteria->compare('sabun_kosmetik_setahun',$this->sabun_kosmetik_setahun);
		$criteria->compare('biaya_kesehatan_setahun',$this->biaya_kesehatan_setahun);
		$criteria->compare('biaya_pendidikan_setahun',$this->biaya_pendidikan_setahun);
		$criteria->compare('jasa_lainnya_setahun',$this->jasa_lainnya_setahun);
		$criteria->compare('pakaian_setahun',$this->pakaian_setahun);
		$criteria->compare('barang_tahan_lama_setahun',$this->barang_tahan_lama_setahun);
		$criteria->compare('pbb_setahun',$this->pbb_setahun);
		$criteria->compare('retribusi_setahun',$this->retribusi_setahun);
		$criteria->compare('askes_setahun',$this->askes_setahun);
		$criteria->compare('pajak_lainnya_setahun',$this->pajak_lainnya_setahun);
		$criteria->compare('keperluan_pesta_setahun',$this->keperluan_pesta_setahun);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PengeluaranNonMakanan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
