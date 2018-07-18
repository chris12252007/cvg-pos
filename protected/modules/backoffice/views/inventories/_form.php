<?php print CHtml::beginForm('', 'POST', array('role' => 'form')); ?>
<div class="box-body">
    <div class="form-group" style="text-align: center;">
        <?php print CHtml::activeLabelEx($model, 'Upload Image*'); ?>
        <div class="image-upload">
            <div class ="square-img">
                <?php
                print (!empty($_SESSION[Inventories::tbl()]['filename'])) ? CHtml::image(Settings::get_baseUrl() . "/" . $_SESSION[Inventories::tbl()]['path'] . "/" . $_SESSION[Inventories::tbl()]['filename'], '', array('id' => 'image-upload')) : CHtml::image(Settings::get_baseUrl() . "/images/noimage.png", '', array('id' => 'image-upload'));
                ?>
                <div id="btnUpload" class="<?php print $visibility ?>">
                    <?php
                    $this->widget('ext.EAjaxUpload.EAjaxUpload', array(
                        'id' => 'uploadFile',
                        'config' => array(
                            'action' => $this->createUrl('inventories/addPhotoSubmit'),
                            'allowedExtensions' => array("jpg", "jpeg", "png"), //array("jpg","jpeg","gif","exe","mov" and etc...
                            'sizeLimit' => 20 * 1024 * 1024, // maximum file size in bytes
                            'onComplete' => "js:function(id, fileName, responseJSON){ "
                            . " var url = '/' + location.pathname.split('/')[1] + '/'; "
                            . " pathPhoto = '/images/inventories/tmp/' + responseJSON.filename;"
                            . " $('#image-upload').attr('src', url + pathPhoto);"
                            . " }",
                        )
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'branch_id'); ?>
        <?php print CHtml::activeDropDownList($model, 'branch_id', CHtml::listData(Branches::model_getAllData_byDeleted(Utilities::NO), 'id', 'name'), array('class' => 'form-control', 'prompt' => 'Choose One')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'client_id'); ?>
        <?php print CHtml::activeDropDownList($model, 'client_id', CHtml::listData(Clients::model_getAllData_byDeleted(Utilities::NO), 'id', 'fullName'), array('class' => 'form-control', 'prompt' => 'Choose One')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'name'); ?>
        <?php print CHtml::activeTextField($model, 'name', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'bar_code'); ?>
        <?php print CHtml::activeTextField($model, 'bar_code', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'category_id'); ?>
        <?php print CHtml::activeTextField($model, 'category_id', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'price'); ?>
        <?php print CHtml::activeTextField($model, 'price', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'cost'); ?>
        <?php print CHtml::activeTextField($model, 'cost', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'tax'); ?>
        <?php print CHtml::activeTextField($model, 'tax', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'margin'); ?>
        <?php print CHtml::activeTextField($model, 'margin', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'qty_stock'); ?>
        <?php print CHtml::activeTextField($model, 'qty_stock', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
    <div class="form-group">
        <?php print CHtml::activeLabelEx($model, 'qty_reorder'); ?>
        <?php print CHtml::activeTextField($model, 'qty_reorder', array('class' => 'form-control', 'placeholder' => '')); ?>
    </div>
</div>

<div class="box-footer">
    <?php print CHtml::link('Back', $this->createUrl('inventories/admin'), array('class' => 'btn btn-default')); ?>
    <?php print CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary pull-right')); ?>
</div>
<?php print CHtml::endForm(); ?>