<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">View</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>', $this->createUrl('services/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>', $this->createUrl('services/admin'), array('class' => 'btn btn-xs btn-primary pull-right', 'data-toggle' => 'tooltip', 'title' => 'Back', 'style' => 'margin-right: 5px;')); ?>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th>Date Created</th>
                    <td><?php echo Settings::setDateTimeStandard($model->created_at) ?></td>
                </tr>
                <tr>
                    <th>Last Modified</th>
                    <td><?php echo Settings::setDateTimeStandard($model->updated_at) ?></td>
                </tr>
                <tr>
                    <th>branch_id</th>
                    <td><?php print $model->branch_id ?></td>
                </tr>
                <tr>
                    <th>name</th>
                    <td><?php print $model->name ?></td>
                </tr>
                <tr>
                    <th>service_type_id</th>
                    <td><?php print $model->service_type_id ?></td>
                </tr>
                <tr>
                    <th>amount</th>
                    <td><?php print $model->amount ?></td>
                </tr>
                <tr>
                    <th>file_path</th>
                    <td><?php print $model->file_path ?></td>
                </tr>
                <tr>
                    <th>file_pics</th>
                    <td><?php print $model->file_pics ?></td>
                </tr>
                <tr>
                    <th>is_sync</th>
                    <td><?php print $model->is_sync ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>