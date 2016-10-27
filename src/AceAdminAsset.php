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

    public $sourcePath = '@vendor/bright-tech/yii2-ace-admin-theme/src/assets';
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
    
    public $css = [
        'css/font-awesome.css',
        'css/ace-fonts.css',
        'css/ace.css',
        'css/bootstrap-datepicker3.css',
        'css/bootstrap-timepicker.css',
        'css/daterangepicker.css',
        'css/bootstrap-datetimepicker.css',
        'css/bootstrap-editable.css'
    ];
    
    public $js = [
        'js/fuelux/fuelux.tree.js',
        'js/fuelux/fuelux.spinner.js',
        'js/ace/elements.scroller.js',
        'js/ace/elements.colorpicker.js',
        'js/ace/elements.fileinput.js',
        'js/ace/elements.typeahead.js',
        'js/ace/elements.spinner.js',
        'js/ace/elements.treeview.js',
        'js/ace/elements.aside.js',
        'js/ace/ace.js',
        'js/ace/ace.sidebar.js',
        'js/ace/ace.sidebar-scroll-1.js',
        'js/ace/ace.widget-box.js',
        'js/date-time/bootstrap-datepicker.js',
        'js/date-time/bootstrap-datepicker.zh-CN.js',
        'js/date-time/bootstrap-timepicker.js',
        'js/date-time/moment.js',
        'js/date-time/daterangepicker.js',
        'js/date-time/bootstrap-datetimepicker.js',
        'js/init-elements.js',
        'js/x-editable/bootstrap-editable.js',
        'js/x-editable/ace-editable.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
