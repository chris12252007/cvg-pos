<div class="col-lg-12">
    <div class="metronicCreate">
        <header>
            <span><i class="iconic-icon-plus-alt"></i>Create - Salaries</span>
            <?php print CHtml::link('View/Search',$this->createUrl('Salaries/admin'), array('class' => 'btn-back')); ?>
        </header>
        <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>