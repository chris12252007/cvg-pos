<div class="col-lg-12">
    <div class="metronicView">
        <header>
            <span><i class="minia-icon-search"></i>View - PosTransactions</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>',$this->createUrl('PosTransactions/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search', $this->createUrl('PosTransactions/admin'), array('class' => 'btn-back', 'data-tooltip' => 'manage')); ?>
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
                            trans_date:
                            <strong> <?php echo $model->trans_date?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            ref_no:
                            <strong> <?php echo $model->ref_no?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            cust_id:
                            <strong> <?php echo $model->cust_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            branch_id:
                            <strong> <?php echo $model->branch_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            service_id:
                            <strong> <?php echo $model->service_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            inv_id:
                            <strong> <?php echo $model->inv_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            transaction_id:
                            <strong> <?php echo $model->transaction_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            transaction_name:
                            <strong> <?php echo $model->transaction_name?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            qty:
                            <strong> <?php echo $model->qty?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            price:
                            <strong> <?php echo $model->price?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            amount_net:
                            <strong> <?php echo $model->amount_net?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            balance:
                            <strong> <?php echo $model->balance?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            user_id:
                            <strong> <?php echo $model->user_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            is_fully_paid:
                            <strong> <?php echo $model->is_fully_paid?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            is_inventory:
                            <strong> <?php echo $model->is_inventory?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            remarks:
                            <strong> <?php echo $model->remarks?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            is_deleted:
                            <strong> <?php echo $model->is_deleted?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            deleted_by:
                            <strong> <?php echo $model->deleted_by?></strong>
                        </li> 
                            
            </ul>
        </div>
    </div>
</div>