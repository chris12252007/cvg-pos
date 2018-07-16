<h1>
    <?php echo ucwords(Settings::get_ControllerID()) ?>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> <?php print Settings::get_ControllerID(); ?></a></li>
    <li class="active"><?php print Settings::get_ActionID(); ?></li>
</ol>
