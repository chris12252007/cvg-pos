<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
<script type="text/javascript">
    $('input').addClass('form-control');

    function reinstallDatePicker(id, data) {
        //use the same parameters that you had set in your widget else the datepicker will be refreshed by default
        $('.datePicker').datepicker(jQuery.extend({showMonthAfterYear: false}, jQuery.datepicker.regional['ja'], {'dateFormat': 'yy-mm-dd'}));

        $('input').addClass('form-control');
        $('select').select2({width: 'resolve'});
        $('.select2-hidden-accessible').attr('hidden', true);
    }

    function syncRecords() {

        var config = {
            apiKey: "AIzaSyB2icUx2WP_HMFYFNQnsqWDuu3_2hj1ctw",
            authDomain: "migo-dev.firebaseapp.com",
            databaseURL: "https://migo-dev.firebaseio.com",
            projectId: "migo-dev",
            storageBucket: "migo-dev.appspot.com",
            messagingSenderId: "135244009636"
        };
        firebase.initializeApp(config);
        // Get a reference to the database service
        var database = firebase.database().ref('branches');

        $.ajax({
            type: 'GET',
            url: '?r=dealer/rawData/syncRecords',
            async: false,
            success: function (data) {
                var newbranches = database.push();
                var result = JSON.parse(data);
                console.log(data);
                var x = [result];


                newbranches.set({
                    Branches: x
                });

                alert("Records Successfully Sync!");
            }
        });
    }
</script>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">        
                <h3 class="box-title"><i class="fa fa-th"></i> Manage - RawData</h3>
                <?php print CHtml::link('<i class="icomoon-icon-redo"></i>', '', array('class' => 'btn-back', 'data-tooltip' => 'create', 'onClick' => 'syncRecords()')); ?>

            </div><!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <?php $static = array('' => Yii::t('', 'All')); ?>
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'raw-data-grid',
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
                            'name' => 'branch',
                            'value' => '$data->branch',
                            'headerHtmlOptions' => array(
                                'style' => 'width: 10%;'
                            ),
                        ),
                        array(
                            'name' => 'job_order',
                            'value' => '$data->job_order',
                            'headerHtmlOptions' => array(
                                'style' => 'width: 10%;'
                            ),
                        ),
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
            </div><!-- /.box-body -->
        </div><!-- /.box -->


    </div><!--/.col (left) -->
</div>   <!-- /.row -->
