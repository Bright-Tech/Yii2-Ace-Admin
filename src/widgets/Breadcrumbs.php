<?php
namespace bright_tech\yii2theme\aceadmin\widgets;

use Yii;
use yii\helpers\Html;

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
class Breadcrumbs extends \yii\widgets\Breadcrumbs
{
    public $homeTemplate = "<li><i class=\"ace-icon fa fa-home home-icon\"></i>{link}</li>\n";

    public $warpOptions = ['class' => 'breadcrumbs'];

    public $warpTag = 'div';

    public function run()
    {

        if (empty($this->links)) {
            return;
        }
        $links = [];
        if ($this->homeLink === null) {
            $links[] = $this->renderItem([
                'label' => Yii::t('yii', 'Home'),
                'url' => Yii::$app->homeUrl,
            ], $this->itemTemplate);
        } elseif ($this->homeLink !== false) {
            $links[] = $this->renderItem($this->homeLink, $this->homeTemplate);
        }
        foreach ($this->links as $link) {
            if (!is_array($link)) {
                $link = ['label' => $link];
            }
            $links[] = $this->renderItem($link, isset($link['url']) ? $this->itemTemplate : $this->activeItemTemplate);
        }

        $ulHtml = Html::tag($this->tag, implode('', $links), $this->options);
        return Html::tag($this->warpTag, $ulHtml, $this->warpOptions);

    }


}

