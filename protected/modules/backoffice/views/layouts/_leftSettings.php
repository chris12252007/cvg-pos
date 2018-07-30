<li class="treeview">
    <a href="#">
        <i class="fa fa-gears"></i> <span>Settings</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Profile', $this->createUrl('clients/update', array('id' => Settings::get_ClientID()))); ?></li>
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Loyalty', $this->createUrl('loyaltySettings/admin')); ?></li>
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Taxes', $this->createUrl('taxSettings/admin')); ?></li>
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Receipts', $this->createUrl('receiptSettings/admin')); ?></li>
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Branches', $this->createUrl('branches/admin')); ?></li>
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Billing and Subscriptions', $this->createUrl('subscriptions/admin')); ?></li>
    </ul>
</li>