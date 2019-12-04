<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@app/web/libs/bootstrap';
    public $sourcePath = '@app/web/libs/bootstrap'; 
    public $baseUrl = '@web';
    public $css = [
        'libs/font-awesome/css/fontawesome-all.css',
        '/libs/ionicons/css/ionicons.min.css',
        '/css/main.css',
        '/css/style.css',
        '/css/reposive.css'
    ];
    public $js = [
        '/libs/TweenMax.min.js',
        '/js/main.js',
        '/js/main-ski.js',
        '/js/index.js',
        '/js/jquery.shorten.1.0.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}