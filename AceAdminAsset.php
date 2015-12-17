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

    public $basePath = '@webroot';

    public $baseUrl = '@web';
    // 'lt IE 9' => [
    // '/css/ace-part2.css',
    // '/css/ace-ie.css'
    // ]
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $css = [
        'css/font-awesome.css',
        'css/ace-fonts.css',
        'css/ace.css',
    ];

    public $js = [
        'js/fuelux/fuelux.tree.js',
        'js/ace/elements.scroller.js',
        'js/ace/elements.colorpicker.js',
        'js/ace/elements.fileinput.js',
        'js/ace/elements.typeahead.js',
        'js/ace/elements.wysiwyg.js',
        'js/ace/elements.spinner.js',
        'js/ace/elements.treeview.js',
        'js/ace/elements.aside.js',
        'js/ace/ace.js',
        'js/ace/ace.sidebar.js',
        'js/ace/ace.sidebar-scroll-1.js',
        'js/json2.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}
