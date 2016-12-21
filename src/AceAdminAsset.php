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

    public $sourcePath = '@vendor/bright-tech/ace-admin/assets';

    
    public $css = [
        'css/ace-fonts.css',
        'css/ace.css',
        'css/ace.skins.css',
    ];
    
    public $js = [
        'js/elements.scroller.js',
        'js/elements.colorpicker.js',
        'js/elements.fileinput.js',
        'js/elements.typeahead.js',
        'js/elements.spinner.js',
        'js/elements.treeview.js',
        'js/elements.aside.js',
        'js/ace.js',
        'js/ace.basics.js',
        'js/ace.scrolltop.js',
        'js/ace.ajax-content.js',
        'js/ace.touch-drag.js',
        'js/ace.sidebar.js',
        'js/ace.sidebar-scroll-1.js',
        'js/ace.sidebar-scroll-1.js',
        'js/ace.submenu-hover.js',
        'js/ace.widget-box.js',
        'js/ace.widget-on-reload.js',
        'js/ace.searchbox-autocomplete.js',
//        'js/ace.sidebar.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
