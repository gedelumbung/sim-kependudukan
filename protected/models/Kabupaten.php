<?php

/**
 * This is the model class for table "tbl_kabupaten".
 *
 * The followings are the available columns in table 'tbl_kabupaten':
 * @property integer $id_kabupaten
 * @property integer $id_provinsi
 * @property string $kabupaten
 */
class Kabupaten extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_kabupaten';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_provinsi, kabupaten', 'required'),
			array('id_provinsi', 'numerical', 'integerOnly'=>true),
			array('kabupaten', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kabupaten, id_provinsi, kabupaten', 'safe', 'on'=>'search'),
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
			'Provinsi'=>array(self::BELONGS_TO,'Provinsi','id_provinsi')
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kabupaten' => 'Id Kabupaten',
			'id_provinsi' => 'Id Provinsi',
			'kabupaten' => 'Kabupaten',
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

		$criteria->compare('id_kabupaten',$this->id_kabupaten);
		$criteria->compare('id_provinsi',$this->id_provinsi);
		$criteria->compare('kabupaten',$this->kabupaten,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kabupaten the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
