<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 27.10.2015
 * Time: 14:37
 */

return ["id"=>"crmapp-console",
    'basePath'=>realpath(__DIR__."/../"),
    'components'=>[
        'db'=>require (__DIR__."/db.php")
    ]];


