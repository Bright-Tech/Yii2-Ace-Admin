<?php
namespace bright_tech\yii2theme\aceadmin\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class PageHeader extends Widget
{

    const PAGE_HEADER_DEFAULT = 'header';

    const PAGE_HEADER_SUB = 'subheader';
    public $title = 'Default Title';
    public $subTitle = '';
    public $headerTemplate = '<div class="page-header"><h1><{title}><{subTitle}></h1></div>';
    public $subTitleTemplate = '<small><i class="ace-icon fa fa-angle-double-right"></i><{subTitle}></small>';
    public $type = 'header';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $subTitle = '';
        if (!empty($this->subTitle)){
            $subTitle = str_replace( '<{subTitle}>', Html::encode( $this->subTitle ), $this->subTitleTemplate );
        }
        $html = str_replace( '<{title}>', Html::encode( $this->title ), $this->headerTemplate );
        $html = str_replace( '<{subTitle}>', $subTitle, $html );
        return $html;
    }
}

