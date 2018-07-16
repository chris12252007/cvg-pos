<?php

class DefaultController extends DealerController {

    public function actionIndex()
    {
        Utilities::setMenuActive_Siteadmin(Settings::get_ControllerID(), Settings::get_ActionID());
        $this->render('index');
    }

}
