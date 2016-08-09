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
 *
 * @since
 *
 */
class AceAdminJqgridAsset extends AssetBundle
{

    public $sourcePath = '@vendor/bright-tech/yii2-ace-admin-theme/src/assets';

    public $css = [
        'css/ui.jqgrid.css',
        'css/ace.jqgrid.css'
    ];

    public $js = [
        'js/jqGrid/jquery.jqGrid.js',
        'js/jqGrid/i18n/grid.locale-cn.js'
    ];

    public $depends = [
        'bright\theme\yii2\aceadmin\AceAdminAsset'
    ];
}
