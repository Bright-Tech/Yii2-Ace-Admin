<?php
namespace bright\theme\yii2\aceadmin;


/**
 *
 * 继承自 Yii Bootstrap
 *
 * @author SamXiao
 *
 */
class BootstrapAsset extends \yii\bootstrap\BootstrapAsset
{

    public $js = [
        YII_ENV_DEV ? 'js/bootstrap.js' : 'js/bootstrap.min.js'
    ];
    
}
