<div class="col-lg-12">
    <div class="metronicCreate">
        <header>
            <span><i class="iconic-icon-plus-alt"></i>Create - PosPaymentDetails</span>
            <?php print CHtml::link('View/Search', $this->createUrl('PosPaymentDetails/admin'), array('class' => 'btn-back')); ?>
        </header>
        <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
    </div>
</div>