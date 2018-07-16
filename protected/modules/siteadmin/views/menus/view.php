<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">View</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>', $this->createUrl('menus/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>', $this->createUrl('menus/admin'), array('class' => 'btn btn-xs btn-primary pull-right', 'data-toggle' => 'tooltip', 'title' => 'Back', 'style' => 'margin-right: 5px;')); ?>
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
                    <th>Parent</th>
                    <td><?php print $model->menus->name ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php print $model->name ?></td>
                </tr>
                <tr>
                    <th>Module</th>
                    <td><?php print $model->modules->name ?></td>
                </tr>
                <tr>
                    <th>Controller</th>
                    <td><?php print $model->controller_name ?></td>
                </tr>
                <tr>
                    <th>Action</th>
                    <td><?php print $model->action_name ?></td>
                </tr>
                <tr>
                    <th>Is Main Menu</th>
                    <td><?php print $model->isMainMenu ?></td>
                </tr>
                <tr>
                    <th>Is Url</th>
                    <td><?php print $model->isUrl ?></td>
                </tr>
                <tr>
                    <th>Orders</th>
                    <td><?php print $model->orders ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>