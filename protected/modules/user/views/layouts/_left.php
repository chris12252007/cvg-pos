<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php print Settings::get_baseUrl(); ?>/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php print Settings::get_Username()?></p>

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

        if ($model->is_override_useraccess == Utilities::YES) {

            $menus = UserBasedAccess::model_getParentUserID(Utilities::NO, Settings::get_UserID(), Utilities::YES);
        } else {

            $menus = RoleBasedAccess::model_getParentUserID(Utilities::NO, Settings::get_UserID(), Utilities::YES, $model->role);
        }
        ?>
        <?php
        foreach ($menus as $menus):
            ?>
            <ul class="sidebar-menu">
                <li>
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
                                    <li class="treeview">
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
                                                    <li class="treeview">
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

                                                                <li class="treeview">
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
            <?php
        endforeach;
        ?>
    </section>
    <!-- /.sidebar -->
</aside>