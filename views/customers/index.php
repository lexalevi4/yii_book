<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 18:12
 */

echo \yii\widgets\ListView::widget(
    [
        'options'=>[
            'class'=>'list-view',
            'id'=>'search_results'
        ],
        'itemView'=>'_customer',
        'dataProvider'=>$records
    ]
);