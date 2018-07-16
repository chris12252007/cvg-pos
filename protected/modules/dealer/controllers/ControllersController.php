<?php

class ControllersController extends DealerController {
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column2';

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
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('create', 'view', 'update', 'delete', 'admin'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     */
    public function actionView()
    {
        $this->render('view', array(
            'model' => $this->loadModel(),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Controllers;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Controllers'])) {
            $model->attributes = $_POST['Controllers'];
            $model->created_at = Settings::get_DateTime();
            $model->updated_at = Settings::get_DateTime();
            $model->is_deleted = Utilities::NO;
            if ($model->validate()) {
                $model->save();
                Utilities::set_Flash(Utilities::FLASH_SUCCESS, "New Controllers successfully created");
                $this->redirect(array('view', 'id' => $model->id));
            } else {
                Utilities::set_Flash(Utilities::FLASH_ERROR, Utilities::get_ModelErrors($model->errors));
                $this->gotoCreate();
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function gotoCreate()
    {
        $this->redirect($this->createUrl('controller/create'));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate()
    {
        $model = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Controllers'])) {
            $model->attributes = $_POST['Controllers'];
            $model->updated_at = Settings::get_DateTime();
            if ($model->validate()) {
                $model->save();
                Utilities::set_Flash(Utilities::FLASH_SUCCESS, 'Controllers Successfully Updated');
            } else {
                Utilities::set_Flash(Utilities::FLASH_ERROR, Utilities::get_ModelErrors($model->errors));
            }
            $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     */
    public function actionDelete()
    {
        $model = new Controllers();
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $model = Utilities::model_getByID($model, $_GET['id']);
            $model->is_deleted = Utilities::YES;
            $model->save();
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Controllers');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Controllers('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Controllers']))
            $model->attributes = $_GET['Controllers'];
        $model->is_deleted = Utilities::NO;

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     */
    public function loadModel()
    {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Controllers::model()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'controllers-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}