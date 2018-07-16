<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php print Employees::sql_getFirstName(Settings::get_EmployeeID())?></p>

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
        <?php
        $model = Utilities::model_getByID(Users::model(), Settings::get_UserID());
        $role  = Utilities::model_getByID(Roles::model(), $model->role);

        if ($model->is_override_useraccess == Utilities::YES) {

            $menus = UserBasedAccess::model_getParentUserID(Utilities::NO, Settings::get_UserID(), Utilities::YES, $role->module_id);
        } else {

            $menus = RoleBasedAccess::model_getParentUserID(Utilities::NO, Settings::get_UserID(), Utilities::YES, $model->role);
        }
        ?>
       
        <ul class="sidebar-menu tree" data-widget="tree">
             <?php foreach ($menus as $menus): ?>
                <li class="treeview">
                    <?php if ($menus->menus->is_url == Utilities::YES): ?>
                        <?php if ($menus->menus->params): ?>
                            <?php $params = "?" . $menus->menus->params; ?>
                        <?php endif; ?>
                        <?php $params = $menus->menus->params; ?>
                        <?php print CHtml::link("<i class='" . $menus->menus->i_class . "'></i><span class='" . $menus->menus->span_class . "'>&nbsp;" . $menus->menus->name . "</span><i class='fa fa-angle-left pull-right'></i>", $this->createUrl($menus->menus->controller_name . "/" . $menus->menus->action_name), array('title' => $menus->menus->name, 'class' => $menus->menus->link_class, 'onclick' => 'setSessionData(this.href)'));
                        ?>
                    <?php else: ?>
                        <a href="#"><i class="<?php print $menus->menus->i_class; ?>"></i> <span class="<?php print $menus->menus->span_class; ?>"><?php print $menus->menus->name; ?></span> <i class="fa fa-angle-left pull-right"></i></a>             
                    <?php endif; ?>

                    <?php if ($menus->menus->is_parent == Utilities::YES): ?>      
                        <?php
                        if ($model->is_override_useraccess == Utilities::YES) {

                            $subMenu1 = UserBasedAccess::model_getChildrenByParentIDUserID($menus->menus->id, Settings::get_UserID(), Utilities::YES);
                        } else {
                            $subMenu1 = RoleBasedAccess::model_getChildrenByParentIDUserID($menus->menus->id, Settings::get_UserID(), Utilities::YES, $model->role);
                        }
                        ?>

                        <ul class="treeview-menu">                            
                            <?php foreach ($subMenu1 as $subMenu1): ?>
                                <?php if ($subMenu1->menus->params != ''): ?>
                                    <?php $paramsArr = explode("=", $subMenu1->menus->params); ?>
                                <?php else: ?>
                                    <?php $params = null; ?>
                                <?php endif; ?>
                                <?php if ($subMenu1->menus->is_url == Utilities::YES): ?>
                                    <?php $liClass = str_replace("'", "", $subMenu1->menus->li_class); ?>
                                    <?php $liClassArr = explode("::", $subMenu1->menus->li_class); ?>
                                    <?php $menuClass = $subMenu1->menus->li_class; ?>
                                    <li class="">
                                        <a href="#"><i class ="fa fa-user"></i><span class="menu-item-parent"><?php print $subMenu1->menus->name ?></span></a>

                                        <ul class="treeview-menu">        
                                            <li class="<?php print $subMenu1->menus->name ?>" >
                                                <?php print CHtml::link('<i class ="fa fa-circle-o"></i>Manage', $this->createUrl($subMenu1->menus->controller_name . '/' . $subMenu1->menus->action_name), array('onclick' => 'setSessionData(this.href)')); ?>
                                            </li>
                                        </ul>
                                    </li>
                                <?php else: ?>  
                                    <li class="treeview">
                                        <a href="#"><i class ="fa fa-user"></i><?php print $subMenu1->menus->name; ?></a>  

                                        <ul class="treeview-menu">      

                                            <?php
                                            if ($model->is_override_useraccess == Utilities::YES) {
                                                $subMenu2 = UserBasedAccess::model_getChildrenByParentIDUserID($subMenu1->menus->id, Settings::get_UserID(), Utilities::YES);
                                            } else {
                                                $subMenu2 = RoleBasedAccess::model_getChildrenByParentIDUserID($subMenu1->menus->id, Settings::get_UserID(), Utilities::YES, $model->role);
                                            }
                                            ?>
                                            <?php foreach ($subMenu2 as $subMenu2): ?>

                                                <?php if ($subMenu2->menus->params != ''): ?>
                                                    <?php $paramsArr = explode("=", $subMenu2->menus->params); ?>
                                                <?php else: ?>
                                                    <?php $paramsArr = null; ?>
                                                <?php endif; ?>

                                                <?php if ($subMenu2->menus->is_url == Utilities::YES): ?>
                                                    <?php $liClass = str_replace("'", "", $subMenu2->menus->li_class); ?>
                                                    <?php $liClassArr = explode("::", $subMenu2->menus->li_class); ?>
                                                    <?php $menuClass = $subMenu2->menus->li_class; ?>
                                                    <li class="">
                                                        <?php
                                                        if ($paramsArr[1] != "") {
                                                            print CHtml::link('<i class ="fa fa-circle-o"></i>' . $subMenu2->menus->name, $this->createUrl($subMenu2->menus->controller_name . '/' . $subMenu2->menus->action_name, array($paramsArr[0] => ($paramsArr != NULL) ? $paramsArr[1] : "")), array('onclick' => 'setSessionData(this.href)'));
                                                        } else {
                                                            print CHtml::link('<i class ="fa fa-circle-o"></i>' . $subMenu2->menus->name, $this->createUrl($subMenu2->menus->controller_name . '/' . $subMenu2->menus->action_name), array('onclick' => 'setSessionData(this.href)'));
                                                        }
                                                        ?>
                                                    </li>  
                                                <?php else: ?>
                                                    <li class="treeview">
                                                        <a href="#"><?php print $subMenu2->menus->name; ?></a>  

                                                        <ul class="treeview-menu">  
                                                            <?php
                                                            if ($model->is_override_useraccess == Utilities::YES) {
                                                                $subMenu3 = UserBasedAccess::model_getChildrenByParentIDUserID($subMenu2->menus->id, Settings::get_UserID(), Utilities::YES);
                                                            } else {
                                                                $subMenu3 = RoleBasedAccess::model_getChildrenByParentIDUserID($subMenu2->menus->id, Settings::get_UserID(), Utilities::YES, $model->role);
                                                            }
                                                            ?>
                                                            <?php foreach ($subMenu3 as $subMenu3): ?>
                                                                <?php if ($subMenu3->menus->params != ''): ?>
                                                                    <?php $params2Arr = explode("=", $subMenu3->menus->params); ?>
                                                                <?php else: ?>
                                                                    <?php $params2Arr = null; ?>
                                                                <?php endif; ?>

                                                                <li class="">
                                                                    <?php
                                                                    if ($paramsArr[1] != "") {
                                                                        print CHtml::link('<i class ="fa fa-circle-o"></i>' . $subMenu3->menus->name, $this->createUrl($subMenu3->menus->controller_name . '/' . $subMenu3->menus->action_name, array($params2Arr[0] => ($params2Arr != NULL) ? $params2Arr[1] : "")), array('onclick' => 'setSessionData(this.href)'));
                                                                    } else {
                                                                        print CHtml::link('<i class ="fa fa-circle-o"></i>' . $subMenu3->menus->name, $this->createUrl($subMenu3->menus->controller_name . '/' . $subMenu3->menus->action_name), array('onclick' => 'setSessionData(this.href)'));
                                                                    }
                                                                    ?>
                                                                    <?php // print CHtml::link('<i class ="minia-icon-file-add"></i>' . $subMenu3->menus->name, $this->createUrl($subMenu3->menus->controller_name . '/' . $subMenu3->menus->action_name, array($params2Arr[0] => ($params2Arr[1]) ? $params2Arr[1] : "")), array('onclick' => 'setSessionData(this.href)')); ?>
                                                                </li>  
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul> 
                    <?php endif; ?>
                </li>
            </ul>
            <?php endforeach;?>
    </section>
    <!-- /.sidebar -->
</aside>

<script>
    $(document).ready(function () {
        var defaultHref = 'http://localhost:8080/elsts/index.php?r=dealer/default/index';
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
            url: '?r=dealer/settings/setSessionData',
            data: 'fieldID=' + 'url' + '&value=' + loc + '&controllerID=' + 'Settings',
            success: function (data) {
            }
        });
    }

    function retrieveSessionDataUrl() {
        var result = "";
        $.ajax({
            type: 'POST',
            url: '?r=dealer/settings/retrieveSessionDataUrl',
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
