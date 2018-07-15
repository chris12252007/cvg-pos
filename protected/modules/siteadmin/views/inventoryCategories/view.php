<div class="col-lg-12">
    <div class="metronicView">
        <header>
            <span><i class="minia-icon-search"></i>View - InventoryCategories</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>',$this->createUrl('InventoryCategories/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search', $this->createUrl('InventoryCategories/admin'), array('class' => 'btn-back', 'data-tooltip' => 'manage')); ?>
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
                            name:
                            <strong> <?php echo $model->name?></strong>
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