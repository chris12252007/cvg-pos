<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php print Employees::sql_getFirstName(Settings::get_EmployeeID()) ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->  
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <?php $this->renderPartial('/layouts/_leftReports'); ?>
            <?php $this->renderPartial('/layouts/_leftInventories'); ?>
            <?php $this->renderPartial('/layouts/_leftEmployees'); ?>
            <?php $this->renderPartial('/layouts/_leftCustomers'); ?>
            <?php $this->renderPartial('/layouts/_leftSettings'); ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<script>
    $(document).ready(function () {
        var defaultHref = '<?php print Settings::get_baseUrl() . '/index.php?r=' . Settings::get_ModuleID() . '/default/index'; ?>';
        var sessionHref = retrieveSessionDataUrl();

        loc = (sessionHref == '') ? defaultHref : sessionHref;
        newloc = retrieveCurrentURL()
        $('ul a').filter(function () {
            if (loc == newloc) {
                return this.href == newloc;
            } else {
                if (this.href == loc) {
                    return this.href == loc;
                } else {
                    return this.href == newloc;
                }
            }
        }).parent().addClass('active');

        var countActive = $('li.active').length;

        if (countActive > 1) {
            $('ul a').filter(function () {
                return this.href == loc;
            }).parent().removeClass('active');
            $('ul a').filter(function () {
                return this.href == newloc;
            }).parent().addClass('active');
        }
    });

    function setSessionData(val) {
        loc = escape(val);
        $.ajax({
            type: 'GET',
            url: '?r=siteadmin/settings/setSessionData',
            data: 'fieldID=' + 'url' + '&value=' + loc + '&controllerID=' + 'Settings',
            success: function (data) {
            }
        });
    }

    function retrieveSessionDataUrl() {
        var result = "";
        $.ajax({
            type: 'POST',
            url: '?r=siteadmin/settings/retrieveSessionDataUrl',
            dataType: "html",
            async: false,
            success: function (data) {
                result = data;
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("get session failed " + errorThrown);
            }
        });

        return result;
    }

    function retrieveCurrentURL() {
        return '<?php print $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>';
    }
</script>
