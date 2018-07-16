<?php
Yii::app()->clientScript->registerScript("javascript", "
       
    $('select').select2({ width: 'resolve' });
    $('.select2-hidden-accessible').attr('hidden', true);
    $( 'input' ).addClass('form-control' );

    function reinstallDatePicker(id, data) {
            //use the same parameters that you had set in your widget else the datepicker will be refreshed by default
        $('.datePicker').datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional['ja'],{'dateFormat':'yy-mm-dd'}));
        
        $( 'input' ).addClass('form-control' );
        $('select').select2({ width: 'resolve' });
        $('.select2-hidden-accessible').attr('hidden', true);
    }
    ", 2);
?>
<div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Manage</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>', $this->createUrl('actions/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
        </div>
        <div class="box-body"> <?php $static = array('' => Yii::t('', 'All')); ?>
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'barangays-grid',
                'dataProvider' => $model->search(),
                'afterAjaxUpdate' => 'reinstallDatePicker',
                'filter' => $model,
                'columns' => array(
                    array(
                        'name' => 'id',
                        'value' => '$data->id',
                        'filter' => false,
                        'htmlOptions' => array(
                            'style' => 'width: 50px;'
                        ),
                    ),
                    array(
                        'name' => 'created_at',
                        'value' => 'Settings::setDateStandard($data->created_at)',
                        'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model' => $model,
                            'attribute' => 'created_at', // This is how it works for me.
                            'htmlOptions' => array(
                                'class' => 'datePicker',
                            ),
                            'options' => array(// (#3)
                                'showOn' => 'focus',
                                'dateFormat' => 'yy-mm-dd',
                                'showOtherMonths' => true,
                                'selectOtherMonths' => true,
                                'changeMonth' => true,
                                'changeYear' => true,
                                'showButtonPanel' => true,
                            )
                            ), true),
                        'htmlOptions' => array(
                            'style' => 'width: 120px;'
                        ),
                    ),
                    'name',
                    array(
                        'name' => 'is_deleted',
                        'value' => '$data->isDeleted',
                        'filter' => $static + Utilities::get_ActiveSelect(),
                        'htmlOptions' => array(
                            'style' => 'width: 100px;'
                        ),
                        'type' => 'raw',
                    ),
                    array(
                        'class' => 'CButtonColumn',
                        'header' => 'Action',
                        'template' => '{view}{update}{delete}', // buttons here...
                        'viewButtonLabel' => '<span rel = "tooltip" title="View" class="minia-icon-search"></span>', // custom icon
                        'viewButtonOptions' => array(
                            'title' => '',
                        ),
                        'viewButtonImageUrl' => false, // disable default image
                        'updateButtonLabel' => '<span rel = "tooltip" title="Update" class="icomoon-icon-pencil"></span>', // custom icon
                        'updateButtonOptions' => array(
                            'title' => '',
                        ),
                        'updateButtonImageUrl' => false, // disable default image
                        'deleteButtonLabel' => '<span rel = "tooltip" title="Delete" class="icomoon-icon-remove"></span>',
                        'deleteButtonOptions' => array(
                            'title' => '',
                        ),
                        'deleteButtonImageUrl' => false,
                        'deleteConfirmation' => 'Are you sure you want to delete?', // confirmation message for delete 
                        'htmlOptions' => array(
                            'style' => 'width: 100px;'
                        ),
                    ),
                ),
            ));
            ?>
        </div>
    </div>
</div>