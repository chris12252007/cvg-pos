<li class="treeview">
    <a href="#">
        <i class="fa fa-print"></i> <span>Reports</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Sales Summary', $this->createUrl('default/index')); ?></li>
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Receipts', $this->createUrl('posPaymentHeaders/adminReports')); ?></li>
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Discounts', $this->createUrl('discounts/admin')); ?></li>
        <li><?php print CHtml::link('<i class="fa fa-circle-o"></i>Tax', $this->createUrl('taxSettings/admin')); ?></li>
    </ul>
</li>