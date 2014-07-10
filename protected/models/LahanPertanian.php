<?php

/**
 * This is the model class for table "tbl_lahan_pertanian".
 *
 * The followings are the available columns in table 'tbl_lahan_pertanian':
 * @property integer $id_lahan_pertanian
 * @property integer $id_rt
 * @property string $lahan_pertanian
 * @property string $milik_sendiri_pencacahan_luas_sawah
 * @property string $milik_sendiri_pencacahan_lahan_kering
 * @property string $milik_sendiri_setahun_lalu_luas_sawah
 * @property string $milik_sendiri_setahun_lalu_lahan_kering
 * @property string $pihak_lain_pencacahan_luas_sawah
 * @property string $pihak_lain_pencacahan_lahan_kering
 * @property string $pihak_lain_setahun_lalu_luas_sawah
 * @property string $pihak_lain_setahun_lalu_lahan_kering
 * @property string $sendiri_pihak_lain_pencacahan_luas_sawah
 * @property string $sendiri_pihak_lain_pencacahan_lahan_kering
 * @property string $sendiri_pihak_lain_setahun_lalu_luas_sawah
 * @property string $sendiri_pihak_lain_setahun_lalu_lahan_kering
 * @property string $dikuasai_pencacahan_luas_swah
 * @property string $dikuasai_pencacahan_lahan_kering
 * @property string $dikuasai_setahun_lalu_luas_swah
 * @property string $dikuasai_setahun_lalu_lahan_kering
 * @property string $pertanian_pencacahan_luas_sawah
 * @property string $pertanian_pencacahan_lahan_kering
 * @property string $pertanian_setahun_lalu_luas_sawah
 * @property string $pertanian_setahun_lalu_lahan_kering
 */
class LahanPertanian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_lahan_pertanian';
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
			array('lahan_pertanian, milik_sendiri_pencacahan_luas_sawah, milik_sendiri_pencacahan_lahan_kering, milik_sendiri_setahun_lalu_luas_sawah, milik_sendiri_setahun_lalu_lahan_kering, pihak_lain_pencacahan_luas_sawah, pihak_lain_pencacahan_lahan_kering, pihak_lain_setahun_lalu_luas_sawah, pihak_lain_setahun_lalu_lahan_kering, sendiri_pihak_lain_pencacahan_luas_sawah, sendiri_pihak_lain_pencacahan_lahan_kering, sendiri_pihak_lain_setahun_lalu_luas_sawah, sendiri_pihak_lain_setahun_lalu_lahan_kering, dikuasai_pencacahan_luas_swah, dikuasai_pencacahan_lahan_kering, dikuasai_setahun_lalu_luas_swah, dikuasai_setahun_lalu_lahan_kering, pertanian_pencacahan_luas_sawah, pertanian_pencacahan_lahan_kering, pertanian_setahun_lalu_luas_sawah, pertanian_setahun_lalu_lahan_kering', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_lahan_pertanian, id_rt, lahan_pertanian, milik_sendiri_pencacahan_luas_sawah, milik_sendiri_pencacahan_lahan_kering, milik_sendiri_setahun_lalu_luas_sawah, milik_sendiri_setahun_lalu_lahan_kering, pihak_lain_pencacahan_luas_sawah, pihak_lain_pencacahan_lahan_kering, pihak_lain_setahun_lalu_luas_sawah, pihak_lain_setahun_lalu_lahan_kering, sendiri_pihak_lain_pencacahan_luas_sawah, sendiri_pihak_lain_pencacahan_lahan_kering, sendiri_pihak_lain_setahun_lalu_luas_sawah, sendiri_pihak_lain_setahun_lalu_lahan_kering, dikuasai_pencacahan_luas_swah, dikuasai_pencacahan_lahan_kering, dikuasai_setahun_lalu_luas_swah, dikuasai_setahun_lalu_lahan_kering, pertanian_pencacahan_luas_sawah, pertanian_pencacahan_lahan_kering, pertanian_setahun_lalu_luas_sawah, pertanian_setahun_lalu_lahan_kering', 'safe', 'on'=>'search'),
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
			'id_lahan_pertanian' => 'Id Lahan Pertanian',
			'id_rt' => 'Id Rt',
			'lahan_pertanian' => 'Lahan Pertanian',
			'milik_sendiri_pencacahan_luas_sawah' => 'Milik Sendiri Pencacahan Luas Sawah',
			'milik_sendiri_pencacahan_lahan_kering' => 'Milik Sendiri Pencacahan Lahan Kering',
			'milik_sendiri_setahun_lalu_luas_sawah' => 'Milik Sendiri Setahun Lalu Luas Sawah',
			'milik_sendiri_setahun_lalu_lahan_kering' => 'Milik Sendiri Setahun Lalu Lahan Kering',
			'pihak_lain_pencacahan_luas_sawah' => 'Pihak Lain Pencacahan Luas Sawah',
			'pihak_lain_pencacahan_lahan_kering' => 'Pihak Lain Pencacahan Lahan Kering',
			'pihak_lain_setahun_lalu_luas_sawah' => 'Pihak Lain Setahun Lalu Luas Sawah',
			'pihak_lain_setahun_lalu_lahan_kering' => 'Pihak Lain Setahun Lalu Lahan Kering',
			'sendiri_pihak_lain_pencacahan_luas_sawah' => 'Sendiri Pihak Lain Pencacahan Luas Sawah',
			'sendiri_pihak_lain_pencacahan_lahan_kering' => 'Sendiri Pihak Lain Pencacahan Lahan Kering',
			'sendiri_pihak_lain_setahun_lalu_luas_sawah' => 'Sendiri Pihak Lain Setahun Lalu Luas Sawah',
			'sendiri_pihak_lain_setahun_lalu_lahan_kering' => 'Sendiri Pihak Lain Setahun Lalu Lahan Kering',
			'dikuasai_pencacahan_luas_swah' => 'Dikuasai Pencacahan Luas Swah',
			'dikuasai_pencacahan_lahan_kering' => 'Dikuasai Pencacahan Lahan Kering',
			'dikuasai_setahun_lalu_luas_swah' => 'Dikuasai Setahun Lalu Luas Swah',
			'dikuasai_setahun_lalu_lahan_kering' => 'Dikuasai Setahun Lalu Lahan Kering',
			'pertanian_pencacahan_luas_sawah' => 'Pertanian Pencacahan Luas Sawah',
			'pertanian_pencacahan_lahan_kering' => 'Pertanian Pencacahan Lahan Kering',
			'pertanian_setahun_lalu_luas_sawah' => 'Pertanian Setahun Lalu Luas Sawah',
			'pertanian_setahun_lalu_lahan_kering' => 'Pertanian Setahun Lalu Lahan Kering',
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

		$criteria->compare('id_lahan_pertanian',$this->id_lahan_pertanian);
		$criteria->compare('id_rt',$this->id_rt);
		$criteria->compare('lahan_pertanian',$this->lahan_pertanian,true);
		$criteria->compare('milik_sendiri_pencacahan_luas_sawah',$this->milik_sendiri_pencacahan_luas_sawah,true);
		$criteria->compare('milik_sendiri_pencacahan_lahan_kering',$this->milik_sendiri_pencacahan_lahan_kering,true);
		$criteria->compare('milik_sendiri_setahun_lalu_luas_sawah',$this->milik_sendiri_setahun_lalu_luas_sawah,true);
		$criteria->compare('milik_sendiri_setahun_lalu_lahan_kering',$this->milik_sendiri_setahun_lalu_lahan_kering,true);
		$criteria->compare('pihak_lain_pencacahan_luas_sawah',$this->pihak_lain_pencacahan_luas_sawah,true);
		$criteria->compare('pihak_lain_pencacahan_lahan_kering',$this->pihak_lain_pencacahan_lahan_kering,true);
		$criteria->compare('pihak_lain_setahun_lalu_luas_sawah',$this->pihak_lain_setahun_lalu_luas_sawah,true);
		$criteria->compare('pihak_lain_setahun_lalu_lahan_kering',$this->pihak_lain_setahun_lalu_lahan_kering,true);
		$criteria->compare('sendiri_pihak_lain_pencacahan_luas_sawah',$this->sendiri_pihak_lain_pencacahan_luas_sawah,true);
		$criteria->compare('sendiri_pihak_lain_pencacahan_lahan_kering',$this->sendiri_pihak_lain_pencacahan_lahan_kering,true);
		$criteria->compare('sendiri_pihak_lain_setahun_lalu_luas_sawah',$this->sendiri_pihak_lain_setahun_lalu_luas_sawah,true);
		$criteria->compare('sendiri_pihak_lain_setahun_lalu_lahan_kering',$this->sendiri_pihak_lain_setahun_lalu_lahan_kering,true);
		$criteria->compare('dikuasai_pencacahan_luas_swah',$this->dikuasai_pencacahan_luas_swah,true);
		$criteria->compare('dikuasai_pencacahan_lahan_kering',$this->dikuasai_pencacahan_lahan_kering,true);
		$criteria->compare('dikuasai_setahun_lalu_luas_swah',$this->dikuasai_setahun_lalu_luas_swah,true);
		$criteria->compare('dikuasai_setahun_lalu_lahan_kering',$this->dikuasai_setahun_lalu_lahan_kering,true);
		$criteria->compare('pertanian_pencacahan_luas_sawah',$this->pertanian_pencacahan_luas_sawah,true);
		$criteria->compare('pertanian_pencacahan_lahan_kering',$this->pertanian_pencacahan_lahan_kering,true);
		$criteria->compare('pertanian_setahun_lalu_luas_sawah',$this->pertanian_setahun_lalu_luas_sawah,true);
		$criteria->compare('pertanian_setahun_lalu_lahan_kering',$this->pertanian_setahun_lalu_lahan_kering,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LahanPertanian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
