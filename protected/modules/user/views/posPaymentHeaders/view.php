<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">View</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>', $this->createUrl('posPaymentHeaders/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>', $this->createUrl('posPaymentHeaders/admin'), array('class' => 'btn btn-xs btn-primary pull-right', 'data-toggle' => 'tooltip', 'title' => 'Back', 'style' => 'margin-right: 5px;')); ?>
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
                    <th>date</th>
                    <td><?php print $model->date ?></td>
                </tr>
                <tr>
                    <th>payment_type_id</th>
                    <td><?php print $model->payment_type_id ?></td>
                </tr>
                <tr>
                    <th>ref_no</th>
                    <td><?php print $model->ref_no ?></td>
                </tr>
                <tr>
                    <th>or_no</th>
                    <td><?php print $model->or_no ?></td>
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
                    <th>employee_id</th>
                    <td><?php print $model->employee_id ?></td>
                </tr>
                <tr>
                    <th>customer_id</th>
                    <td><?php print $model->customer_id ?></td>
                </tr>
                <tr>
                    <th>quantity</th>
                    <td><?php print $model->quantity ?></td>
                </tr>
                <tr>
                    <th>payable</th>
                    <td><?php print $model->payable ?></td>
                </tr>
                <tr>
                    <th>amount</th>
                    <td><?php print $model->amount ?></td>
                </tr>
                <tr>
                    <th>discount</th>
                    <td><?php print $model->discount ?></td>
                </tr>
                <tr>
                    <th>tax</th>
                    <td><?php print $model->tax ?></td>
                </tr>
                <tr>
                    <th>amount_net</th>
                    <td><?php print $model->amount_net ?></td>
                </tr>
                <tr>
                    <th>is_email_sent</th>
                    <td><?php print $model->is_email_sent ?></td>
                </tr>
                <tr>
                    <th>is_sync</th>
                    <td><?php print $model->is_sync ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>