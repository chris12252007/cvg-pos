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
            <?php echo CHtml::activeLabelEx($model, 'date'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'date'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'branch'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'branch'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'job_order'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'job_order'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'customer_name'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'customer_name'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'wdf'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'wdf'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'wdp'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'wdp'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'hand_wash'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'hand_wash'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'dry_clean'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'dry_clean'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'press_only'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'press_only'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'total_volume'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'total_volume'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'revenue_wdf'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'revenue_wdf'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'revenue_wdp'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'revenue_wdp'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'revenue_hand_wash'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'revenue_hand_wash'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'revenue_dry_clean'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'revenue_dry_clean'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'revenue_press_only'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'revenue_press_only'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'total_revenue'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'total_revenue'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'payments'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'payments'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'accounts_receivable'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'accounts_receivable'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'rent'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'rent'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'salaries'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'salaries'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'electricity'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'electricity'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'water'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'water'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'supplies'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'supplies'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'total_expenses'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'total_expenses'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'is_deleted'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'is_deleted'); ?>
            </label>
        </div>
    </div>
    <div class="footer-button">
        <?php echo CHtml::link('Back', $this->createUrl('RawData/admin'), array('class' => 'btn btn-danger btn-sm')); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-success')); ?>
    </div>
</fieldset>
<?php print CHtml::endForm(); ?>