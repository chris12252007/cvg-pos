<?php $this->renderPartial('/layouts/js/_select2'); ?>
<?php print CHtml::beginForm('', 'POST', array('role' => 'form')); ?>
<?php $this->widget('Flashes'); ?>
<div class="box-body">
    <div class="form-group">
        <?php echo CHtml::activeLabelEx($model, 'name'); ?>
        <?php echo CHtml::activeTextField($model, 'name', array('class' => 'form-control', 'placeholder' => 'Enter name')); ?>
    </div>
</div>

<div class="box-footer">
    <?php echo CHtml::link('Back', $this->createUrl('actions/admin'), array('class' => 'btn btn-default')); ?>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary pull-right')); ?>
</div>
<?php print CHtml::endForm(); ?>