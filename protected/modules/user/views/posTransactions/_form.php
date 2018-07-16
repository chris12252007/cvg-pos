<?php print CHtml::beginForm('', 'POST', array('class' => 'smart-form')); ?>
<fieldset>
    <div class ="row">
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'created_at'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'created_at'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'updated_at'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'updated_at'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'trans_date'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'trans_date'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'ref_no'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'ref_no'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'cust_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'cust_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'branch_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'branch_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'service_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'service_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'inv_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'inv_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'transaction_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'transaction_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'transaction_name'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'transaction_name'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'qty'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'qty'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'price'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'price'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'amount_net'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'amount_net'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'balance'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'balance'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'user_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'user_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'is_fully_paid'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'is_fully_paid'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'is_inventory'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'is_inventory'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'remarks'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'remarks'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'is_deleted'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'is_deleted'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'deleted_by'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'deleted_by'); ?>
            </label>
        </div>
    </div>
    <div class="footer-button">
        <?php echo CHtml::link('Back', $this->createUrl('PosTransactions/admin'), array('class' => 'btn btn-danger btn-sm')); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-success')); ?>
    </div>
</fieldset>
<?php print CHtml::endForm(); ?>
