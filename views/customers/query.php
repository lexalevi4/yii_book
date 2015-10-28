<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 18:21
 */

use \yii\helpers\Html;

echo Html::beginForm(['/customers'],'get');
echo Html::label('Phone number to search:', 'phone_number');
echo Html::textInput('phone_number');
echo Html::submitButton('Search');
echo Html::endForm();