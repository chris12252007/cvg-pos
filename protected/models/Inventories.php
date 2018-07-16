<?php

/**
 * This is the model class for table "inventories".
 *
 * The followings are the available columns in table 'inventories':
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $branch_id
 * @property integer $client_id
 * @property string $name
 * @property string $bar_code
 * @property integer $category_id
 * @property string $price
 * @property string $cost
 * @property string $tax
 * @property string $margin
 * @property integer $qty_stock
 * @property integer $qty_reorder
 * @property string $file_path
 * @property string $file_pics
 * @property integer $is_sync
 * @property integer $is_deleted
 */
class Inventories extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'inventories';
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
            array('branch_id, client_id, category_id, qty_stock, qty_reorder, is_sync, is_deleted', 'numerical', 'integerOnly' => true),
            array('name, file_path, file_pics', 'length', 'max' => 100),
            array('bar_code', 'length', 'max' => 50),
            array('price, cost, tax, margin', 'length', 'max' => 12),
            array('updated_at', 'safe'),
// The following rule is used by search().
// Please remove those attributes that should not be searched.
            array('id, created_at, updated_at, branch_id, client_id, name, bar_code, category_id, price, cost, tax, margin, qty_stock, qty_reorder, file_path, file_pics, is_sync, is_deleted', 'safe', 'on' => 'search'),
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
            'branch_id' => 'Branch',
            'client_id' => 'Client',
            'name' => 'Name',
            'bar_code' => 'Bar Code',
            'category_id' => 'Category',
            'price' => 'Price',
            'cost' => 'Cost',
            'tax' => 'Tax',
            'margin' => 'Margin',
            'qty_stock' => 'Qty Stock',
            'qty_reorder' => 'Qty Reorder',
            'file_path' => 'File Path',
            'file_pics' => 'File Pics',
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

        $criteria->compare('branch_id', $this->branch_id);

        $criteria->compare('client_id', $this->client_id);

        $criteria->compare('name', $this->name, true);

        $criteria->compare('bar_code', $this->bar_code, true);

        $criteria->compare('category_id', $this->category_id);

        $criteria->compare('price', $this->price, true);

        $criteria->compare('cost', $this->cost, true);

        $criteria->compare('tax', $this->tax, true);

        $criteria->compare('margin', $this->margin, true);

        $criteria->compare('qty_stock', $this->qty_stock);

        $criteria->compare('qty_reorder', $this->qty_reorder);

        $criteria->compare('file_path', $this->file_path, true);

        $criteria->compare('file_pics', $this->file_pics, true);

        $criteria->compare('is_sync', $this->is_sync);

        $criteria->compare('is_deleted', $this->is_deleted);

        $criteria->order = 'created_at DESC';

        return new CActiveDataProvider('Inventories', array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @return Inventories the static model class
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
