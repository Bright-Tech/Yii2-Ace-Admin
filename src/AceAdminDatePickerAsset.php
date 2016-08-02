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
 *
 * @since
 *
 */
class AceAdminDatePickerAsset extends AssetBundle
{

    public $sourcePath = '@vendor/bright-tech/yii2-ace-admin-theme/src/assets';

    public $css = [
        'css/bootstrap-datepicker3.css',
        'css/bootstrap-timepicker.css',
        'css/daterangepicker.css',
        'css/bootstrap-datetimepicker.css'
    ];

    public $js = [
        'js/date-time/bootstrap-datepicker.js',
        'js/date-time/bootstrap-timepicker.js',
        'js/date-time/moment.js',
        'js/date-time/daterangepicker.js',
        'js/date-time/bootstrap-datetimepicker.js'
    ];

    public $depends = [
        'bright\theme\yii2\aceadmin\AceAdminAsset'
    ];
}
