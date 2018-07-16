<div class="col-lg-12">
    <div class="metronicView">
        <header>
            <span><i class="minia-icon-search"></i>View - RawData</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>',$this->createUrl('RawData/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search', $this->createUrl('RawData/admin'), array('class' => 'btn-back', 'data-tooltip' => 'manage')); ?>
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
                            branch:
                            <strong> <?php echo $model->branch?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            job_order:
                            <strong> <?php echo $model->job_order?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            customer_name:
                            <strong> <?php echo $model->customer_name?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            wdf:
                            <strong> <?php echo $model->wdf?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            wdp:
                            <strong> <?php echo $model->wdp?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            hand_wash:
                            <strong> <?php echo $model->hand_wash?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            dry_clean:
                            <strong> <?php echo $model->dry_clean?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            press_only:
                            <strong> <?php echo $model->press_only?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            total_volume:
                            <strong> <?php echo $model->total_volume?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            revenue_wdf:
                            <strong> <?php echo $model->revenue_wdf?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            revenue_wdp:
                            <strong> <?php echo $model->revenue_wdp?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            revenue_hand_wash:
                            <strong> <?php echo $model->revenue_hand_wash?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            revenue_dry_clean:
                            <strong> <?php echo $model->revenue_dry_clean?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            revenue_press_only:
                            <strong> <?php echo $model->revenue_press_only?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            total_revenue:
                            <strong> <?php echo $model->total_revenue?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            payments:
                            <strong> <?php echo $model->payments?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            accounts_receivable:
                            <strong> <?php echo $model->accounts_receivable?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            rent:
                            <strong> <?php echo $model->rent?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            salaries:
                            <strong> <?php echo $model->salaries?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            electricity:
                            <strong> <?php echo $model->electricity?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            water:
                            <strong> <?php echo $model->water?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            supplies:
                            <strong> <?php echo $model->supplies?></strong>
                        </li> 
                        
                        <li>
                            <span class='icon12 typ-icon-arrow-right'></span>
                            total_expenses:
                            <strong> <?php echo $model->total_expenses?></strong>
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