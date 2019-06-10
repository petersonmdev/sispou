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
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@app/assets/sispou/';
    public $css = [
        'css/layout.css',
        'css/sispou-inicio.css',
        'libs/css/animate.css',
        'libs/fonts/font-sispou/css/flaticon.css',
        'libs/fonts/font-awesome/css/font-awesome.css',
        'https://use.fontawesome.com/releases/v5.6.3/css/all.css',
        // 'vendor/almasaeed2010/adminlte/bower_components/fullcalendar/dist\fullcalendar.min.css',
        // 'vendor/almasaeed2010/adminlte/bower_components/fullcalendar/dist\fullcalendar.print.min.css',
    ];
    public $js = [
        'js/layout.css',
        'js/inicio.js',

        // 'vendor/almasaeed2010/adminlte/bower_components/moment/momen/.js',
        // 'vendor/almasaeed2010/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
