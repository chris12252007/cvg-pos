<article class="col-sm-12 col-md-12 col-lg-6"><br/>
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-4" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>Create - User</h2>
        </header>
        <div class="modal-content">
            <div class="smart-form" style="text-align: center;padding-bottom: 10px;">
                <?php print CHtml::link('<i class="fa fa-cubes">' . ' Manage</i>', $this->createUrl('users/admin'), array('class' => 'btn btn-primary btn-sm', 'style' => 'width: 150px;', 'id' => 'btnPayment')); ?>
            </div>&nbsp;
            <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
        </div>
    </div>
    <br/><br/>
</article>

