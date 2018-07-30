<?php

class PosPaymentHeadersController extends SiteadminController {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */

    /**
     * @var CActiveRecord the currently loaded data model instance.
     */
    private $_model;

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('adminReports'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Manages all models.
     */
    public function actionAdminReports()
    {
        unset($_SESSION[$_SESSION['lastSession']]);
        Utilities::setMenuActive_Siteadmin(Settings::get_ControllerID(), 'PosPaymentHeaders::tbl()', Settings::get_ActionID());
        $model = new PosPaymentHeaders('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['PosPaymentHeaders']))
            $model->attributes = $_GET['PosPaymentHeaders'];
        $model->client_id = Settings::get_ClientID();
        $model->is_deleted = Utilities::NO;

        $this->render('adminReports', array(
            'model' => $model,
        ));
    }

}
