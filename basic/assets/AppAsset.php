<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.css',
        'css/bootstrap.css',
        'css/colors.php?color=1ABC9C;',
        'css/dark.css',
        'css/font-icons.css',
        'css/magnific-popup.css',
        'css/responsive.css',
        'css/style.css',
        'css/fonts.css',
        'css/pet.css',
        'href="https://fonts.googleapis.com/css?family=Roboto'
    ];
    public $js = [
    'js/functions.js',
    'js/jquery.js',
    'js/plugins.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
