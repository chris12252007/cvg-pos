<div class="col-lg-12">
    <div class="metronicView">
        <header>
            <span><i class="minia-icon-search"></i>View - Inventories</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>', $this->createUrl('Inventories/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search', $this->createUrl('Inventories/admin'), array('class' => 'btn-back', 'data-tooltip' => 'manage')); ?>
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
                    name:
                    <strong> <?php echo $model->name ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    bar_code:
                    <strong> <?php echo $model->bar_code ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    category_id:
                    <strong> <?php echo $model->category_id ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    price:
                    <strong> <?php echo $model->price ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    cost:
                    <strong> <?php echo $model->cost ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    tax:
                    <strong> <?php echo $model->tax ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    margin:
                    <strong> <?php echo $model->margin ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    qty_stock:
                    <strong> <?php echo $model->qty_stock ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    qty_reorder:
                    <strong> <?php echo $model->qty_reorder ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    file_path:
                    <strong> <?php echo $model->file_path ?></strong>
                </li> 

                <li>
                    <span class='icon12 typ-icon-arrow-right'></span>
                    file_pics:
                    <strong> <?php echo $model->file_pics ?></strong>
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