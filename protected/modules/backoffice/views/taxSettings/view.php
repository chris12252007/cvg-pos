<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">View</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>',$this->createUrl('taxSettings/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>', $this->createUrl('taxSettings/admin'), array('class' => 'btn btn-xs btn-primary pull-right', 'data-toggle' => 'tooltip', 'title' => 'Back', 'style' => 'margin-right: 5px;')); ?>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                                    <th>Date Created</th>
                                    <td><?php echo Settings::setDateTimeStandard($model->created_at)?></td>
                                </tr>
                                <tr>
                                    <th>Last Modified</th>
                                    <td><?php echo Settings::setDateTimeStandard($model->updated_at)?></td>
                                </tr>
                                <tr>
                                    <th>client_id</th>
                                    <td><?php print $model->client_id?></td>
                                </tr>
                                <tr>
                                    <th>branch_id</th>
                                    <td><?php print $model->branch_id?></td>
                                </tr>
                                <tr>
                                    <th>layalty_type_id</th>
                                    <td><?php print $model->layalty_type_id?></td>
                                </tr>
                                <tr>
                                    <th>name</th>
                                    <td><?php print $model->name?></td>
                                </tr>
                                <tr>
                                    <th>precentage</th>
                                    <td><?php print $model->precentage?></td>
                                </tr>
                                <tr>
                                    <th>tax_type_id</th>
                                    <td><?php print $model->tax_type_id?></td>
                                </tr>
                                <tr>
                                    <th>tax_option_id</th>
                                    <td><?php print $model->tax_option_id?></td>
                                </tr>
                                <tr>
                                    <th>is_sync</th>
                                    <td><?php print $model->is_sync?></td>
                                </tr>
                                            </table>
        </div>
    </div>
</div>