<?php

/**
 * This is the model class for table "career_list".
 *
 * The followings are the available columns in table 'career_list':
 * @property string $id
 * @property string $position_en
 * @property string $position
 * @property string $location
 * @property string $job_description_en
 * @property string $job_description_id
 * @property string $qualifications_en
 * @property string $qualifications_id
 * @property integer $status
 * @property integer $sorts
 */
class CareerList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CareerList the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'career_list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, sorts', 'numerical', 'integerOnly' => true),
			array('position_en, position, location', 'length', 'max' => 225),
			array('job_description_en, job_description_id, qualifications_en, qualifications_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, position_en, position, location, job_description_en, job_description_id, qualifications_en, qualifications_id, status, sorts', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'position_en' => 'Position En',
			'position' => 'Position',
			'location' => 'Location',
			'job_description_en' => 'Job Description En',
			'job_description_id' => 'Job Description',
			'qualifications_en' => 'Qualifications En',
			'qualifications_id' => 'Qualifications',
			'status' => 'Status',
			'sorts' => 'Sorts',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('position', $this->position, true);
		$criteria->compare('location', $this->location, true);
		$criteria->compare('job_description_en', $this->job_description_en, true);
		$criteria->compare('job_description_id', $this->job_description_id, true);
		$criteria->compare('qualifications_en', $this->qualifications_en, true);
		$criteria->compare('qualifications_id', $this->qualifications_id, true);
		$criteria->compare('status', $this->status);
		$criteria->compare('sorts', $this->sorts);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}
