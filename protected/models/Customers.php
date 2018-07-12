<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $user_id
 * @property string $date
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $email
 * @property string $mobile
 * @property string $phone
 * @property string $address1
 * @property string $address2
 * @property string $tin_no
 * @property integer $region_id
 * @property integer $province_id
 * @property integer $municipality_id
 * @property integer $barangay_id
 * @property string $company_name
 * @property string $company_address
 * @property integer $ref_cust_id
 * @property integer $ref_relationship_id
 * @property integer $cust_type
 * @property integer $payment_term_id
 * @property integer $billing_type_id
 * @property integer $billing_timing_id
 * @property string $cust_balance
 * @property string $credit_limit
 * @property string $customer_no
 * @property integer $approvedby_emp_id
 * @property integer $sales_agent_id
 * @property integer $cash_credit
 * @property integer $is_approved
 * @property integer $is_with_or
 * @property integer $is_active
 * @property integer $is_deleted
 */
class Customers extends CActiveRecord {

    protected $oldAttributes;

    const CUST_TYPE_PERSONAL = 1;
    const CUST_TYPE_CORPORATE = 2;
    const CASH = 1;
    const CREDIT = 2;

    public $ccode_phone;
    public $ccode_mobile;
    public $area_code;
    public $address;
    public $sales_executive;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'customers';
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

        $changedArray = array_diff_assoc($this->attributes, $this->oldAttributes);

        foreach ($changedArray as $key => $value) {
            if (strcmp($key, 'updated_at'))
                AuditTrails::newRecord(AuditTrails::TRANS_TYPE_UPDATE, self::tbl(), $key, $this->attributes['id'], $this->oldAttributes[$key], $value, Settings::get_UserID(), Settings::get_EmployeeID());
        }

        return parent::beforeSave();
    }

    public function afterFind()
    {
        $this->oldAttributes = $this->attributes;
        return parent::afterFind();
    }

    public static function clearSessions()
    {
        unset($_SESSION[self::tbl()]);
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('created_at, updated_at, user_id, customer_no, cust_type, email, address1, address2, tin_no', 'required'),
            array('firstname, lastname', 'required', 'on' => 'personal'),
            array('company_name', 'required', 'on' => 'corporate'),
            //array('payment_term_id, billing_type_id, billing_timing_id, credit_limit, cash_credit', 'required', 'on' => 'accountantAdministrator'),
            array('user_id, region_id, province_id, municipality_id, barangay_id, ref_cust_id, ref_relationship_id, cust_type, payment_term_id, billing_type_id, billing_timing_id, approvedby_emp_id, sales_agent_id, cash_credit, is_approved, is_with_or, is_active, is_deleted', 'numerical', 'integerOnly' => true),
            array('firstname, middlename, lastname, email, address1, address2, company_name, company_address', 'length', 'max' => 255),
            array('mobile', 'length', 'max' => 100),
            array('phone', 'length', 'max' => 20),
            array('customer_no', 'unique'),
            array('cust_balance', 'length', 'max' => 15),
            array('customer_no, tin_no', 'length', 'max' => 50),
            array('email', 'email'),
            array('id, created_at, updated_at, user_id, date, firstname, middlename, lastname, email, mobile, phone, address1, address2, tin_no, region_id, province_id, municipality_id, barangay_id, company_name, company_address, ref_cust_id, ref_relationship_id, cust_type, payment_term_id, billing_type_id, billing_timing_id, cust_balance, customer_no, approvedby_emp_id, sales_agent_id, cash_credit, is_approved, is_with_or, is_active, is_deleted, address, credit_limit, sales_executive', 'safe', 'on' => 'search'),
            array('id, created_at, updated_at, user_id, date, firstname, middlename, lastname, email, mobile, phone, address1, address2, tin_no, region_id, province_id, municipality_id, barangay_id, company_name, company_address, ref_cust_id, ref_relationship_id, cust_type, payment_term_id, billing_type_id, billing_timing_id, cust_balance, customer_no, approvedby_emp_id, sales_agent_id, cash_credit, is_approved, is_with_or, is_active, is_deleted, address, credit_limit, sales_executive', 'safe', 'on' => 'searchCustomers'),
            array('id, created_at, updated_at, user_id, date, firstname, middlename, lastname, email, mobile, phone, address1, address2, tin_no, region_id, province_id, municipality_id, barangay_id, company_name, company_address, ref_cust_id, ref_relationship_id, cust_type, payment_term_id, billing_type_id, billing_timing_id, cust_balance, customer_no, approvedby_emp_id, sales_agent_id, cash_credit, is_approved, is_with_or, is_active, is_deleted, address, credit_limit, sales_executive', 'safe', 'on' => 'searchCustomerPaymentHistory'),
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
            'regions' => array(self::BELONGS_TO, 'Regions', 'region_id'),
            'provinces' => array(self::BELONGS_TO, 'Provinces', 'province_id'),
            'municipalities' => array(self::BELONGS_TO, 'Municipalities', 'municipality_id'),
            'barangays' => array(self::BELONGS_TO, 'Barangays', 'barangay_id'),
            'classifications' => array(self::BELONGS_TO, 'Classifications', 'payment_term_id'),
            'billingTypes' => array(self::BELONGS_TO, 'BillingTypes', 'billing_type_id'),
            'billingTiming' => array(self::BELONGS_TO, 'BillingTiming', 'billing_timing_id'),
            'paymentTerms' => array(self::BELONGS_TO, 'PaymentTerms', 'payment_term_id'),
            'users' => array(self::BELONGS_TO, 'Users', 'user_id'),
            'approvedByEmpID' => array(self::BELONGS_TO, 'Employees', 'approvedby_emp_id'),
            'salesAgent' => array(self::BELONGS_TO, 'Employees', 'sales_agent_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'created_at' => 'Date Created',
            'updated_at' => 'Last Modified',
            'user_id' => 'Users',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'cust_type' => 'Customer Type',
            'mobile' => 'Mobile',
            'phone' => 'Landline',
            'address1' => 'Corporate Address',
            'address2' => 'Delivery Address',
            'tin_no' => 'TIN No.',
            'region_id' => 'Region',
            'province_id' => 'Province',
            'municipality_id' => 'Municipality',
            'barangay_id' => 'Barangay',
            'company_name' => 'Company Name',
            'company_address' => 'Company Address',
            'cust_balance' => 'Balance',
            'credit_limit' => 'Credit Limit',
            'customer_no' => 'Customer No.',
            'approvedby_emp_id' => 'Approved by',
            'sales_agent_id' => 'Sales Executive',
            'cash_credit' => 'Cash / Credit',
            'is_approved' => 'Approved',
            'payment_term_id' => 'Payment Terms',
            'billing_type_id' => 'Billing Type',
            'billing_timing_id' => 'Billing Timing',
            'is_with_or' => 'Is With OR',
            'is_active' => 'Active',
            'is_deleted' => 'Deleted',
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

        $criteria->compare('t.id', $this->id);

        $criteria->compare('t.created_at', $this->created_at, true);

        $criteria->compare('t.updated_at', $this->updated_at, true);

        $criteria->compare('t.user_id', $this->user_id, true);

        $criteria->compare('t.cust_type', $this->cust_type);

        $criteria->compare('t.firstname', $this->firstname, true);

        $criteria->compare('t.middlename', $this->middlename, true);

        $criteria->compare('t.lastname', $this->lastname, true);

        $criteria->compare('t.email', $this->email, true);

        $criteria->compare('t.mobile', $this->mobile, true);

        $criteria->compare('t.phone', $this->phone, true);

        $criteria->compare('t.address1', $this->address1, true);

        $criteria->compare('t.address2', $this->address2, true);

        $criteria->compare('t.tin_no', $this->tin_no, true);

        $criteria->compare('t.region_id', $this->region_id);

        $criteria->compare('t.province_id', $this->province_id);

        $criteria->compare('t.municipality_id', $this->municipality_id);

        $criteria->compare('t.barangay_id', $this->barangay_id);

        $criteria->compare('t.company_name', $this->company_name, true);

        $criteria->compare('t.company_address', $this->company_address, true);

        $criteria->compare('t.cust_balance', $this->cust_balance);

        $criteria->compare('t.credit_limit', $this->credit_limit);

        $criteria->compare('t.customer_no', $this->customer_no, true);

        $criteria->compare('t.approvedby_emp_id', $this->approvedby_emp_id, true);

        $criteria->compare('t.sales_agent_id', $this->sales_agent_id, true);

        $criteria->compare('t.cash_credit', $this->cash_credit, true);

        $criteria->compare('t.is_approved', $this->is_approved, true);

        $criteria->compare('t.payment_term_id', $this->payment_term_id);

        $criteria->with = array(
            'regions',
            'provinces',
            'municipalities',
            'barangays',
            'users.employees'
        );
        $criteria->order = "t.id ASC";

        $criteria->addSearchCondition('concat(address1, " ", company_address,"regions.name"," ","provinces.name"," ","municipalities.name"," ","barangays.name")', $this->address);

        $criteria->compare('t.billing_type_id', $this->billing_type_id);

        $criteria->compare('t.billing_timing_id', $this->billing_timing_id);

        $criteria->compare('t.is_with_or', $this->is_with_or);

        $criteria->compare('employees.id', $this->sales_executive);

        $criteria->compare('t.is_active', $this->is_active);

        $criteria->compare('t.is_deleted', $this->is_deleted);

        $criteria->order = 't.created_at DESC';

        return new CActiveDataProvider('Customers', array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 15,
            )
        ));
    }

    public function addRecord()
    {
        $model = new Customers();

        $model->created_at = $this->created_at;
        $model->updated_at = $this->updated_at;
        $model->user_id = $this->user_id;
        $model->date = $this->date;
        $model->firstname = $this->firstname;
        $model->middlename = $this->middlename;
        $model->lastname = $this->lastname;
        $model->email = $this->email;
        $model->cust_type = $this->cust_type;
        $model->address1 = $this->address1;
        $model->address2 = $this->address2;
        $model->tin_no = $this->tin_no;
        $model->region_id = $this->region_id;
        $model->province_id = $this->province_id;
        $model->municipality_id = $this->municipality_id;
        $model->barangay_id = $this->barangay_id;
        $model->company_name = $this->company_name;
        $model->company_address = $this->company_address;
        $model->payment_term_id = $this->payment_term_id;
        $model->billing_type_id = $this->billing_type_id;
        $model->billing_timing_id = $this->billing_timing_id;
        $model->approvedby_emp_id = $this->approvedby_emp_id;
        $model->sales_agent_id = $this->sales_agent_id;
        $model->cash_credit = $this->cash_credit;
        $model->is_approved = $this->is_approved;
        $model->customer_no = $this->customer_no;
        $model->cust_balance = $this->cust_balance;
        $model->credit_limit = $this->credit_limit;
        $model->is_active = $this->is_active;
        $model->is_deleted = $this->is_deleted;

        if ($model->cust_type == Customers::CUST_TYPE_PERSONAL) {
            $model->scenario = 'personal';
        } else {
            $model->scenario = 'corporate';
        }

        if ($model->validate()) {
            $model->save();
            $messageArr[0] = $model->id;
            $messageArr[1] = 'Customer Successfully Added.';
        } else {
            $messageArr[0] = 0;
            $messageArr[1] = Utilities::get_ModelErrors($model->errors);
        }
        return $messageArr;
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Customers the static model class
     */
    public static function model_getAllData_byDeleted($isDeleted)
    {
        return self::model()->findAll('is_deleted = :isDeleted ', array(':isDeleted' => $isDeleted));
    }

    public function getIsDeleted()
    {
        return Utilities::get_ActiveSelect($this->is_deleted);
    }

    public static function model_getAllData_byID($id)
    {
        return self::model()->find('id = :id', array(':id' => $id));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function setClassActive($value = null)
    {
        $_SESSION[self::tbl()]['classActive'] = $value;
    }

    public static function getClassActive()
    {
        return $_SESSION[self::tbl()]['classActive'];
    }

    public static function setClassOpen($value = null)
    {
        $_SESSION[self::tbl()]['classOpen'] = $value;
    }

    public static function getClassOpen()
    {
        return $_SESSION[self::tbl()]['classOpen'];
    }

    public static function setClassNewActive($value = null)
    {
        $_SESSION[self::tbl()]['new']['classActive'] = $value;
    }

    public static function getClassNewActive()
    {
        return $_SESSION[self::tbl()]['new']['classActive'];
    }

    public static function setClassManageActive($value = null)
    {
        $_SESSION[self::tbl()]['manage']['classActive'] = $value;
    }

    public static function getClassManageActive()
    {
        return $_SESSION[self::tbl()]['manage']['classActive'];
    }

    public static function setClassAdminActive($value = NULL)
    {
        $_SESSION[self::tbl()]['admin']['classActive'] = $value;
    }

    public static function getClassAdminActive()
    {
        return $_SESSION[self::tbl()]['admin']['classActive'];
    }

    public static function sql_getFullName($id)
    {
        $cnn = Utilities::createConnection();
        $sql = 'select firstname from ' . self::tbl() . ' where id = :id limit 1';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':id', $id, PDO::PARAM_INT);
        $fname = $command->queryScalar();

        $sql = 'select middlename from ' . self::tbl() . ' where id = :id limit 1';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':id', $id, PDO::PARAM_INT);
        $mname = $command->queryScalar();

        $sql = 'select lastname from ' . self::tbl() . ' where id = :id limit 1';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':id', $id, PDO::PARAM_INT);
        $lname = $command->queryScalar();

        $mi = substr($mname, 0, 1);

        // return  $fname . ' ' . $mi . ' ' . $lname;
        return Settings::setCapitalAll($lname) . ', ' . Settings::setCapitalFirst($fname) . ' ' . Settings::setCapitalFirst($mname);
    }

    public function getLnameFname()
    {
        return Settings::setCapitalAll($this->lastname) . ', ' . Settings::setCapitalFirst($this->firstname) . ' ' . Settings::setCapitalFirst(substr($this->middlename, 0, 1)) . '.';
    }

    public function getCodeStandardName()
    {
        return $this->fullname;
    }

    public function getClientName()
    {
        if ($this->cust_type == Utilities::YES) {
            return $this->codeStandardName;
        } else {
            return $this->company_name;
        }
    }

    public static function get_ActiveCustType($id = null)
    {
        $active = array(
            self::CUST_TYPE_PERSONAL => 'Personal',
            self::CUST_TYPE_CORPORATE => 'Corporate',
        );
        if (is_null($id))
            return $active;
        else
            return $active[$id];
    }

    public static function sql_getLastInsertedId()
    {
        $cnn = Utilities::createConnection();
        $sql = 'SELECT MAX(id) FROM ' . self::tbl();
        $command = $cnn->createCommand($sql);
        return $command->queryScalar();
    }

    public static function sql_getType_byId($custID)
    {
        $cnn = Utilities::createConnection();
        $sql = 'SELECT cust_type FROM ' . self::tbl() . ' WHERE id = :custID limit 1';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':custID', $custID, PDO::PARAM_INT);
        return $command->queryScalar();
    }

    public static function sql_getCustBalance_byId($custID)
    {
        $cnn = Utilities::createConnection();
        $sql = 'SELECT cust_balance FROM ' . self::tbl() . ' WHERE id = :custID limit 1';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':custID', $custID, PDO::PARAM_INT);
        return $command->queryScalar();
    }

    public static function sql_updateCustBalance_byId($custBalance, $custID)
    {
        $cnn = Utilities::createConnection();
        $sql = 'Update ' . self::tbl() . ' SET  cust_balance = :custBalance WHERE id = :custID';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':custID', $custID, PDO::PARAM_INT);
        $command->bindValue(':custBalance', $custBalance, PDO::PARAM_STR);
        $command->execute();
        return $ok = "ok";
    }

    public function getCustType()
    {
        return Customers::get_ActiveCustType($this->cust_type);
    }

    public function getCustNo()
    {
        if ($this->customer_no == "") {
            $num = Settings::model_getValue_byID(Settings::CONFIG_CUSTOMER_NO_LENGTH)->value;
            return sprintf("%0" . $num . "d", $this->id);
        } else {
            return $this->customer_no;
        }
    }

    public function generateCustomerNo()
    {
        $customerNum = Settings::model_getValue_byID(Settings::CONFIG_CUSTOMER_NO_LENGTH)->value;
        $custID = self::getLastInsertedCustNo() + 1;
        return sprintf("%0" . $customerNum . "d", $custID);
    }

    public function getLastInsertedCustNo()
    {
        $cnn = Utilities::createConnection();
        $sql = 'SELECT customer_no FROM ' . self::tbl() . ' ORDER BY id DESC limit 1';
        $command = $cnn->createCommand($sql);
        return $command->queryScalar();
    }

    public function getBillingHistory()
    {
        $fund = $this->cust_balance;
        $modelAmount = CustomerPaymentHeaders::model_getAllData_byCustomerID($this->id);

        foreach ($modelAmount as $bal) {
            $amount .= $bal->amount;
        }
        $totalBalance = (CustomerPaymentTransactions::sql_getTotalBalance_byCustomerCaseID($this->id) != '') ? CustomerPaymentTransactions::sql_getTotalBalance_byCustomerCaseID($this->id) : 0;
        $balance = (CustomerPaymentTransactions::sql_getBalance_byCustomerCaseID($this->id) != '') ? CustomerPaymentTransactions::sql_getBalance_byCustomerCaseID($this->id) : 0;
        $amountTotal += $amount;
        return CHtml::link(substr('₱ ' . Settings::setNumberFormat($balance, 2), 0, 20), "#", array('class' => 'txtRemarks', 'rel' => 'popover',
                'data-original-title' => 'Payment History',
                'data-content' =>
                ' Total Balance: ₱ ' . Settings::setNumberFormat($totalBalance, 2) .
                ' Total Amount Paid: ₱ ' . Settings::setNumberFormat($amountTotal, 2) .
                ' Remaining Balance: ₱ ' . Settings::setNumberFormat($balance, 2),
                'data-placement' => 'top', 'data-toggle' => 'popover-hover',
                'data-trigger' => 'hover',
                'style' => 'text-decoration: none; text-align: center;color: #111;',
                'onmouseover' => 'viewRemarks("' . $totalBalance . '")',
                'onClick' => 'clickViewRemarks("' . $this->id . '")'), false, true);
    }

    public function get_billingTypeID_byCustomerID($customerID)
    {
        $cnn = Utilities::createConnection();
        $sql = 'SELECT billing_type_id FROM ' . self::tbl() . ' WHERE id = :custID';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':custID', $customerID, PDO::PARAM_INT);
        return $command->queryScalar();
    }

    public function getIsActive()
    {
        if ($this->is_active == Utilities::YES) {
            $color = 'label-primary';
        } else {
            $color = 'label-danger';
        }
        return '<div class="label label-table ' . $color . ' " style="border-radius: none !important; font-size: 10px; text-align: center; font-weight: bold; text-transform: uppercase; padding: 2px 8px !important;"><span">' . Utilities::get_ActiveStatus($this->is_active) . '</span></div>';
    }

    public static function sql_getData_byID($customerID)
    {
        $cnn = Utilities::createConnection();
        $sql = 'SELECT * FROM ' . self::tbl() . ' WHERE id = :customerID limit 1';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':customerID', $customerID, PDO::PARAM_STR);
        return $command->queryRow();
    }

    public static function sql_getClientName_byID($id)
    {
        $model = new Customers();
        $model = Utilities::model_getByID(Customers::model(), $id);

        if ($model->cust_type == Utilities::YES) {
            $cnn = Utilities::createConnection();
            $sql = 'select firstname from ' . self::tbl() . ' where id = :id limit 1';
            $command = $cnn->createCommand($sql);
            $command->bindValue(':id', $id, PDO::PARAM_INT);
            $fname = $command->queryScalar();

            $sql = 'select middlename from ' . self::tbl() . ' where id = :id limit 1';
            $command = $cnn->createCommand($sql);
            $command->bindValue(':id', $id, PDO::PARAM_INT);
            $mname = $command->queryScalar();

            $sql = 'select lastname from ' . self::tbl() . ' where id = :id limit 1';
            $command = $cnn->createCommand($sql);
            $command->bindValue(':id', $id, PDO::PARAM_INT);
            $lname = $command->queryScalar();

            $mi = substr($mname, 0, 1);

            return Settings::setCapitalAll($lname) . ', ' . Settings::setCapitalFirst($fname) . ' ' . Settings::setCapitalFirst($mname);
        } else {
            $cnn = Utilities::createConnection();
            $sql = 'select company_name from ' . self::tbl() . ' where id = :id limit 1';
            $command = $cnn->createCommand($sql);
            $command->bindValue(':id', $id, PDO::PARAM_INT);
            $companyName = $command->queryScalar();

            return $companyName;
        }
    }

    public function getClientAddress()
    {
        if ($this->cust_type == Customers::CUST_TYPE_PERSONAL) {
            return $this->address1;
        } else {
            return $this->company_address;
        }
    }

    public function get_customerCreditLimit_orderByUpdatedAt($custID)
    {
        $cnn = Utilities::createConnection();
        $sql = 'SELECT a.*, b.* FROM ' . self::tbl() . ' AS a LEFT JOIN customer_credit_limits AS b ON a.id = b.customer_id WHERE a.id = :custID ORDER by b.updated_at DESC ';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':custID', $custID, PDO::PARAM_INT);
        return $command->queryScalar();
    }

    public static function sql_updateCustCreditLimit_byId($creditLimit, $custID)
    {
        $cnn = Utilities::createConnection();
        $sql = 'Update ' . self::tbl() . ' SET  credit_limit = :creditLimit WHERE id = :custID';
        $command = $cnn->createCommand($sql);
        $command->bindValue(':custID', $custID, PDO::PARAM_INT);
        $command->bindValue(':creditLimit', $creditLimit, PDO::PARAM_STR);
        return $command->execute();
    }

    public function getPaymentTermTotal()
    {
        return (($this->paymentTerms->days_total) * 2);
    }

    public function getFormatCreditLimit()
    {
        $creditLimit = '₱ ' . Settings::setNumberFormat($this->credit_limit, 2);

        return $creditLimit;
    }

    public function getFullname()
    {
        $fullname = $this->firstname . " " . $this->middlename . " " . $this->lastname;

        return $fullname;
    }

    public static function model_getData_byIsDeletedAndCreditLimitIsNULL($isDeleted, $creditLimit)
    {
        return self::model()->findAll('is_deleted = :isDeleted AND credit_limit = :creditLimit', array(':isDeleted' => $isDeleted, ':creditLimit' => $creditLimit));
    }

    public static function get_ActiveCashCredit($id = null)
    {
        $active = array(
            self::CASH => 'Cash',
            self::CREDIT => 'Credit',
        );
        if (is_null($id))
            return $active;
        else
            return $active[$id];
    }

    public function getIsApproved()
    {
        if ($this->is_approved == Utilities::YES) {
            $color = 'label-primary';
        } else {
            $color = 'label-danger';
        }
        return '<div class="label label-table ' . $color . ' " style="border-radius: none !important; font-size: 10px; text-align: center; font-weight: bold; text-transform: uppercase; padding: 2px 8px !important;"><span">' . Utilities::get_ActiveSelect($this->is_approved) . '</span></div>';
    }

    public static function model_getAllData_byUserIDandDeleted($userID, $isDeleted)
    {
        return self::model()->findAll('user_id = :userID AND is_deleted = :isDeleted', array(':userID' => $userID, ':isDeleted' => $isDeleted));
    }

}
