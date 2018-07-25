<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
AppAsset::register($this);
?>
<!--吴轩羽-->
<!--编辑于07-19-->
<!--后台layout-->
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <title>德塔贝斯-后台管理系统</title>
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

<!--    <link rel="icon" type="image/ico" href="http://tattek.com/minimal/assets/images/favicon.ico" />-->
    <!-- Bootstrap -->
    <link href="css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor/animate/animate.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="js/vendor/rickshaw/css/rickshaw.min.css">
    <link rel="stylesheet" href="js/vendor/morris/css/morris.css">
    <link rel="stylesheet" href="js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="js/vendor/summernote/css/summernote.css">
    <link rel="stylesheet" href="js/vendor/summernote/css/summernote-bs3.css">
    <link rel="stylesheet" href="js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="js/vendor/chosen/css/chosen-bootstrap.css">
    <link href="css/minimal.css" rel="stylesheet">
    <link href="/Final-Homework/backend/web/assets/985699a/redactor.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body class="bg-3">
<?php $this->beginBody() ?>


<!-- Preloader -->
<!--/Preloader -->

<!-- Wrap all page content here -->
<div id="wrap">




    <!-- Make page fluid -->
    <div class="row">





        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">



            <!-- Branding -->
            <div class="navbar-header col-md-2">
                <a class="navbar-brand" href="index.html">
                    <strong>德塔贝斯</strong>后台管理
                </a>
                <div class="sidebar-collapse">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>

            <!-- .nav-collapse -->
            <div class="navbar-collapse">

                <!-- Page refresh -->
                <ul class="nav navbar-nav refresh">
                    <li class="divided">
                        <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
                    </li>
                </ul>
                <!-- /Page refresh -->

                <!-- Search -->
                <div class="search" id="main-search">
                    <i class="fa fa-search"></i> <input type="text" placeholder="Search...">
                </div>
                <!-- Search end -->

                <!-- Quick Actions -->
                <ul class="nav navbar-nav quick-actions">

                    <li class="dropdown divided">

                        <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="label label-transparent-black">2</span>
                        </a>

                        <ul class="dropdown-menu wide arrow nopadding bordered">
                            <li><h1>You have <strong>2</strong> new tasks</h1></li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Layout</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped progress-thin">
                                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Schemes</div>
                                        <div class="percent">15%</div>
                                    </div>
                                    <div class="progress progress-striped active progress-thin">
                                        <div class="progress-bar progress-bar-cyan" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Forms</div>
                                        <div class="percent">5%</div>
                                    </div>
                                    <div class="progress progress-striped progress-thin">
                                        <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                                            <span class="sr-only">5% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">JavaScript</div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped progress-thin">
                                        <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dropdowns</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped progress-thin">
                                        <div class="progress-bar progress-bar-amethyst" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Check all tasks <i class="fa fa-angle-right"></i></a></li>
                        </ul>

                    </li>

                    <li class="dropdown divided">

                        <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="label label-transparent-black">1</span>
                        </a>
                        <ul class="dropdown-menu wider arrow nopadding messages">
                            <li><h1>You have <strong>1</strong> new message</h1></li>
                            <li>
                                <a class="orange" href="#">
                                    <div class="profile-photo">
                                        <img src="images/george-avatar.jpg" alt />
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">George McCain</span>
                                        <span class="time">6 hours</span>
                                        <div class="message-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                                    </div>
                                </a>
                            </li>


                            <li class="topborder"><a href="#">Check all messages <i class="fa fa-angle-right"></i></a></li>
                        </ul>

                    </li>

                    <li class="dropdown divided">

                        <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>
                            <span class="label label-transparent-black">3</span>
                        </a>

                        <ul class="dropdown-menu wide arrow nopadding bordered">
                            <li><h1>You have <strong>3</strong> new notifications</h1></li>
<!--消息示例-->
                            <li>
                                <a href="#">
                                    <span class="label label-green"><i class="fa fa-user"></i></span>
                                    New user registered.
                                    <span class="small">18 mins</span>
                                </a>
                            </li>


                            <li><a href="#">Check all notifications <i class="fa fa-angle-right"></i></a></li>
                        </ul>

                    </li>

                    <li class="dropdown divided user" id="current-user">
                        <div class="profile-photo">
                            <img src="images/profile-photo.jpg" alt />
                        </div>
                        <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                            <?= Yii::$app->user->identity->username ?> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu arrow settings">

                            <li>

                                <h3>Backgrounds:</h3>
                                <ul id="color-schemes">
                                    <li><a href="#" class="bg-1"></a></li>
                                    <li><a href="#" class="bg-2"></a></li>
                                    <li><a href="#" class="bg-3"></a></li>
                                    <li><a href="#" class="bg-4"></a></li>
                                    <li><a href="#" class="bg-5"></a></li>
                                    <li><a href="#" class="bg-6"></a></li>
                                </ul>

                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="group-member"><i class="fa fa-user"></i> 个人信息</a>
                            </li>

                            <li>
                                <a href="<?php echo Yii::$app->urlManagerBackend->createAbsoluteUrl('/') ?>"><i class="fa fa-calendar"></i> 进入前台</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?php echo Url::to(['site/logout']) ?>" ><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#mmenu"><i class="fa fa-comments"></i></a>
                    </li>
                </ul>
                <!-- /Quick Actions -->



                <!-- Sidebar -->
                <ul class="nav navbar-nav side-nav" id="sidebar">

                    <li class="collapsed-content">
                        <ul>
                            <li class="search"><!-- Collapsed search pasting here at 768px --></li>
                        </ul>
                    </li>
<!--新闻与留言模块-->
                    <li class="navigation" id="navigation">
                        <a href="#" class="sidebar-toggle" data-toggle="#navigation">文章管理<i class="fa fa-angle-up"></i></a>

                        <ul class="menu">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-list"></i> 我的文章 <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo Url::to(['news/my-articles', 'id' =>Yii::$app->user->identity->getId()])?>">
                                            <i class="fa fa-caret-right"></i> 我发布的文章
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Url::to(['news/new-article', 'id' =>Yii::$app->user->identity->getId()])?>">
                                        <i class="fa fa-caret-right"></i> 新建文章
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-pencil"></i> 我的留言 <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo Url::to(['comment/manage','id' =>Yii::$app->user->identity->getId()])?>">
                                            <i class="fa fa-caret-right"></i> 收到的留言
                                        </a>
                                    </li>
                                    <li>
                                        <a href="typography.html">
                                            <i class="fa fa-caret-right"></i> 给好友留言
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
<!--作业展示模块-->
                    <li class="navigation" id="general-settings">
                        <a href="#" class="sidebar-toggle underline" data-toggle="#general-settings">作业展示 <i class="fa fa-angle-up"></i></a>
                        <ul class="menu">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-list"></i> 团队 <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="group-member">
                                            <i class="fa fa-caret-right"></i> 介绍
                                        </a>
                                    </li>
                                    <li>
                                        <a href="homework-group">
                                            <i class="fa fa-caret-right"></i> 文档
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-pencil"></i> 个人作业 <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo Url::to(['homework/personal','id' =>1])?>">
                                            <i class="fa fa-caret-right"></i> 张缴怡
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Url::to(['homework/personal', 'id' =>2])?>">
                                            <i class="fa fa-caret-right"></i> 刘子晨
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Url::to(['homework/personal', 'id' => 3 ])?>">
                                            <i class="fa fa-caret-right"></i> 吴明亮
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Url::to(['homework/personal', 'id' => 4 ])?>">
                                            <i class="fa fa-caret-right"></i> 吴轩羽
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
<!--世界杯数据操作-->
                    <li class="navigation" id="order-summary">
                        <a href="#" class="sidebar-toggle " data-toggle="#order-summary"> 世界杯<i class="fa fa-angle-up"></i></a>

                        <ul class="menu">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-list"></i> 球队相关 <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo Url::to(['team-list'])?>">
                                            <i class="fa fa-caret-right"></i> 球队信息管理
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo Url::to(['player-list'])?>">
                                            <i class="fa fa-caret-right"></i> 球员信息管理
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-pencil"></i> 赛程相关 <b class="fa fa-plus dropdown-plus"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo Url::to(['games/games'])?>">
                                            <i class="fa fa-caret-right"></i> 赛程管理
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="navigation">
                        <a href="upload-file" class="sidebar-toggle " data-toggle="#">上传附件</a>
                    </li>

                </ul>
                <!-- Sidebar end -->





            </div>
            <!--/.nav-collapse -->





        </div>
        <!-- Fixed navbar end -->






        <!-- Page content -->
        <div id="content" class="col-md-12">









            <!-- page header -->
            <div class="pageheader">


                <h2><i class="fa fa-tachometer"></i> 欢迎老师
                    <span>莅临后台</span></h2>



            </div>
            <!-- /page header -->






            <!-- content main container -->
            <div class="main">
                <?= $content ?>
            </div>
            <!-- /content container -->

        </div>
        <!-- Page content end -->






    </div>
    <!-- Make page fluid-->




</div>
<!-- Wrap all page content end -->



<section class="videocontent" id="video"></section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php

//AppAsset::addCSS($this,Yii::$app->request->baseUrl."/css/blog.css");
//AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/jquery.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/bootstrap/bootstrap.min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/mmenu/js/jquery.mmenu.min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/sparkline/jquery.sparkline.min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/nicescroll/jquery.nicescroll.min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/animate-numbers/jquery.animateNumbers.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/videobackground/jquery.videobackground.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/blockui/jquery.blockUI.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/flot/jquery.flot.min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/flot/jquery.flot.time.min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/flot/jquery.flot.selection.min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/flot/jquery.flot.animator.min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/flot/jquery.flot.orderBars.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/easypiechart/jquery.easypiechart.min.js");

AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/rickshaw/raphael-min.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/rickshaw/d3.v2.js");
AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/rickshaw/rickshaw.min.js");

AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/morris/morris.min.js");

AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/tabdrop/bootstrap-tabdrop.min.js");

AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/summernote/summernote.min.js");

AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/vendor/chosen/chosen.jquery.min.js");

AppAsset::addScript($this,Yii::$app->request->baseUrl."/js/minimal.min.js");
?>

<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>
