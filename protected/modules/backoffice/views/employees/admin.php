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
            <span><i class="fa fa-th"></i>Manage - Employees</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>', $this->createUrl('Employees/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
        </header>
        <?php $static = array('' => Yii::t('', 'All')); ?>
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'employees-grid',
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
                    'name' => 'employee_no',
                    'value' => '$data->employee_no',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                array(
                    'name' => 'firstname',
                    'value' => '$data->firstname',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                array(
                    'name' => 'middlename',
                    'value' => '$data->middlename',
                    'headerHtmlOptions' => array(
                        'style' => 'width: 10%;'
                    ),
                ),
                /*

                  array(
                  'name' => 'lastname',
                  'value' => '$data->lastname',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'mobile',
                  'value' => '$data->mobile',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'phone',
                  'value' => '$data->phone',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'email',
                  'value' => '$data->email',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'birthdate',
                  'value' => '$data->birthdate',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'civil_status_id',
                  'value' => '$data->civil_status_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'address1',
                  'value' => '$data->address1',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'address2',
                  'value' => '$data->address2',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'region_id',
                  'value' => '$data->region_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'province_id',
                  'value' => '$data->province_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'municipality_id',
                  'value' => '$data->municipality_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'barangay_id',
                  'value' => '$data->barangay_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'office_id',
                  'value' => '$data->office_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'citizenship_id',
                  'value' => '$data->citizenship_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'branch_id',
                  'value' => '$data->branch_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'contact_person_id',
                  'value' => '$data->contact_person_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'occupation_id',
                  'value' => '$data->occupation_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'department_id',
                  'value' => '$data->department_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'manager_id',
                  'value' => '$data->manager_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'location_id',
                  'value' => '$data->location_id',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'is_agent',
                  'value' => '$data->is_agent',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

                  array(
                  'name' => 'is_active',
                  'value' => '$data->is_active',
                  'headerHtmlOptions' => array(
                  'style' => 'width: 10%;'
                  ),
                  ),

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
