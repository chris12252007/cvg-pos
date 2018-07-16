<?php print CHtml::beginForm('','POST', array('role' => 'form'));?>
<div class="box-body">
                <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'client_id'); ?>
                <?php print CHtml::activeTextField($model,'client_id', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'branch_id'); ?>
                <?php print CHtml::activeTextField($model,'branch_id', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'name'); ?>
                <?php print CHtml::activeTextField($model,'name', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'discount_type_id'); ?>
                <?php print CHtml::activeTextField($model,'discount_type_id', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'value'); ?>
                <?php print CHtml::activeTextField($model,'value', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'is_sync'); ?>
                <?php print CHtml::activeTextField($model,'is_sync', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
            </div>

<div class="box-footer">
    <?php print CHtml::link('Back', $this->createUrl('discounts/admin'), array('class' => 'btn btn-default')); ?>
    <?php print CHtml::submitButton($model->isNewRecord ? 'Save' : 'Update',  array('class'=>'btn btn-primary pull-right')); ?>
</div>
<?php print CHtml::endForm(); ?>