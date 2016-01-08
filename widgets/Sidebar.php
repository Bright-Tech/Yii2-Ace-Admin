<?php
namespace bright\theme\yii2\aceadmin\widgets;

use yii\helpers\Html;
use yii\bootstrap\Nav;
use bright\theme\yii2\aceadmin\AceAdminAsset;
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
    
    public $defaultDropDownBTagOptions = [ 'class' => 'arrow fa fa-angle-down' ];
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
        if (! isset($item['label'])) {
            throw new InvalidConfigException("The 'label' option is required.");
        }
        $options = ArrayHelper::getValue($item, 'options', []);
        $items = ArrayHelper::getValue($item, 'items');
        
        if (isset($item['active'])) {
            $active = ArrayHelper::remove($item, 'active', false);
        } else {
            $active = $this->isItemActive($item);
        }
        
        if ($items !== null) {

            $item['linkOptions'] = [ 'class' => 'dropdown-toggle' ];
            
            if (is_array($items)) {
                if ($this->activateItems) {
                    $items = $this->isChildActive($items, $active);
                }
                $items = $this->renderSubItems($items, $item);
            }
        }
        
        if ($this->activateItems && $active) {
            Html::addCssClass($options, 'active');
        }
       
        $linkHtml = $this->renderItemLink( $item );
        $arrowHtml = Html::tag('b', '' , ['class'=>'arrow']);
        
        return Html::tag('li', $linkHtml . $arrowHtml  . $items, $options);
    }
    
    /**
     *
     * @param unknown $item
     */
    protected function renderItemLink( $item ){
        $url = ArrayHelper::getValue($item, 'url', '#');
        $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);
        $encodeLabel =  ArrayHelper::getValue($item , 'encode', $this->encodeLabels ) ;
        $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
        $items = ArrayHelper::getValue($item, 'items');
        
        $bTagHtml = '';
        if ($items !== null) {
            $bTagHtml = Html::tag('b', '' , $this->defaultDropDownBTagOptions);
        }
        
        $iconHtml = $this->renderItemIcon($item);
        $label = Html::tag('span', $label , ['class'=>'menu-text']);
        return Html::a( $iconHtml . $label . $bTagHtml, $url, $linkOptions);
        
    }
    
    /**
     *
     * @param unknown $item  一级节点
     */
    protected function renderItemIcon( $item ){
        $iconClass = ArrayHelper::getValue($item, 'icon');
        if ($iconClass !== null ){
            $class = [$this->iconClass];
            Html::addCssClass($class, $iconClass);
            return Html::tag('i', '', ['class'=>$class]);
        }else{
            return '';
        }
    }
    
    /**
     *
     * @param unknown $items 节点数组
     * @param unknown $item 上级节点
     */
    protected function renderSubItems( $items, $item ){
        $subItems = [];
        foreach ($items as $i => $subItem) {
            if (isset($subItem['visible']) && !$subItem['visible']) {
                continue;
            }
            $subItem['icon'] = 'fa fa-caret-right';
            $linkHtml = $this->renderItemLink($subItem);

            $leafItems = ArrayHelper::getValue($subItem, 'items');
            $leafItemsHtml = '';
            if ($leafItems !== null) {
                $leafItemsHtml = $this->renderSubItems($leafItems, $subItem);
            }
            
            $subItems[] =   Html::tag('li', $linkHtml.$leafItemsHtml , []);
        }
        
        return Html::tag('ul', implode("\n", $subItems), ['class'=>'submenu']);
    }

}

