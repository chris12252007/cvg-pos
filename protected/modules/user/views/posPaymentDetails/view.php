<div class="col-lg-12">
    <div class="metronicView">
        <header>
            <span><i class="minia-icon-search"></i>View - PosPaymentDetails</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>',$this->createUrl('PosPaymentDetails/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search', $this->createUrl('PosPaymentDetails/admin'), array('class' => 'btn-back', 'data-tooltip' => 'manage')); ?>
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
                            header_id:
                            <strong> <?php echo $model->header_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            transaction_id:
                            <strong> <?php echo $model->transaction_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            inventory_id:
                            <strong> <?php echo $model->inventory_id?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            price:
                            <strong> <?php echo $model->price?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            amount_paid:
                            <strong> <?php echo $model->amount_paid?></strong>
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