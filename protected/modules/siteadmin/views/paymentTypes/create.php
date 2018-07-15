<div class="col-lg-12">
    <div class="metronicCreate">
        <header>
            <span><i class="iconic-icon-plus-alt"></i>Create - PaymentTypes</span>
            <?php print CHtml::link('View/Search',$this->createUrl('PaymentTypes/admin'), array('class' => 'btn-back')); ?>
        </header>
        <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>