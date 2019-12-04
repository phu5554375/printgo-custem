<?php

namespace frontend\assets;
use yii\web\AssetBundle;

class LangDinhAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/langdinh/assets/libs/ionicons/css/ionicons.min.css',
        '/langdinh/assets/libs/animate.css',
        '/langdinh/assets/css/style.css'
    ];
    public $js = [
        '/langdinh/assets/js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}