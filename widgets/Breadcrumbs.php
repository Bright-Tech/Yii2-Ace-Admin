<?php
namespace backend\aceadmin\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * <div class="breadcrumbs" id="breadcrumbs">
 * <ul class="breadcrumb">
 * <li>
 * <i class="ace-icon fa fa-home home-icon"></i>
 * <a href="/">首页</a>
 * </li>
 *
 * <li>
 * <a href="#">Other Pages</a>
 * </li>
 * <li class="active">Blank Page</li>
 * </ul><!-- /.breadcrumb -->
 * </div>
 */
/**
 *
 * @author SamXiao
 *
 */
class Breadcrumbs extends Widget
{

    public $template = '<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">首页</a>
        </li>
        <{content}>
    </ul><!-- /.breadcrumb -->
</div>';

    public $items;
    
    // public $shortcutItems;
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $content = $this->renderBreadcrumbsItem();
        return strtr($this->template, [
            '<{content}>' => $content
        ]);
    }

    public function renderBreadcrumbsItem()
    {
        $html = '';
        $items = $this->items;
        foreach ($items as $key => $item) {
            $avtive = $key == count($items) ? 'active' : '';
            if (is_array($item)) {
                $html .= '<li class="' . $avtive . '"><a href="' . Url::toRoute($item['url']) . '">' . Html::encode($item['label']) . '</a></li>';
            } elseif (is_string($item)) {
                $html .= '<li class="' . $avtive . '">' . Html::encode($item) . '</li>';
            }
        }
        return $html;
    }
}

