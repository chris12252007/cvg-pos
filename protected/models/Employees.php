<?php

/**
* This is the model class for table "employees".
*
* The followings are the available columns in table 'employees':
    * @property integer $id
    * @property string $created_at
    * @property string $updated_at
    * @property string $employee_no
    * @property string $firstname
    * @property string $middlename
    * @property string $lastname
    * @property string $mobile
    * @property string $phone
    * @property string $email
    * @property string $birthdate
    * @property integer $civil_status_id
    * @property string $address1
    * @property string $address2
    * @property integer $region_id
    * @property integer $province_id
    * @property integer $municipality_id
    * @property integer $barangay_id
    * @property integer $office_id
    * @property integer $citizenship_id
    * @property integer $branch_id
    * @property integer $contact_person_id
    * @property integer $occupation_id
    * @property integer $department_id
    * @property integer $manager_id
    * @property integer $location_id
    * @property integer $is_agent
    * @property integer $is_active
    * @property integer $is_deleted
*/
class Employees extends CActiveRecord
{
/**
* @return string the associated database table name
*/
public function tableName()
{
return 'employees';
}

public static function tbl()
{
return self::tableName();
}	

public function beforeSave() 
{
if ($this->isNewRecord)
$this->created_at = Settings::get_DateTime();
else
$this->updated_at =  Settings::get_DateTime();

return parent::beforeSave();
}

/**
* @return array validation rules for model attributes.
*/
public function rules()
{
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
return array(
    array('created_at, employee_no, firstname, middlename, lastname, mobile, birthdate, branch_id, contact_person_id, occupation_id, department_id, manager_id, is_agent', 'required'),
    array('civil_status_id, region_id, province_id, municipality_id, barangay_id, office_id, citizenship_id, branch_id, contact_person_id, occupation_id, department_id, manager_id, location_id, is_agent, is_active, is_deleted', 'numerical', 'integerOnly'=>true),
    array('employee_no, phone', 'length', 'max'=>20),
    array('firstname, middlename, lastname, email, address1, address2', 'length', 'max'=>255),
    array('mobile', 'length', 'max'=>11),
    array('updated_at', 'safe'),
// The following rule is used by search().
// Please remove those attributes that should not be searched.
array('id, created_at, updated_at, employee_no, firstname, middlename, lastname, mobile, phone, email, birthdate, civil_status_id, address1, address2, region_id, province_id, municipality_id, barangay_id, office_id, citizenship_id, branch_id, contact_person_id, occupation_id, department_id, manager_id, location_id, is_agent, is_active, is_deleted', 'safe', 'on'=>'search'),
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
    'id' => 'Id',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
    'employee_no' => 'Employee No',
    'firstname' => 'Firstname',
    'middlename' => 'Middlename',
    'lastname' => 'Lastname',
    'mobile' => 'Mobile',
    'phone' => 'Phone',
    'email' => 'Email',
    'birthdate' => 'Birthdate',
    'civil_status_id' => 'Civil Status',
    'address1' => 'Address1',
    'address2' => 'Address2',
    'region_id' => 'Region',
    'province_id' => 'Province',
    'municipality_id' => 'Municipality',
    'barangay_id' => 'Barangay',
    'office_id' => 'Office',
    'citizenship_id' => 'Citizenship',
    'branch_id' => 'Branch',
    'contact_person_id' => 'Contact Person',
    'occupation_id' => 'Occupation',
    'department_id' => 'Department',
    'manager_id' => 'Manager',
    'location_id' => 'Location',
    'is_agent' => 'Is Agent',
    'is_active' => 'Is Active',
    'is_deleted' => 'Is Deleted',
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
* @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
*/
public function search()
{
// Warning: Please modify the following code to remove attributes that
// should not be searched.

$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('created_at',$this->created_at,true);

		$criteria->compare('updated_at',$this->updated_at,true);

		$criteria->compare('employee_no',$this->employee_no,true);

		$criteria->compare('firstname',$this->firstname,true);

		$criteria->compare('middlename',$this->middlename,true);

		$criteria->compare('lastname',$this->lastname,true);

		$criteria->compare('mobile',$this->mobile,true);

		$criteria->compare('phone',$this->phone,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('birthdate',$this->birthdate,true);

		$criteria->compare('civil_status_id',$this->civil_status_id);

		$criteria->compare('address1',$this->address1,true);

		$criteria->compare('address2',$this->address2,true);

		$criteria->compare('region_id',$this->region_id);

		$criteria->compare('province_id',$this->province_id);

		$criteria->compare('municipality_id',$this->municipality_id);

		$criteria->compare('barangay_id',$this->barangay_id);

		$criteria->compare('office_id',$this->office_id);

		$criteria->compare('citizenship_id',$this->citizenship_id);

		$criteria->compare('branch_id',$this->branch_id);

		$criteria->compare('contact_person_id',$this->contact_person_id);

		$criteria->compare('occupation_id',$this->occupation_id);

		$criteria->compare('department_id',$this->department_id);

		$criteria->compare('manager_id',$this->manager_id);

		$criteria->compare('location_id',$this->location_id);

		$criteria->compare('is_agent',$this->is_agent);

		$criteria->compare('is_active',$this->is_active);

		$criteria->compare('is_deleted',$this->is_deleted);

$criteria->order = 'created_at DESC';

return new CActiveDataProvider('Employees', array(
'criteria'=>$criteria,
));
}

/**
* Returns the static model of the specified AR class.
* @return Employees the static model class
*/
public static function model($className=__CLASS__)
{
return parent::model($className);
}

public static function model_getAllData_byDeleted($isDeleted)
{
return self::model()->findAll('is_deleted = :isDeleted', array(':isDeleted' => $isDeleted));
}

function getIsDeleted()
{
return Utilities::get_ActiveSelect($this->is_deleted);
}
}