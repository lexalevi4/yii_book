<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 28.10.2015
 * Time: 13:44
 */

namespace app\assets;


use yii\web\AssetBundle;

class SnowAssetsBundle extends AssetBundle
{

    public $sourcePath='@app/assets/snow';
    public $css=['snow.css'];
    public $depends = [
        'app\\assets\\ApplicationUiAssetsBundle'
    ];


}