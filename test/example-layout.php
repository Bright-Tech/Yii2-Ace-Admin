<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use backend\aceadmin\widgets\Breadcrumbs;
use yii\helpers\Url;
use bright\theme\yii2\aceadmin\AceAdminAsset;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
AceAdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="no-skin">
    <?php $this->beginBody() ?>
    		<!-- #section:basics/navbar.layout -->
	<div id="navbar" class="navbar navbar-default">
		<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

		<div class="navbar-container" id="navbar-container">

			<div class="navbar-header pull-left">
				<!-- #section:basics/navbar.layout.brand -->
				<a href="#" class="navbar-brand"> <small> <i class="fa fa-leaf"></i>
					全科医疗思维
				</small>
				</a>

				<!-- /section:basics/navbar.layout.brand -->

				<!-- #section:basics/navbar.toggle -->

				<!-- /section:basics/navbar.toggle -->
			</div>

			<!-- #section:basics/navbar.dropdown -->
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<!-- #section:basics/navbar.user_menu -->
					<li class="light-blue">
    					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
    						<?php if (\Yii::$app->user->isGuest):?>
    						<?php else:?>
                            <span class="user-info"> <small>你好,</small> <?=Yii::$app->user->identity->name ?> </span>
                            <?php endif;?>
    					</a>
						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<!--
							<li><a href="#"> <i class="ace-icon fa fa-cog"></i> 设置
							</a></li>

							<li><a href="profile.html"> <i class="ace-icon fa fa-user"></i>
									我的账户
							</a></li>
 -->
							<li class="divider"></li>

							<li><a href="<?=Url::to(['site/logout'])?>"> <i class="ace-icon fa fa-power-off"></i> 登出
							</a></li>
						</ul></li>

					<!-- /section:basics/navbar.user_menu -->
				</ul>
			</div>

			<!-- /section:basics/navbar.dropdown -->
		</div>
		<!-- /.navbar-container -->
	</div>
    <div class="main-container" id="main-container">

        <?= $this->render('@app/views/layouts/partials/sidebar.php', ['currentItem' => isset($this->params['currentItem'])?$this->params['currentItem']:''])?>


    <div class="main-content">
        <div class="main-content-inner">
        <?=Breadcrumbs::widget(['items'=>isset($this->params['breadcrumbs'])?$this->params['breadcrumbs']:[]])?>
        <div class="page-content">

					<!-- PAGE CONTENT BEGINS -->
                    <?= $content ?>
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
        </div>

    	<footer class="footer">
    		<div class="footer-inner">
    			<!-- #section:basics/footer -->
    			<div class="footer-content">
    				<span class="bigger-120">
    				    <span class="blue bolder">天堰科技</span> &copy; <?= date('Y') ?>
    				</span>
    			</div>

    			<!-- /section:basics/footer -->
    		</div>
    	</footer>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
