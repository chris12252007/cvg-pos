<?php

/**
 * This is the model class for table "pos_transactions".
 *
 * The followings are the available columns in table 'pos_transactions':
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $trans_date
 * @property string $ref_no
 * @property integer $cust_id
 * @property integer $branch_id
 * @property integer $service_id
 * @property integer $inv_id
 * @property integer $transaction_id
 * @property string $transaction_name
 * @property integer $qty
 * @property string $price
 * @property string $amount_net
 * @property string $balance
 * @property integer $user_id
 * @property integer $is_fully_paid
 * @property integer $is_inventory
 * @property string $remarks
 * @property integer $is_deleted
 * @property integer $deleted_by
 */
class PosTransactions extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'pos_transactions';
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
            array('created_at, trans_date, ref_no, cust_id, branch_id, service_id, inv_id, transaction_id, transaction_name, qty, price, amount_net, user_id, remarks', 'required'),
            array('cust_id, branch_id, service_id, inv_id, transaction_id, qty, user_id, is_fully_paid, is_inventory, is_deleted, deleted_by', 'numerical', 'integerOnly' => true),
            array('ref_no, remarks', 'length', 'max' => 100),
            array('transaction_name', 'length', 'max' => 255),
            array('price, amount_net, balance', 'length', 'max' => 12),
            array('updated_at', 'safe'),
// The following rule is used by search().
// Please remove those attributes that should not be searched.
            array('id, created_at, updated_at, trans_date, ref_no, cust_id, branch_id, service_id, inv_id, transaction_id, transaction_name, qty, price, amount_net, balance, user_id, is_fully_paid, is_inventory, remarks, is_deleted, deleted_by', 'safe', 'on' => 'search'),
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
            'trans_date' => 'Trans Date',
            'ref_no' => 'Ref No',
            'cust_id' => 'Cust',
            'branch_id' => 'Branch',
            'service_id' => 'Service',
            'inv_id' => 'Inv',
            'transaction_id' => 'Transaction',
            'transaction_name' => 'Transaction Name',
            'qty' => 'Qty',
            'price' => 'Price',
            'amount_net' => 'Amount Net',
            'balance' => 'Balance',
            'user_id' => 'User',
            'is_fully_paid' => 'Is Fully Paid',
            'is_inventory' => 'Is Inventory',
            'remarks' => 'Remarks',
            'is_deleted' => 'Is Deleted',
            'deleted_by' => 'Deleted By',
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

        $criteria->compare('trans_date', $this->trans_date, true);

        $criteria->compare('ref_no', $this->ref_no, true);

        $criteria->compare('cust_id', $this->cust_id);

        $criteria->compare('branch_id', $this->branch_id);

        $criteria->compare('service_id', $this->service_id);

        $criteria->compare('inv_id', $this->inv_id);

        $criteria->compare('transaction_id', $this->transaction_id);

        $criteria->compare('transaction_name', $this->transaction_name, true);

        $criteria->compare('qty', $this->qty);

        $criteria->compare('price', $this->price, true);

        $criteria->compare('amount_net', $this->amount_net, true);

        $criteria->compare('balance', $this->balance, true);

        $criteria->compare('user_id', $this->user_id);

        $criteria->compare('is_fully_paid', $this->is_fully_paid);

        $criteria->compare('is_inventory', $this->is_inventory);

        $criteria->compare('remarks', $this->remarks, true);

        $criteria->compare('is_deleted', $this->is_deleted);

        $criteria->compare('deleted_by', $this->deleted_by);

        $criteria->order = 'created_at DESC';

        return new CActiveDataProvider('PosTransactions', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return PosTransactions the static model class
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
