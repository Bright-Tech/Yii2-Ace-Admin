<?php
namespace bright_tech\yii2theme\aceadmin\widgets;

use bright_tech\yii2theme\aceadmin\NestableAsset;
use yii\db\ActiveRecordInterface;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\base\InvalidConfigException;
use yii\base\Widget;

class NestListView extends Widget
{
    /**
     * @var array the HTML attributes for the container tag of the list view.
     * The "tag" element specifies the tag name of the container element and defaults to "div".
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var \yii\data\DataProviderInterface the data provider for the view. This property is required.
     */
    public $dataProvider;

    public $items;

    /**
     * @var array
     */
    public $modelOptions = ['contentAttribute' => 'name'];


    /**
     * plugin options
     *
     * @var string
     */
    public $listNodeName = 'ol';
    public $itemNodeName = 'li';
    public $rootClass = 'dd';
    public $listClass = 'dd-list';
    public $itemClass = 'dd-item';
    public $dragClass = 'dd-dragel';
    public $handleClass = 'dd-handle';
    public $collapsedClass = 'dd-collapsed';
    public $placeClass = 'dd-placeholder';
    public $noDragClass = 'dd-nodrag';
    public $emptyClass = 'dd-empty';
    public $expandBtnHTML = '<button data-action="expand" type="button">Expand</button>';
    public $collapseBtnHTML = '<button data-action="collapse" type="button">Collapse</button>';
    public $group = 0;
    public $maxDepth = 5;
    public $threshold = 20;

    /**
     * @var array
     */
    public $buttons = [];

    /**
     *
     */
    public $showActionButtonContent = false;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        if ($this->dataProvider === null) {
            throw new InvalidConfigException('The "dataProvider" property must be set.');
        }
        $this->prepareItems();

    }

    public function run()
    {
        $view = $this->getView();
        NestableAsset::register($view);
        $view->registerJs($this->renderJS());
        $html = '';
        if (count($this->items) > 0) {
            $html = $this->renderItems();
            $html = Html::tag('ol', $html, ['class' => 'dd-list']);
        }
        return Html::tag('div', $html, ['class' => 'dd', 'id' => 'nestable']);
    }

    public function renderItems()
    {
        $itemsHtml = '';

        $items = array_values($this->items);
        $keys = array_keys($this->items);
        foreach ($items as $index => $item) {
            $itemsHtml .= $this->renderItem($item, $keys[$index], $index);
        }
        return $itemsHtml;
    }

    public function renderItem($model, $key, $index)
    {
        $content = $model['content'];
        if (!empty($this->buttons)) {
            $buttons = [];
            foreach ($this->buttons as $button) {
                $url = str_replace('{id}', $model['id'], urldecode($button['url']));
                $text = $this->showActionButtonContent ? $button['text'] : '';
                if (isset($button['iconClass'])) {
                    $text .= Html::tag('i', '', ['class' => $button['iconClass']]);
                }
                $buttons[] = Html::a($text, $url, ['class' => ArrayHelper::getValue($button, 'linkClass', '')]);
            }
            $content .= Html::tag('div', implode('', $buttons), ['class' => 'pull-right action-buttons']);
        }

        $itemHtml = Html::tag('div', $content, ['class' => 'dd-handle']);

        return Html::tag('li', $itemHtml, ['class' => 'dd-item', 'data' => ['id' => $key]]);

    }

    public function prepareItems()
    {
        $items = [];
        $models = $this->dataProvider->getModels();
        /**
         * @var ActiveRecordInterface $model
         */
        foreach ($models as $model) {

            $items[] = [
                'id' => $model->getPrimaryKey(),
                'content' => $model->getAttribute($this->modelOptions['contentAttribute'])
            ];
        }
        $this->items = $items;
    }

    public function renderJS()
    {
        return "jQuery('.dd').nestable({
            listNodeName    : '{$this->listNodeName}',
            itemNodeName    : '{$this->itemNodeName}',
            rootClass       : '{$this->rootClass}',
            listClass       : '{$this->listClass}',
            itemClass       : '{$this->itemClass}',
            dragClass       : '{$this->dragClass}',
            handleClass     : '{$this->handleClass}',
            collapsedClass  : '{$this->collapsedClass}',
            placeClass      : '{$this->placeClass}',
            noDragClass     : '{$this->noDragClass}',
            emptyClass      : '{$this->emptyClass}',
            expandBtnHTML   : '{$this->expandBtnHTML}',
            collapseBtnHTML : '{$this->collapseBtnHTML}',
            group           : '{$this->group}',
            maxDepth        : '{$this->maxDepth}',
            threshold       : '{$this->threshold}'
        });";
    }
}
