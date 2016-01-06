<?php
namespace backend\aceadmin\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class PageHeader extends Widget
{

    const PAGE_HEADER_DEFAULT = 'header';

    const PAGE_HEADER_SUB = 'subheader';
    public $title = 'Default Title';
    public $subTitle = '';
    public $template = '<div class="page-header">
    <h1><{title}>
        <small><i class="ace-icon fa fa-angle-double-right"></i><{subtitle}></small>
    </h1>
</div>';
    public $subHeaderTemplate = '<h3 class="header smaller lighter blue"><{title}>
	<small><{subtitle}></small>
</h3>';
    public $type = 'header';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $template = $this->template;
        if ( $this->type == self::PAGE_HEADER_SUB ) {
            $template = $this->subHeaderTemplate;
        }
        $html = str_replace( '<{title}>', Html::encode( $this->title ), $template );
        $html = str_replace( '<{subtitle}>', Html::encode( $this->subTitle ), $html );
        return $html;
    }
}

