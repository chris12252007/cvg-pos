<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel {

    public $username;
    public $password;
    public $rememberMe;
    private $_identity;
    private $isLoginSuccess;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
            // password needs to be authenticated
            array('password', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'rememberMe' => 'Remember me next time',
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params)
    {

        if (!$this->hasErrors()) {
            $this->authenticateUser();

            if ($this->isLoginSuccess == Utilities::NO)
                $this->addError('password', 'Incorrect username or password.');
        }
    }

    public function authenticateStudents($attribute, $params)
    {

        if (!$this->hasErrors()) {
            $this->authenticateStudentAccount();

            if ($this->isLoginSuccess == Utilities::NO)
                $this->addError('password', 'Incorrect username or password.');
        }
    }

    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function login()
    {
        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else
            return false;
    }

    public function authenticateUser()
    {
        if (!$this->hasErrors()) {  // we only want to authenticate when no input errors

            $identity = new UserIdentity($this->username, $this->password);
            $identity->checkAccount();

            switch ($identity->errorCode) {
                case UserIdentity::ERROR_NO:
                    $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
                    Yii::app()->user->login($identity, $duration);
                    $this->isLoginSuccess = Utilities::YES;
                    break;
                default:
                    $this->isLoginSuccess = Utilities::NO;
                    break;
            }
        }
    }

    public function authenticateStudentAccount()
    {
        if (!$this->hasErrors()) {  // we only want to authenticate when no input errors

            $identity = new UserIdentity($this->username, $this->password);
            $identity->checkAccountStudents();

            switch ($identity->errorCode) {
                case UserIdentity::ERROR_NO:
                    $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
                    Yii::app()->user->login($identity, $duration);
                    $this->isLoginSuccess = Utilities::YES;
                    break;
                default:
                    $this->isLoginSuccess = Utilities::NO;
                    break;
            }
        }
    }

}
