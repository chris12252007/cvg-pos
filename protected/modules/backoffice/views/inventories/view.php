<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">View</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>', $this->createUrl('inventories/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>', $this->createUrl('inventories/admin'), array('class' => 'btn btn-xs btn-primary pull-right', 'data-toggle' => 'tooltip', 'title' => 'Back', 'style' => 'margin-right: 5px;')); ?>
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
                    <th>client_id</th>
                    <td><?php print $model->client_id ?></td>
                </tr>
                <tr>
                    <th>name</th>
                    <td><?php print $model->name ?></td>
                </tr>
                <tr>
                    <th>bar_code</th>
                    <td><?php print $model->bar_code ?></td>
                </tr>
                <tr>
                    <th>category_id</th>
                    <td><?php print $model->category_id ?></td>
                </tr>
                <tr>
                    <th>price</th>
                    <td><?php print $model->price ?></td>
                </tr>
                <tr>
                    <th>cost</th>
                    <td><?php print $model->cost ?></td>
                </tr>
                <tr>
                    <th>tax</th>
                    <td><?php print $model->tax ?></td>
                </tr>
                <tr>
                    <th>margin</th>
                    <td><?php print $model->margin ?></td>
                </tr>
                <tr>
                    <th>qty_stock</th>
                    <td><?php print $model->qty_stock ?></td>
                </tr>
                <tr>
                    <th>qty_reorder</th>
                    <td><?php print $model->qty_reorder ?></td>
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