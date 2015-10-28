<?php

/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 16:22
 */

use \yii\widgets\ActiveForm;
use \yii\helpers\Html;
use \app\models\customer\CustomerRecord;
use \app\models\customer\PhoneRecord;
use \yii\web\View;



$form = ActiveForm::begin([
    'id'=>'add-customer-form'
]);

echo $form->errorSummary([$customer, $phone]);

echo $form->field($customer,'name');
echo $form->field($customer,'birth_date');
echo $form->field($customer,'notes');

echo $form->field($phone,'number');

echo Html::submitButton('Submit', ['class'=>'btn btn-primary']);
ActiveForm::end();

