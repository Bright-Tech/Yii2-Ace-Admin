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
class AceAdminAsset extends AssetBundle
{

    public $sourcePath = '@vendor/bright-tech/ace-admin/components';

    
    public $css = [
        'font-awesome/css/font-awesome.css',
        '_mod/jquery-ui.custom/jquery-ui.custom.css',
        'bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
        'bootstrap-timepicker/css/bootstrap-timepicker.css',
        'bootstrap-daterangepicker/daterangepicker.css',
        'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css',
    ];
    
    public $js = [
        'fuelux/fuelux.tree.js',
        'fuelux/fuelux.spinner.js',
        '_mod/jquery-ui.custom/jquery-ui.custom.js',
        '_mod/jquery.nestable/jquery.nestable.js',
        'chosen/chosen.jquery.js',
        'bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
        'js/date-time/bootstrap-datepicker.zh-CN.js',
        'bootstrap-timepicker/js/bootstrap-timepicker.js',
        'moment/moment.js',
        'bootstrap-daterangepicker/daterangepicker.js',
        'eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js',
        'js/x-editable/bootstrap-editable.js',
        'js/x-editable/ace-editable.js',
        'jquery-knob/js/jquery.knob.js',
        'autosize/dist/autosize.js',
        'jquery-inputlimiter/jquery.inputlimiter.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
