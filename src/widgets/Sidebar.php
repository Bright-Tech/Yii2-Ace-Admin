<?php
namespace bright_tech\yii2theme\aceadmin\widgets;

use yii\helpers\Html;
use yii\bootstrap\Nav;
use bright_tech\yii2theme\aceadmin\AceAdminAsset;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;


/**
 * Nav renders a nav HTML component.
 *
 * For example:
 *
 * ```php
 * echo Nav::widget([
 *     'items' => [
 *         [
 *             'label' => 'Home',
 *             'url' => ['site/index'],
 *             'linkOptions' => [...],
 *         ],
 *         [
 *             'label' => 'Dropdown',
 *             'items' => [
 *                  ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
 *                  '<li class="divider"></li>',
 *                  '<li class="dropdown-header">Dropdown Header</li>',
 *                  ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
 *             ],
 *         ],
 *         [
 *             'label' => 'Login',
 *             'url' => ['site/login'],
 *             'visible' => Yii::$app->user->isGuest
 *         ],
 *     ],
 *     'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
 * ]);
 * ```
 */
class Sidebar extends Nav
{
    public $warpClass = 'nav nav-list';

    public $iconClass = 'menu-icon';

    public $activateParents = true;

    public $defaultDropDownBTagOptions = ['class' => 'arrow fa fa-angle-down'];
    // public $currentItem;

    // public $menuItems;

    // public $shortcutItems;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        Html::removeCssClass($this->options, ['widget' => 'nav']);
        Html::addCssClass($this->options, [
            'navlist' => $this->warpClass
        ]);
    }

    public function run()
    {
        AceAdminAsset::register($this->getView());
        return $this->renderItems();
    }

    /**
     * Renders widget items.
     */
    public function renderItems()
    {
        $items = [];
        foreach ($this->items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                continue;
            }
            if (ArrayHelper::keyExists('items', $item)) {
                $items[] = $this->renderDropdownItem($item);
            } else {
                $items[] = $this->renderItem($item);
            }

        }

        return Html::tag('ul', implode("\n", $items), $this->options);
    }

    /**
     * Renders a widget's item.
     *
     * @param string|array $item
     *            the item to render.
     * @return string the rendering result.
     * @throws InvalidConfigException
     */
    public function renderItem($item)
    {
        if (is_string($item)) {
            return $item;
        }
        if (!isset($item['label'])) {
            throw new InvalidConfigException("The 'label' option is required.");
        }

        $options = ArrayHelper::getValue($item, 'options', []);
        $active = $this->isItemActive($item);
        if ($this->activateItems && $active) {
            Html::addCssClass($options, 'active');
        }
        $linkHtml = $this->renderItemLink($item);
        $arrowHtml = Html::tag('b', '', ['class' => 'arrow']);
        return Html::tag('li', $linkHtml . $arrowHtml, $options);


    }

    public function renderDropdownItem($item, &$active = false)
    {
        if (is_string($item)) {
            return $item;
        }
        if (!isset($item['label'])) {
            throw new InvalidConfigException("The 'label' option is required.");
        }
        $subItems = ArrayHelper::getValue($item, 'items');

        $options = ArrayHelper::getValue($item, 'options', []);
        $active = $this->isItemActive($item);

        $item['linkOptions'] = ['class' => 'dropdown-toggle'];
        if (is_array($subItems)) {
            if ($this->activateItems) {
                $subItems = $this->isChildActive($subItems, $active);
            }
            $subItems = $this->renderSubItems($subItems, $active);
        }
        if ($this->activateItems && $active) {
            Html::addCssClass($options, 'active open');
        }
        $linkHtml = $this->renderItemLink($item);
        $arrowHtml = Html::tag('b', '', ['class' => 'arrow']);
        return Html::tag('li', $linkHtml . $arrowHtml . $subItems, $options);
    }

    /**
     *
     * @param unknown $item
     */
    protected function renderItemLink($item)
    {
        $url = ArrayHelper::getValue($item, 'url', '#');
        $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);
        $encodeLabel = ArrayHelper::getValue($item, 'encode', $this->encodeLabels);
        $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
        $items = ArrayHelper::getValue($item, 'items');

        $bTagHtml = '';
        if ($items !== null) {
            $bTagHtml = Html::tag('b', '', $this->defaultDropDownBTagOptions);
        }

        $iconHtml = $this->renderItemIcon($item);
        $label = Html::tag('span', $label, ['class' => 'menu-text']);
        return Html::a($iconHtml . $label . $bTagHtml, $url, $linkOptions);

    }

    /**
     *
     * @param unknown $item 一级节点
     */
    protected function renderItemIcon($item)
    {
        $iconClass = ArrayHelper::getValue($item, 'icon');
        if ($iconClass !== null) {
            $class = [$this->iconClass];
            Html::addCssClass($class, $iconClass);
            return Html::tag('i', '', ['class' => $class]);
        } else {
            return '';
        }
    }

    /**
     *
     * @param unknown $items 节点数组
     * @param unknown $item 上级节点
     */
    protected function renderSubItems($items, &$active)
    {
        $subItems = [];

        foreach ($items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                continue;
            }
            $item['icon'] = 'fa fa-caret-right';


            if (ArrayHelper::keyExists('items', $item)) {
                $subItems[] = $this->renderDropdownItem($item,$active);
            } else {
                $subItems[] = $this->renderItem($item);
            }
        }


        return Html::tag('ul', implode("\n", $subItems), ['class' => 'submenu']);
    }

    protected function isItemActive($item)
    {
        if (ArrayHelper::keyExists('active', $item)) {
            return ArrayHelper::remove($item, 'active', false);
        } else {
            return parent::isItemActive($item); // TODO: Change the autogenerated stub
        }
    }
}

