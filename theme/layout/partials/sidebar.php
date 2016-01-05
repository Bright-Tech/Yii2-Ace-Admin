<?php
use backend\aceadmin\widgets\Sidebar;
use yii\helpers\Url;
$menus = array(
		'病例管理' => array(
				'title' => '病例管理',
				'url' =>Url::to(['/case'])
		),
		'问诊管理' => array(
				'title' => '问诊库',
                'submenu' => array(
                    array(
                        'title' => '问诊分类',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/inquiry-category'])
                    ),
                    array(
                        'title' => '问诊系统',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/inquiry-system'])
                    ),
                    array(
                        'title' => '问诊症状',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/inquiry-symptom'])
                    ),
                    array(
                        'title' => '问诊问题',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/inquiry'])
                    )
                )
		),
		'体格检查' => array(
				'title' => '体格检查库',
                'submenu' => array(
                    array(
                        'title' => '体格检查方式',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/physical-check-category'])
                    ),
                    array(
                        'title' => '检查部位',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/physical-check-position'])
                    ),
                    array(
                        'title' => '体格检查',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/physical-check'])
                    )
                )
		),
		'实验室及辅助检查' => array(
				'title' => '实验室及辅助检查库',
                'submenu' => array(
                    array(
                        'title' => '实验室及辅助检查分类',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/medical-check-category'])
                    ),
                    array(
                        'title' => '实验室及辅助检查细类',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/medical-check-sub-category'])
                    ),
                    array(
                        'title' => '实验室及辅助检查问题',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/medical-check'])
                    )
                )
		),
		'诊断管理' => array(
				'title' => '诊断库',
                'submenu' => array(
                    array(
                        'title' => '诊断分类',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/diagnosis-category'])
                    ),
                    array(
                        'title' => '诊断项目',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/diagnosis'])
                    )
                )
		),
		'治疗管理' => array(
				'title' => '治疗库',
                'submenu' => array(
                    array(
                        'title' => '治疗分类',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/treatment-category'])
                    ),
                    array(
                        'title' => '治疗项目',
                        'icon' => 'fa fa-tachometer',
                        'url' =>Url::to(['/treatment'])
                    )
                )
		),
    
		'科室管理' => array(
				'title' => '科室管理',
				'url' =>Url::to(['/department'])
		),
        '学生管理' => array(
            'title' => '学生管理',
            'url' =>Url::to(['/user'])
        ),
        '教师管理' => array(
            'title' => '教师管理',
            'url' =>Url::to(['/admin'])
        ),
        '训练管理' => array(
            'title' => '训练管理',
            'url' =>Url::to(['/quiz'])
        ),
);
?>
<div class="sidebar responsive" id="sidebar">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">


			<!-- /section:basics/sidebar.layout.shortcuts -->
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span> <span class="btn btn-info"></span>

			<span class="btn btn-warning"></span> <span class="btn btn-danger"></span>
		</div>
	</div>
	<!-- /.sidebar-shortcuts -->


    <?= Sidebar::widget( [ 'menuItems' => $menus, 'currentItem' => $currentItem ]); ?>

	<!-- /.nav-list -->

	<!-- #section:basics/sidebar.layout.minimize -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left"
			data-icon1="ace-icon fa fa-angle-double-left"
			data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<!-- /section:basics/sidebar.layout.minimize -->
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>
<!-- End .sidebar -->

        <?php
//             NavBar::begin([
//                 'brandLabel' => 'My Company',
//                 'brandUrl' => Yii::$app->homeUrl,
//                 'options' => [
//                     'class' => 'navbar-inverse navbar-fixed-top',
//                 ],
//             ]);
//             $menuItems = [
//                 ['label' => 'Home', 'url' => ['/site/index']],
//             ];
//             if (Yii::$app->user->isGuest) {
//                 $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//             } else {
//                 $menuItems[] = [
//                     'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
//                     'url' => ['/site/logout'],
//                     'linkOptions' => ['data-method' => 'post']
//                 ];
//             }
//             echo Nav::widget([
//                 'options' => ['class' => 'navbar-nav navbar-right'],
//                 'items' => $menuItems,
//             ]);
//             NavBar::end();
        ?>