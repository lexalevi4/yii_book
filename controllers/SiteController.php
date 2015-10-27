<?php
/**
 * Created by PhpStorm.
 * User: lexalevi4
 * Date: 25.10.2015
 * Time: 21:26
 */

namespace app\controllers;
use \yii\web\Controller;

class SiteController extends Controller{
    public function actionIndex(){
        return "Our CRM";
    }
}