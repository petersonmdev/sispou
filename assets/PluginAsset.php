<?php
namespace app\assets;

use yii\web\AssetBundle;
class PluginAsset extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $sourcePath = '@app/vendor/almasaeed2010/adminlte/';
    public $js = [
        'bower_components/moment/moment.js',
        'bower_components/fullcalendar/dist/fullcalendar.min.js',
    ];
    public $css = [
        'bower_components/fullcalendar/dist/fullcalendar.min.css',
        'bower_components/fullcalendar/dist/fullcalendar.print.min.css'
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
