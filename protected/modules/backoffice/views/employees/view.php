<div class="col-lg-12">
    <div class="metronicView">
        <header>
            <span><i class="minia-icon-search"></i>View - Employees</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>', $this->createUrl('Employees/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search', $this->createUrl('Employees/admin'), array('class' => 'btn-back', 'data-tooltip' => 'manage')); ?>
        </header>
        <div class ="row">
            <ul class = "col-lg-6 unstyled">

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    id:
                    <strong> <?php echo $model->id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    created_at:
                    <strong> <?php echo $model->created_at ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    updated_at:
                    <strong> <?php echo $model->updated_at ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    employee_no:
                    <strong> <?php echo $model->employee_no ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    firstname:
                    <strong> <?php echo $model->firstname ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    middlename:
                    <strong> <?php echo $model->middlename ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    lastname:
                    <strong> <?php echo $model->lastname ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    mobile:
                    <strong> <?php echo $model->mobile ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    phone:
                    <strong> <?php echo $model->phone ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    email:
                    <strong> <?php echo $model->email ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    birthdate:
                    <strong> <?php echo $model->birthdate ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    civil_status_id:
                    <strong> <?php echo $model->civil_status_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    address1:
                    <strong> <?php echo $model->address1 ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    address2:
                    <strong> <?php echo $model->address2 ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    region_id:
                    <strong> <?php echo $model->region_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    province_id:
                    <strong> <?php echo $model->province_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    municipality_id:
                    <strong> <?php echo $model->municipality_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    barangay_id:
                    <strong> <?php echo $model->barangay_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    office_id:
                    <strong> <?php echo $model->office_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    citizenship_id:
                    <strong> <?php echo $model->citizenship_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    branch_id:
                    <strong> <?php echo $model->branch_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    contact_person_id:
                    <strong> <?php echo $model->contact_person_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    occupation_id:
                    <strong> <?php echo $model->occupation_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    department_id:
                    <strong> <?php echo $model->department_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    manager_id:
                    <strong> <?php echo $model->manager_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    location_id:
                    <strong> <?php echo $model->location_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    is_agent:
                    <strong> <?php echo $model->is_agent ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    is_active:
                    <strong> <?php echo $model->is_active ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    is_deleted:
                    <strong> <?php echo $model->is_deleted ?></strong>
                </li> 

            </ul>
        </div>
    </div>
</div>