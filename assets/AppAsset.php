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
        'css/sispou-configuracoes.css',

        'css/sispou-register.css',
        'css/sispou-login.css',
        'css/sispou-alterar-senha.css',

        'css/sispou-inicio.css',

        'css/sispou-empresa.css',
        'css/sispou-agente.css',
        'css/sispou-agente-cadastro.css',
        
        'css/sispou-gestao-hospede.css',
        'css/sispou-estadia.css',

        'css/sispou-caixa.css',
        'css/sispou-contas-pagar.css',
        'css/sispou-contas-receber.css',

        'libs/css/animate.css',
        'libs/fonts/font-sispou/css/flaticon.css',
        'libs/fonts/font-awesome/css/font-awesome.css',
        'https://use.fontawesome.com/releases/v5.6.3/css/all.css',
    ];
    public $js = [
        'js/inicio.js',
        'js/monitoramento.js'
    ];
    public $depends = [
    ];
}
