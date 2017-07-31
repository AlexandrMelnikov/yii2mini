<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class shopAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
       // 'cssShop/bootstrap.min.css',
        'cssShop/font-awesome.min.css',
        'cssShop/prettyPhoto.css',
        'cssShop/price-range.css',
        'cssShop/animate.css',
        'cssShop/main.css',
        'cssShop/responsive.css',
            ];
    public $js = [
       // 'jsShop/jquery.js',
       // 'jsShop/bootstrap.min.js',
        'jsShop/jquery.scrollUp.min.js',
        'jsShop/price-range.js',
        'jsShop/jquery.prettyPhoto.js',
        'jsShop/main.js',
            ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',

    ];
}
