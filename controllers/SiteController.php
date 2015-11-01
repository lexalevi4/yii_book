<?php
/**
 * Created by PhpStorm.
 * User: lexalevi4
 * Date: 25.10.2015
 * Time: 21:26
 */

namespace app\controllers;
use app\models\user\LoginForm;

use \yii\web\Controller;
use Yii;
//use \yii\web\

class SiteController extends Controller{

    public function actionIndex(){
        return $this->render('homepage');
    }

    public function actionTest(){
        return "Our CRMTest";
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', compact('model'));
    }


    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->goHome();

    }



}
