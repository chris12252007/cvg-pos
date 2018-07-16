<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">View</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>', $this->createUrl('userBasedAccess/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>', $this->createUrl('userBasedAccess/admin'), array('class' => 'btn btn-xs btn-primary pull-right', 'data-toggle' => 'tooltip', 'title' => 'Back', 'style' => 'margin-right: 5px;')); ?>
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
                    <th>menu_id</th>
                    <td><?php print $model->menu_id ?></td>
                </tr>
                <tr>
                    <th>module_id</th>
                    <td><?php print $model->module_id ?></td>
                </tr>
                <tr>
                    <th>user_id</th>
                    <td><?php print $model->user_id ?></td>
                </tr>
                <tr>
                    <th>controller_id</th>
                    <td><?php print $model->controller_id ?></td>
                </tr>
                <tr>
                    <th>controller_name</th>
                    <td><?php print $model->controller_name ?></td>
                </tr>
                <tr>
                    <th>action_id</th>
                    <td><?php print $model->action_id ?></td>
                </tr>
                <tr>
                    <th>action_name</th>
                    <td><?php print $model->action_name ?></td>
                </tr>
                <tr>
                    <th>is_accesible</th>
                    <td><?php print $model->is_accesible ?></td>
                </tr>
                <tr>
                    <th>parent_id</th>
                    <td><?php print $model->parent_id ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>