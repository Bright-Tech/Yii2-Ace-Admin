<?php

namespace bright_tech\yii2theme\aceadmin\widgets;

use yii\helpers\Html;

class ActiveField extends \yii\bootstrap\ActiveField
{
    /**
     * Renders an input tag.
     * @param string $type the input type (e.g. 'text', 'password')
     * @param array $options the tag options in terms of name-value pairs. These will be rendered as
     * the attributes of the resulting tag. The values will be HTML-encoded using [[Html::encode()]].
     *
     * If you set a custom `id` for the input element, you may need to adjust the [[$selectors]] accordingly.
     *
     * @return $this the field object itself
     */
    public function datePicker($type, $options = [])
    {
        $inputOptins = array_merge($this->inputOptions, [  'class'=>['form-control', 'date-picker'], 'data'=>['date-format'=>'dd-mm-yyyy']]);
        $options = array_merge($inputOptins, $options);
        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeTextInput($this->model, $this->attribute, $options);
        $this->parts['{input}'] .= Html::tag('span', Html::tag('i', '', ['class'=>'fa fa-calendar bigger-110']) , ['class' => "input-group-addon"]);
        $this->parts['{input}'] = Html::tag('div', $this->parts['{input}'], ['class'=>'input-group']);
        return $this;
    }
}
