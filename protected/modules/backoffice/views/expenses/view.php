<div class="col-lg-12">
    <div class="metronicView">
        <header>
            <span><i class="minia-icon-search"></i>View - Expenses</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>',$this->createUrl('Expenses/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search', $this->createUrl('Expenses/admin'), array('class' => 'btn-back', 'data-tooltip' => 'manage')); ?>
             </header>
        <div class ="row">
           <ul class = "col-lg-6 unstyled">
                
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            id:
                            <strong> <?php echo $model->id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            created_at:
                            <strong> <?php echo $model->created_at?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            updated_at:
                            <strong> <?php echo $model->updated_at?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            date:
                            <strong> <?php echo $model->date?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            ref_no:
                            <strong> <?php echo $model->ref_no?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            branch_id:
                            <strong> <?php echo $model->branch_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            client_id:
                            <strong> <?php echo $model->client_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            expenses_type_id:
                            <strong> <?php echo $model->expenses_type_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            title:
                            <strong> <?php echo $model->title?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            amount:
                            <strong> <?php echo $model->amount?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            remarks:
                            <strong> <?php echo $model->remarks?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            is_sync:
                            <strong> <?php echo $model->is_sync?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            is_deleted:
                            <strong> <?php echo $model->is_deleted?></strong>
                        </li> 
                            
            </ul>
        </div>
    </div>
</div>