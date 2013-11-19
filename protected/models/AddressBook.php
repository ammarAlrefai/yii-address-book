<?php

/**
 * This is the model class for table "address_book".
 *
 * The followings are the available columns in table 'address_book':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $typ
 * @property string $home_address
 * @property string $photo_name
 * @property string $fax
 * @property string $website
 */
class AddressBook extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'address_book';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email', 'required'),
			array('name, home_address', 'length', 'max'=>255),
			array('email, photo_name, website', 'length', 'max'=>120),
			array('phone, fax', 'length', 'max'=>32),
			array('typ', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, phone, typ, home_address, photo_name, fax, website', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'phone' => 'Phone',
			'typ' => 'Typ',
			'home_address' => 'Home Address',
			'photo_name' => 'Photo Name',
			'fax' => 'Fax',
			'website' => 'Website',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('typ',$this->typ,true);
		$criteria->compare('home_address',$this->home_address,true);
		$criteria->compare('photo_name',$this->photo_name,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('website',$this->website,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AddressBook the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
