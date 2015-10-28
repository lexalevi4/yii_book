<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 18:15
 */

echo \yii\widgets\DetailView::widget([
    'model'=>$model,
    'attributes'=>[
        ['attribute'=>'name'],
        ['attribute'=>'birth_date', 'value'=>$model->birth_date->format('Y-m-d')],
        'notes:text',
        ['label'=>'Phone Number', 'attribute'=>'phones.0.number']
    ]
]);