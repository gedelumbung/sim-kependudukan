<?php

/**
 * This is the model class for table "tbl_pengeluaran_makanan".
 *
 * The followings are the available columns in table 'tbl_pengeluaran_makanan':
 * @property integer $id_pengeluaran_rt
 * @property integer $id_rt
 * @property integer $beras
 * @property integer $padi_lainnya
 * @property integer $umbi_umbian
 * @property integer $ikan_segar
 * @property integer $ikan_diawetkan
 * @property integer $daging
 * @property integer $telur
 * @property integer $susu
 * @property integer $sayur
 * @property integer $kacang
 * @property integer $buah
 * @property integer $minyak_lemak
 * @property integer $bahan_minuman
 * @property integer $bumbu_bumbuan
 * @property integer $mie
 * @property integer $konsumsi_lainnya
 * @property integer $makanan_jadi
 * @property integer $minuman_non_alkohol
 * @property integer $minuman_alkohol
 * @property integer $rokok
 * @property integer $tembakau_lainnya
 */
class PengeluaranPangan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pengeluaran_makanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rt, beras, padi_lainnya, umbi_umbian, ikan_segar, ikan_diawetkan, daging, telur, susu, sayur, kacang, buah, minyak_lemak, bahan_minuman, bumbu_bumbuan, mie, konsumsi_lainnya, makanan_jadi, minuman_non_alkohol, minuman_alkohol, rokok, tembakau_lainnya', 'required'),
			array('id_rt, beras, padi_lainnya, umbi_umbian, ikan_segar, ikan_diawetkan, daging, telur, susu, sayur, kacang, buah, minyak_lemak, bahan_minuman, bumbu_bumbuan, mie, konsumsi_lainnya, makanan_jadi, minuman_non_alkohol, minuman_alkohol, rokok, tembakau_lainnya', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pengeluaran_rt, id_rt, beras, padi_lainnya, umbi_umbian, ikan_segar, ikan_diawetkan, daging, telur, susu, sayur, kacang, buah, minyak_lemak, bahan_minuman, bumbu_bumbuan, mie, konsumsi_lainnya, makanan_jadi, minuman_non_alkohol, minuman_alkohol, rokok, tembakau_lainnya', 'safe', 'on'=>'search'),
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
			'id_pengeluaran_rt' => 'Id Pengeluaran Rt',
			'id_rt' => 'Id Rt',
			'beras' => 'Beras',
			'padi_lainnya' => 'Padi Lainnya',
			'umbi_umbian' => 'Umbi Umbian',
			'ikan_segar' => 'Ikan Segar',
			'ikan_diawetkan' => 'Ikan Diawetkan',
			'daging' => 'Daging',
			'telur' => 'Telur',
			'susu' => 'Susu',
			'sayur' => 'Sayur',
			'kacang' => 'Kacang',
			'buah' => 'Buah',
			'minyak_lemak' => 'Minyak Lemak',
			'bahan_minuman' => 'Bahan Minuman',
			'bumbu_bumbuan' => 'Bumbu Bumbuan',
			'mie' => 'Mie',
			'konsumsi_lainnya' => 'Konsumsi Lainnya',
			'makanan_jadi' => 'Makanan Jadi',
			'minuman_non_alkohol' => 'Minuman Non Alkohol',
			'minuman_alkohol' => 'Minuman Alkohol',
			'rokok' => 'Rokok',
			'tembakau_lainnya' => 'Tembakau Lainnya',
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

		$criteria->compare('id_pengeluaran_rt',$this->id_pengeluaran_rt);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('beras',$this->beras);
		$criteria->compare('padi_lainnya',$this->padi_lainnya);
		$criteria->compare('umbi_umbian',$this->umbi_umbian);
		$criteria->compare('ikan_segar',$this->ikan_segar);
		$criteria->compare('ikan_diawetkan',$this->ikan_diawetkan);
		$criteria->compare('daging',$this->daging);
		$criteria->compare('telur',$this->telur);
		$criteria->compare('susu',$this->susu);
		$criteria->compare('sayur',$this->sayur);
		$criteria->compare('kacang',$this->kacang);
		$criteria->compare('buah',$this->buah);
		$criteria->compare('minyak_lemak',$this->minyak_lemak);
		$criteria->compare('bahan_minuman',$this->bahan_minuman);
		$criteria->compare('bumbu_bumbuan',$this->bumbu_bumbuan);
		$criteria->compare('mie',$this->mie);
		$criteria->compare('konsumsi_lainnya',$this->konsumsi_lainnya);
		$criteria->compare('makanan_jadi',$this->makanan_jadi);
		$criteria->compare('minuman_non_alkohol',$this->minuman_non_alkohol);
		$criteria->compare('minuman_alkohol',$this->minuman_alkohol);
		$criteria->compare('rokok',$this->rokok);
		$criteria->compare('tembakau_lainnya',$this->tembakau_lainnya);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PengeluaranPangan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
