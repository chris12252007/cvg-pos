<?php

/**
 * This is the model class for table "pos_payment_details".
 *
 * The followings are the available columns in table 'pos_payment_details':
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $header_id
 * @property integer $transaction_id
 * @property integer $inventory_id
 * @property string $price
 * @property string $amount_paid
 * @property integer $is_sync
 * @property integer $is_deleted
 */
class PosPaymentDetails extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'pos_payment_details';
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
            $this->updated_at = Settings::get_DateTime();

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
            array('created_at', 'required'),
            array('header_id, transaction_id, inventory_id, is_sync, is_deleted', 'numerical', 'integerOnly' => true),
            array('price, amount_paid', 'length', 'max' => 12),
            array('updated_at', 'safe'),
// The following rule is used by search().
// Please remove those attributes that should not be searched.
            array('id, created_at, updated_at, header_id, transaction_id, inventory_id, price, amount_paid, is_sync, is_deleted', 'safe', 'on' => 'search'),
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
            'header_id' => 'Header',
            'transaction_id' => 'Transaction',
            'inventory_id' => 'Inventory',
            'price' => 'Price',
            'amount_paid' => 'Amount Paid',
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);

        $criteria->compare('created_at', $this->created_at, true);

        $criteria->compare('updated_at', $this->updated_at, true);

        $criteria->compare('header_id', $this->header_id);

        $criteria->compare('transaction_id', $this->transaction_id);

        $criteria->compare('inventory_id', $this->inventory_id);

        $criteria->compare('price', $this->price, true);

        $criteria->compare('amount_paid', $this->amount_paid, true);

        $criteria->compare('is_sync', $this->is_sync);

        $criteria->compare('is_deleted', $this->is_deleted);

        $criteria->order = 'created_at DESC';

        return new CActiveDataProvider('PosPaymentDetails', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return PosPaymentDetails the static model class
     */
    public static function model($className = __CLASS__)
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
