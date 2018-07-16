<?php print CHtml::beginForm('', 'POST', array('role' => 'form')); ?>
<div class="box-body">
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'branch_id'); ?>
        <?php print CHtml::activeDropDownList($model, 'branch_id', CHtml::listData(Branches::model_getAllData_byDeleted(Utilities::NO), 'id', 'name'), array('class' => 'form-control', 'prompt' => 'Choose One')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'client_id'); ?>
        <?php print CHtml::activeDropDownList($model, 'client_id', CHtml::listData(Clients::model_getAllData_byDeleted(Utilities::NO), 'id', 'fullName'), array('class' => 'form-control', 'prompt' => 'Choose One')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'name'); ?>
        <?php print CHtml::activeTextField($model, 'name', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'discount_type_id'); ?>
        <?php print CHtml::activeTextField($model, 'discount_type_id', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'value'); ?>
        <?php print CHtml::activeTextField($model, 'value', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
</div>

<div class="box-footer">
    <?php print CHtml::link('Back', $this->createUrl('discounts/admin'), array('class' => 'btn btn-default')); ?>
    <?php print CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary pull-right')); ?>
</div>
<?php print CHtml::endForm(); ?>