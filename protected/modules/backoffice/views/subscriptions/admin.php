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

<div class="col-lg-12">
    <div class="metronicManage">
        <header>
            <span><i class="fa fa-th"></i>Manage - Subscriptions</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>', $this->createUrl('Subscriptions/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
        </header>
        <?php $static = array('' => Yii::t('', 'All')); ?>
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'subscriptions-grid',
            'dataProvider' => $model->search(),
            'afterAjaxUpdate' => 'reinstallDatePicker',
            'filter' => $model,
            'columns' => array(
                array(
                    'header' => 'Date Created',
                    'name' => 'created_at',
                    'value' => 'Settings::setDateStandard($data->created_at)',
                    'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'attribute' => 'created_at',
                        'htmlOptions' => array(
                            'class' => 'datePicker',
                        ),
                        'options' => array(
                            'showOn' => 'focus',
                            'dateFormat' => 'yy-mm-dd',
                            'showOtherMonths' => true,
                            'selectOtherMonths' => true,
                            'changeMonth' => true,
                            'changeYear' => true,
                            'showButtonPanel' => true,
                        )
                        ), true),
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                array(
                    'name' => 'id',
                    'value' => '$data->id',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                array(
                    'name' => 'created_at',
                    'value' => '$data->created_at',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                array(
                    'name' => 'updated_at',
                    'value' => '$data->updated_at',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                array(
                    'name' => 'name',
                    'value' => '$data->name',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                array(
                    'name' => 'details',
                    'value' => '$data->details',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                array(
                    'name' => 'is_sync',
                    'value' => '$data->is_sync',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                /*

                  array(
                  'name' => 'is_deleted',
                  'value' => '$data->is_deleted',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),
                 */
                array(
                    'class' => 'CButtonColumn',
                    'header' => 'Action',
                    'template' => '{view}{update}{delete}',
                    'viewButtonLabel' => '<span class="minia-icon-search"></span>',
                    'viewButtonOptions' => ['title' => '', 'data-tooltip' => 'View',],
                    'viewButtonImageUrl' => false, // disable default image
                    'updateButtonLabel' => '<span class="icomoon-icon-pencil-2"></span>',
                    'updateButtonOptions' => ['title' => '', 'data-tooltip' => 'Update',],
                    'updateButtonImageUrl' => false, // disable default image
                    'deleteButtonLabel' => '<span style="color:red;" class="icomoon-icon-remove"></span>',
                    'deleteButtonOptions' => ['title' => '', 'data-tooltip' => 'Delete',],
                    'deleteButtonImageUrl' => false,
                    'deleteConfirmation' => 'Are you sure you want to delete?',
                    'htmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
            ),
        ));
        ?>
    </div>
</div>
