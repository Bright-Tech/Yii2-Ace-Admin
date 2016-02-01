<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace bright\theme\yii2\aceadmin;

use yii\web\AssetBundle;

/**
 *
 * @author
 * @since
 */
class AceAdminAsset extends AssetBundle
{

    public $sourcePath = '@vendor/bright-tech/yii2-ace-admin-theme/assets';
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    
    
    public $js = [
        'js/fuelux/fuelux.wizard.js',
        'js/ace/elements.wizard.js',
    ];

    public $depends = [
        'bright\theme\yii2\aceadmin\AceAdminAsset'
    ];
}
