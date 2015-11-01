<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 28.10.2015
 * Time: 13:29
 */

namespace app\assets;

use yii\web\AssetBundle;

class ApplicationUiAssetsBundle extends AssetBundle
{
    public $sourcePath = '@app/assets/ui';
    public $css = [
        'css/main.css'
    ];

    public $js = [
        'js/main.js'
    ];
    public $depends = [
        'yii\\bootstrap\\BootstrapAsset',
        'yii\\web\\YiiAsset'
    ];

}