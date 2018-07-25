<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- fonts -->
<!--    editor:吴轩羽-->
<!--    谷歌字体在国内可能无法访问-->
<!--    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>-->
    <!-- /fonts -->
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/typo.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/trend.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/info.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="wrap">
                    <?php
                    NavBar::begin([
                        'brandLabel' => '德塔贝斯',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar-inverse navbar-default navbar-fixed-top',
                        ],
                    ]);
                    $menuItems = [
                        ['label' => '文章', 'url' => ['/all-article'],
                        'options'=> ['class'=>yii::$app->controller->id=="news"?"active":""],
                        ],
                        ['label' => '球队信息', 'url' => ['/world-cup-team-data'],
                            'options'=> ['class'=>yii::$app->controller->id=="world-cup-team"?"active":""],
                        ],
                        ['label' => '比赛信息', 'url' => ['/games'],
                            'options'=> ['class'=>yii::$app->controller->id=="games"?"active":""],
                        ],
                    ];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/signup']];
                        $menuItems[] = ['label' => 'Login', 'url' => ['/login']];
                    } else {
                        $menuItems[] = [
                            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ];
                    }
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => $menuItems,
                    ]);
                    NavBar::end();
                    ?>
</div>
    <div id="slider" class="slider-container2">
        <ul class="slider">
            <li class="slide">
                <div class="slide-bg">
                    <img src="images/banner1.jpg" alt="An Image" draggable="false">
                </div>
            </li>
            <li class="slide">
                <div class="slide-bg">
                    <img src="images/banner2.jpg" alt="An Image" draggable="false">
                </div>
            </li>
            <li class="slide">
                <div class="slide-bg">
                    <img src="images/banner3.jpg" alt="An Image" draggable="false">
                </div>
            </li>
        </ul>
        <div class="slider-controls">
            <div class="slide-nav">
                <a href="#" class="prev"><img src="images/prev.png" alt="w3layouts"></a>
                <a href="#" class="next"><img src="images/next.png" alt="w3layouts"></a>
            </div>
            <ul class="slide-list">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="main">
    <?= $content ?>
</div>
<!-- footer section -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 footer-contact">
                <h3>Our Contacts</h3>
                <hr>
                <div class="footer-addr">
                    <div>
                        <span class="fa fa-map" aria-hidden="true"></span>
                        <p class="footer-p">Database Team</p>
                    </div>
                    <div>
                        <span class="fa fa-map-signs" aria-hidden="true"></span>
                        <p class="footer-p">Computer Science and Technology</p>
                    </div>
                    <div>
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <p class="footer-p">Nankai University</p>
                    </div>
                    <div>
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <p class="footer-p">530530530</p>
                    </div>
                    <div>
                        <a href="mailto:#">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <p class="footer-p">459294193@qq.com</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 footer-links">
                <h3>Quick Links</h3>
                <hr>
                <ul class="footer-links-w3ls">
                    <li><a href="#"><span class="fa fa-home" aria-hidden="true"></span> <p>Home</p></a></li>
                    <li><a href="all-article"><span class="fa fa-shield" aria-hidden="true"></span> <p>文章</p></a></li>
                    <li><a href="world-cup-team-data"><span class="fa fa-cogs" aria-hidden="true"></span> <p>球队信息</p></a></li>
                    <li><a href="games"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> <p>比赛信息</p></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footer-blog">
                <h3>Related websites</h3>
                <hr>
                <ul class="footer-links-w3ls">
                    <li><a href="https://cc.nankai.edu.cn"><span class="fa fa-home" aria-hidden="true"></span> <p>计算机学院</p></a></li>
                    <li><a href="http://cc.nankai.edu.cn/dbis/frontend/web"><span class="fa fa-shield" aria-hidden="true"></span> <p>DBIS实验室</p></a></li>
                    <li><a href="http://www.nankai.edu.cn/"><span class="fa fa-cogs" aria-hidden="true"></span> <p>南开大学</p></a></li>
                    <li><a href="http://jwc.nankai.edu.cn/"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> <p>南开大学教务处</p></a></li>
                    <li><a href="http://eamis.nankai.edu.cn"><span class="fa fa-globe" aria-hidden="true"></span> <p>教学管理系统</p></a></li>
                </ul>
            </div>
<!--            <div class="col-lg-3 col-md-3 col-sm-6 footer-subsc">-->
<!--                <h3>Keep In Touch</h3>-->
<!--                <hr>-->
<!--                <div class="footer-subsc-w3ls">-->
<!--                    <form action="#" method="post" class="form-horizontal" role="form">-->
<!--                        <div class="form-group">-->
<!--                            <div class="col-lg-12">-->
<!--                                <input type="email" class="form-control" name="email" id="inputEmail1" placeholder="Email" required>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <div class="col-lg-12">-->
<!--                                <input type="text" class="form-control" name="name" id="text1" placeholder="Your Name" required>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <div class="col-lg-12">-->
<!--                                <button type="submit" class="btn-outline">Subscribe</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form><!-- form -->-->
<!--                </div>-->
<!--                <ul class="social-icons2">-->
<!--                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                </ul>-->
<!--            </div>-->
        </div>
    </div>
    <div class="container">
        <hr>
        <div class="copyright">
            <p>Copyright &copy; 2018. Database Team. All rights reserved. <a href="" target="_blank" title="德塔贝斯">德塔贝斯</a>
        </div>
    </div>
</section>
<!-- footer section -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for banner section -->
<script src="js/bliss-slider.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $("#slider").blissSlider({
            auto: 1,
            transitionTime: 500,
            timeBetweenSlides: 4000
        });
    });
</script>
<!-- /js for banner section -->
<!-- /js files -->
</body>
</html>
<?php $this->endPage() ?>
