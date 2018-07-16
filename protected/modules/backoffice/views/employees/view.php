<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">View</h3>
            <?php echo CHtml::link('<i class="fa fa-plus"></i>', $this->createUrl('employees/create'), array('class' => 'btn btn-xs btn-success pull-right', 'data-toggle' => 'tooltip', 'title' => 'Create')); ?>
            <?php echo CHtml::link('<i class="fa fa-arrow-left"></i>', $this->createUrl('employees/admin'), array('class' => 'btn btn-xs btn-primary pull-right', 'data-toggle' => 'tooltip', 'title' => 'Back', 'style' => 'margin-right: 5px;')); ?>
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
                    <th>employee_no</th>
                    <td><?php print $model->employee_no ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?php print $model->fullName ?></td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td><?php print $model->mobile ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php print $model->phone ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php print $model->email ?></td>
                </tr>
                <tr>
                    <th>Birthdate</th>
                    <td><?php print $model->birthdate ?></td>
                </tr>
                <tr>
                    <th>Civil Status</th>
                    <td><?php print $model->civil_status_id ?></td>
                </tr>
                <tr>
                    <th>Address1</th>
                    <td><?php print $model->address1 ?></td>
                </tr>
                <tr>
                    <th>Address2</th>
                    <td><?php print $model->address2 ?></td>
                </tr>
                <tr>
                    <th>Region</th>
                    <td><?php print $model->region_id ?></td>
                </tr>
                <tr>
                    <th>Province</th>
                    <td><?php print $model->province_id ?></td>
                </tr>
                <tr>
                    <th>Municipality</th>
                    <td><?php print $model->municipality_id ?></td>
                </tr>
                <tr>
                    <th>Barangay</th>
                    <td><?php print $model->barangay_id ?></td>
                </tr>
                <tr>
                    <th>Office</th>
                    <td><?php print $model->office_id ?></td>
                </tr>
                <tr>
                    <th>Citizenship</th>
                    <td><?php print $model->citizenship_id ?></td>
                </tr>
                <tr>
                    <th>Branch</th>
                    <td><?php print $model->branch_id ?></td>
                </tr>
                <tr>
                    <th>Occupation</th>
                    <td><?php print $model->occupation_id ?></td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td><?php print $model->department_id ?></td>
                </tr>
                <tr>
                    <th>Manager</th>
                    <td><?php print $model->manager_id ?></td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td><?php print $model->location_id ?></td>
                </tr>
                <tr>
                    <th>Is Agent</th>
                    <td><?php print $model->isAgent ?></td>
                </tr>
                <tr>
                    <th>Is Active</th>
                    <td><?php print $model->isActive ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>