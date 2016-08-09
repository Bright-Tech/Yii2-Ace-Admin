<?php
namespace bright_tech\yii2theme\aceadmin\widgets;

use Yii;
use yii\base\InvalidConfigException;


class ActiveForm extends \yii\bootstrap\ActiveForm
{
    public $fieldClass = 'bright_tech\yii2theme\aceadmin\widgets\ActiveField';
    
    /**
     * @inheritdoc
     * @return \bright\theme\yii2\aceadmin\ActiveField
     */
    public function field($model, $attribute, $options = [])
    {
        return parent::field($model, $attribute, $options);
    }
}
