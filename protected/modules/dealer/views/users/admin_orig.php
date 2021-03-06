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
        hover();
    }
    
    function hover()
    {
        $('[rel=tooltip]').tooltip();
    }
    ", 2);
?>
<br/>
<!-- NEW COL START -->
<article class="col-sm-12 col-md-12 col-lg-12">

    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-4" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">

        <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>Manage Users</h2>
        </header>

        <div class="modal-content">
            <div class="smart-form" style="text-align: center;padding-bottom: 10px;">
                <?php print CHtml::link('<i class="fa fa-plus-circle">' . ' Create New</i>', $this->createUrl('users/create'), array('class' => 'btn btn-success btn-sm', 'style' => 'width: 150px;', 'id' => 'btnPayment')); ?>

                <?php $static = array('' => Yii::t('', 'All')); ?>
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'users-grid',
                    'dataProvider' => $model->search(),
                    'afterAjaxUpdate' => 'reinstallDatePicker',
                    'filter' => $model,
                    'columns' => array(
//                        array(
//                            'name' => 'id',
//                            'filter' => false,
//                            'htmlOptions' => array(
//                                'style' => 'width: 50px;'
//                            ),
//                        ),
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
                        array(
                            'name' => 'emp_id',
                            'header' => 'Employee',
                            'value' => '$data->employees->lnameFname',
                            'filter' => $static + CHtml::ListData(Employees::model_getAllData_byDeleted(Utilities::NO), 'id', 'lnameFname'),
                            'htmlOptions' => array(
                                'style' => 'width: 300px;'
                            ),
                        ),
                        'username',
                        'email',
                        array(
                            'name' => 'role',
                            'header' => 'Employee',
                            'value' => '$data->roles->name',
                            'filter' => $static + CHtml::ListData(Employees::model_getAllData_byDeleted(Utilities::NO), 'id', 'lnameFname'),
                            'htmlOptions' => array(
                                'style' => 'width: 150px;'
                            ),
                        ),
                        array(
                            'name' => 'is_active',
                            'value' => '$data->isActive',
                            'filter' => $static + Utilities::get_ActiveSelect(),
                            'htmlOptions' => array(
                                'style' => 'width: 100px;'
                            ),
                            'type' => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'header' => 'Action',
                            'template' => '{view}{update}', // buttons here...
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
                            'htmlOptions' => array(
                                'style' => 'width: 100px;'
                            ),
                        ),
                    ),
                ));
                ?>
            </div>
        </div>
        <br/><br/>
    </div>
</article>