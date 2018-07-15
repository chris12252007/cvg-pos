<?php

/**
* This is the model class for table "expenses".
*
* The followings are the available columns in table 'expenses':
    * @property integer $id
    * @property string $created_at
    * @property string $updated_at
    * @property string $date
    * @property string $ref_no
    * @property integer $branch_id
    * @property integer $client_id
    * @property integer $expenses_type_id
    * @property string $title
    * @property string $amount
    * @property string $remarks
    * @property integer $is_sync
    * @property integer $is_deleted
*/
class Expenses extends CActiveRecord
{
/**
* @return string the associated database table name
*/
public function tableName()
{
return 'expenses';
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
    array('created_at, date, ref_no, title, remarks', 'required'),
    array('branch_id, client_id, expenses_type_id, is_sync, is_deleted', 'numerical', 'integerOnly'=>true),
    array('ref_no, title', 'length', 'max'=>20),
    array('amount', 'length', 'max'=>12),
    array('remarks', 'length', 'max'=>500),
    array('updated_at', 'safe'),
// The following rule is used by search().
// Please remove those attributes that should not be searched.
array('id, created_at, updated_at, date, ref_no, branch_id, client_id, expenses_type_id, title, amount, remarks, is_sync, is_deleted', 'safe', 'on'=>'search'),
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
    'date' => 'Date',
    'ref_no' => 'Ref No',
    'branch_id' => 'Branch',
    'client_id' => 'Client',
    'expenses_type_id' => 'Expenses Type',
    'title' => 'Title',
    'amount' => 'Amount',
    'remarks' => 'Remarks',
    'is_sync' => 'Is Sync',
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

		$criteria->compare('date',$this->date,true);

		$criteria->compare('ref_no',$this->ref_no,true);

		$criteria->compare('branch_id',$this->branch_id);

		$criteria->compare('client_id',$this->client_id);

		$criteria->compare('expenses_type_id',$this->expenses_type_id);

		$criteria->compare('title',$this->title,true);

		$criteria->compare('amount',$this->amount,true);

		$criteria->compare('remarks',$this->remarks,true);

		$criteria->compare('is_sync',$this->is_sync);

		$criteria->compare('is_deleted',$this->is_deleted);

$criteria->order = 'created_at DESC';

return new CActiveDataProvider('Expenses', array(
'criteria'=>$criteria,
));
}

/**
* Returns the static model of the specified AR class.
* @return Expenses the static model class
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