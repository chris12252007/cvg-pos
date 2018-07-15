<div class="col-lg-12">
    <div class="metronicUpdate">
        <header>
            <span><i class="icomoon-icon-pencil-2"></i>Update - PosPaymentDetails</span>
            <?php print CHtml::link('<i class="brocco-icon-plus"></i>',$this->createUrl('PosPaymentDetails/create'), array('class' => 'btn-back', 'data-tooltip' => 'create')); ?>
            <?php print CHtml::link('View/Search',$this->createUrl('PosPaymentDetails/admin'), array('class' => 'btn-back')); ?>
        </header>
        <?php echo $this->renderPartial('_formUpdate', array('model'=>$model)); ?>
    </div>
</div>