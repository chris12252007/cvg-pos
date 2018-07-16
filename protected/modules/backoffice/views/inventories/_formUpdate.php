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
            <?php echo CHtml::activeLabelEx($model, 'name'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'name'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'bar_code'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'bar_code'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'category_id'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'category_id'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'price'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'price'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'cost'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'cost'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'tax'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'tax'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'margin'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'margin'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'qty_stock'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'qty_stock'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'qty_reorder'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'qty_reorder'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'file_path'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'file_path'); ?>
            </label>
        </div>
        <div class ="col-lg-3">
            <?php echo CHtml::activeLabelEx($model, 'file_pics'); ?>
            <label class="input"><i class="icon-prepend minia-icon-book"></i>
                <?php echo CHtml::activeTextField($model, 'file_pics'); ?>
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
        <?php echo CHtml::link('Back', $this->createUrl('Inventories/admin'), array('class' => 'btn btn-danger btn-sm')); ?>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-success')); ?>
    </div>
</fieldset>
<?php print CHtml::endForm(); ?>