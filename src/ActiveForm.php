<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace bright\theme\yii2\aceadmin;

use Yii;
use yii\base\InvalidConfigException;


class ActiveForm extends \yii\bootstrap\ActiveForm
{
    /**
     * @inheritdoc
     * @return \bright\theme\yii2\aceadmin\ActiveField
     */
    public function field($model, $attribute, $options = [])
    {
        return parent::field($model, $attribute, $options);
    }
}
