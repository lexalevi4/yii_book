<?php

return ["id" => "crmapp",
    'basePath' => realpath(__DIR__ . "/../"),
    'components' => [
        'user'=>[
            'identityClass'=>'app\models\user\UserRecord'
        ],
        'view'=>[
            'theme'=>[
                'class'=>'yii\base\Theme',
                'basePath'=>'@app/themes/snowy'

            ]
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'db' => require(__DIR__ . "/db.php"),
        'request' => [
            'cookieValidationKey' => 'qwerty123'
        ]
    ], 'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ]
    ],
    'extensions' => require(__DIR__ . "/../vendor/yiisoft/extensions.php")


];
