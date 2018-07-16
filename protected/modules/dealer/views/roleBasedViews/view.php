<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">View</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>', $this->createUrl('roleBasedViews/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>', $this->createUrl('roleBasedViews/admin'), array('class' => 'btn btn-xs btn-primary pull-right', 'data-toggle' => 'tooltip', 'title' => 'Back', 'style' => 'margin-right: 5px;')); ?>
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
                    <th>role_id</th>
                    <td><?php print $model->role_id ?></td>
                </tr>
                <tr>
                    <th>menu_id</th>
                    <td><?php print $model->menu_id ?></td>
                </tr>
                <tr>
                    <th>menu_name</th>
                    <td><?php print $model->menu_name ?></td>
                </tr>
                <tr>
                    <th>is_viewable</th>
                    <td><?php print $model->is_viewable ?></td>
                </tr>
                <tr>
                    <th>module_id</th>
                    <td><?php print $model->module_id ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>