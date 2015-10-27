<?php
define('YII_DEBUG', true);
ini_set('display_errors', true);
require_once (__DIR__."/../vendor/yiisoft/yii2/Yii.php");



$config = require_once (__DIR__."/../config/web.php");
(new yii\web\Application($config))->run();