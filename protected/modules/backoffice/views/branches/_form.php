<?php print CHtml::beginForm('','POST', array('role' => 'form'));?>
<div class="box-body">
                <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'client_id'); ?>
                <?php print CHtml::activeTextField($model,'client_id', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'address'); ?>
                <?php print CHtml::activeTextField($model,'address', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'latitude'); ?>
                <?php print CHtml::activeTextField($model,'latitude', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'longitude'); ?>
                <?php print CHtml::activeTextField($model,'longitude', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
                        <div class="form-group">
                <?php print CHtml::activeLabelEx($model,'is_sync'); ?>
                <?php print CHtml::activeTextField($model,'is_sync', array('class' => 'form-control', 'placeholder' => '')); ?>
            </div>
            </div>

<div class="box-footer">
    <?php print CHtml::link('Back', $this->createUrl('branches/admin'), array('class' => 'btn btn-default')); ?>
    <?php print CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',  array('class'=>'btn btn-primary pull-right')); ?>
</div>
<?php print CHtml::endForm(); ?>