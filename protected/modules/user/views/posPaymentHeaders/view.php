<div class="col-lg-12">
    <div class="metronicView">
        <header>
            <span><i class="minia-icon-search"></i>View - PosPaymentHeaders</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>', $this->createUrl('PosPaymentHeaders/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search', $this->createUrl('PosPaymentHeaders/admin'), array('class' => 'btn-back', 'data-tooltip' => 'manage')); ?>
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
                    date:
                    <strong> <?php echo $model->date ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    payment_type_id:
                    <strong> <?php echo $model->payment_type_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    ref_no:
                    <strong> <?php echo $model->ref_no ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    or_no:
                    <strong> <?php echo $model->or_no ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    branch_id:
                    <strong> <?php echo $model->branch_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    client_id:
                    <strong> <?php echo $model->client_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    employee_id:
                    <strong> <?php echo $model->employee_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    customer_id:
                    <strong> <?php echo $model->customer_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    quantity:
                    <strong> <?php echo $model->quantity ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    payable:
                    <strong> <?php echo $model->payable ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    amount:
                    <strong> <?php echo $model->amount ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    discount:
                    <strong> <?php echo $model->discount ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    tax:
                    <strong> <?php echo $model->tax ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    amount_net:
                    <strong> <?php echo $model->amount_net ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    is_email_sent:
                    <strong> <?php echo $model->is_email_sent ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    is_sync:
                    <strong> <?php echo $model->is_sync ?></strong>
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