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
            <?php echo CHtml::activeLabelEx($model, 'ref_no'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'ref_no'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'branch_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'branch_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'client_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'client_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'expenses_type_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'expenses_type_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'title'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'title'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'amount'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'amount'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'remarks'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'remarks'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'is_sync'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'is_sync'); ?>
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
        <?php echo CHtml::link('Back', $this->createUrl('Expenses/admin'), array('class' => 'btn btn-danger btn-sm')); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-success')); ?>
    </div>
</fieldset>
<?php print CHtml::endForm(); ?>
