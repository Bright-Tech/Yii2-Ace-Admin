<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace bright_tech\yii2theme\aceadmin;

use yii\web\AssetBundle;

/**
 *
 * @author
 * @since
 */
class AceAdminWizardAsset extends AssetBundle
{

    public $sourcePath = '@vendor/bright-tech/yii2-ace-admin-theme/src/assets';
    
    public $js = [
        'js/fuelux/fuelux.wizard.js',
        'js/ace/elements.wizard.js',
    ];

    public $depends = [
        'bright\theme\yii2\aceadmin\AceAdminAsset'
    ];
}
