<?php
namespace backend\aceadmin\widgets;

use yii\helpers\Html;
use yii\bootstrap\Nav;


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

//     public $currentItem;

//     public $menuItems;

//     public $shortcutItems;

    public function init()
    {
        parent::init();

    }

//     public function run()
//     {
//        // $this->setMenuItems($menuItems);
//        // $this->setCurrentItem($currentItem);
//         $content = $this->renderNavList();

//         return '<ul class="nav nav-list">' . $content . '</ul>';
//     }

//     public function renderNavList()
//     {
//         $html = '';
//         $menuItems = $this->menuItems;
//         foreach ($menuItems as $menuItem) {
//             if (isset($menuItem['submenu'])) {
//                 $html .= $this->renderMenuItemWithSubmenu($menuItem);
//             } else {
//                 $html .= $this->renderMenuItem($menuItem);
//             }
//         }

//         return $html;

//         // $markup = sprintf($this->getMessageOpenFormat(), ' class="' . implode(' ', $classes) . '"');
//     }

//     public function renderMenuItem($menuItem, $subMenu = FALSE)
//     {
//         $currentItem = $this->currentItem;
//         //$escapeHtml = $this->getEscapeHtml();
//         $liClass = '';
//         if ($currentItem == $menuItem['title']) {
//             $liClass = 'active';
//         }
//         $html = '<li class="' . $liClass . '">
//                     <a href="' . $menuItem['url'] . '">';
//         $menuTitle = Html::encode($menuItem['title']);
//         if ($subMenu) {
//             $html .= '<i class="menu-icon fa fa-caret-right"></i>'. $menuTitle;
//         } else {
//             if (isset($menuItem['icon'])){
//                 $html .='<i class="' . $menuItem['icon'] . '"></i>';
//             }
//             $html .= '<span class="menu-text">' . $menuTitle . '</span>';
//         }

//         $html .= '</a>
//                     <b class="arrow"></b>
//                 </li>';
//         return $html;
//     }

//     public function renderMenuItemWithSubmenu($menuItem)
//     {
//         $currentItem = $this->currentItem;
//         $subItems = $menuItem['submenu'];
//         $liClass = '';
//         $subNavHtml = '';
//         foreach ($subItems as $subMenuItem) {
//             if ($currentItem == $subMenuItem['title']) {
//                 $liClass = 'active open';
//             }
//             $subNavHtml .= $this->renderMenuItem($subMenuItem,true);
//         }

//         $menuTitle = Html::encode($menuItem['title']);
//         $html = '<li class="' . $liClass . '">
//                     <a href="#" class="dropdown-toggle">
//                         <i class=""></i>
//                         <span class="menu-text">
//                             ' . $menuTitle . '
//                         </span>

//                         <b class="arrow fa fa-angle-down"></b>
//                     </a>
//                     <b class="arrow"></b>
//                     <ul class="submenu">';
//         $html .= $subNavHtml;
//         $html .= '</ul></li>';
//         return $html;
//     }
}

