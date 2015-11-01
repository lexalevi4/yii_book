<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 28.10.2015
 * Time: 16:57
 */

namespace app\models\user;

use yii\base\Model;

class LoginForm extends Model
{

    public $username;
    public $password;
    public $rememberMe;
    public $user;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword']
        ];
    }

    public function validatePassword($attributeName)
    {
        if ($this->hasErrors()) {
            return;
        }
        $user = $this->getUser($this->username);
        if (!($user && $this->isCorrectHash($attributeName, $user->password))) {
            $this->addError('password', 'incorrect pass or login');
        }
    }

    private function fetchUser($username)
    {
        return UserRecord::findOne(compact('username'));
    }

    private function getUser($username)
    {
        if (!$this->user) {
            $this->user = $this->fetchUser($username);
        }

        return $this->user;
    }

    private function isCorrectHash($planText, $hash)
    {
        return \Yii::$app->security->validatePassword($planText, $hash);
    }

    public function login()
    {
        if (!$this->validate()) {
            return false;
        }
        $user = $this->getUser($this->username);
        if (!$user) {
            return false;
        }

        return \Yii::$app->user->login($user,
            $this->rememberMe ? 3600 * 24 * 30 : 0);

    }

}