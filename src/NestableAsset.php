<?php
/**
 * @author Sam Xiao
 */
namespace bright_tech\yii2theme\aceadmin;

use yii\web\AssetBundle;

/**
 *
 * @author
 * @since
 */
class NestableAsset extends AssetBundle
{

    public $sourcePath = '@vendor/bright-tech/yii2-ace-admin-theme/src/assets';
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    
    public $css = [
    ];
    
    public $js = [
        'js/jquery.nestable.js',
        'js/default/bright-nestablelist.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
