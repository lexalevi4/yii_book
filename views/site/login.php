<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 28.10.2015
 * Time: 16:39
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['id'=>'login-form']);
echo $form->field($model,'username');
echo $form->field($model,'password')->passwordInput();
echo $form->field($model,'rememberMe')->checkbox();
echo Html::submitButton(
    'Login',
    ['class'=>'btn btn-primary', 'name'=>'login-button']
);
ActiveForm::end();
