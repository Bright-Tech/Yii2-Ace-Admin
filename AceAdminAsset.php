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
        'assets/css/font-awesome.css',
        'assets/css/ace-fonts.css',
        'assets/css/ace.css',
    ];

    public $js = [
        'assets/js/fuelux/fuelux.tree.js',
        'assets/js/ace/elements.scroller.js',
        'assets/js/ace/elements.colorpicker.js',
        'assets/js/ace/elements.fileinput.js',
        'assets/js/ace/elements.typeahead.js',
        'assets/js/ace/elements.wysiwyg.js',
        'assets/js/ace/elements.spinner.js',
        'assets/js/ace/elements.treeview.js',
        'assets/js/ace/elements.aside.js',
        'assets/js/ace/ace.js',
        'assets/js/ace/ace.sidebar.js',
        'assets/js/ace/ace.sidebar-scroll-1.js',
        'assets/js/json2.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}
