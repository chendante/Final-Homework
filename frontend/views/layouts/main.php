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
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
    <!-- /fonts -->
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/typo.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/trend.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/info.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="wrap">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><h1>德塔贝斯</h1></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">主页</a></li>
                    <li><a href="about.html">文章</a></li>
                    <li><a href="service.html">球队信息</a></li>
                    <li><a href="blog.html">比赛信息</a></li>
                    <?php if(\Yii::$app->user->isGuest) { ?>

                        <li><a href="<?php echo Url::to(['site/login']) ?>" ></span>
                            Login
                        </a></li>
                    <?php }else{?>

                    <li><a href="<?php echo Yii::$app->urlManagerFrontend->createAbsoluteUrl('/') ?>" ><span class="fa fa-home" aria-hidden="true"></span>
                        <?=\YII::$app->user->identity->username ?></a></li>

                    <li><a href="<?php echo Url::to(['site/logout']) ?>"><span class="fa fa-shield" aria-hidden="true"></span>logout</a></li>

                    <?php } ?>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
<div id="slider" class="slider-container">
    <ul class="slider">
        <li class="slide">
            <div class="slide-bg">
                <img src="images/banner1.jpg" alt="An Image" draggable="false">
            </div>
            <div class="slide-content">
                <h3>We Bring Fashion To Life</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="about.html">Read More</a>
            </div>
        </li>
        <li class="slide">
            <div class="slide-bg">
                <img src="images/banner2.jpg" alt="An Image" draggable="false">
            </div>
            <div class="slide-content">
                <h3>The Power Of Fashion</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="about.html">Read More</a>
            </div>
        </li>
        <li class="slide">
            <div class="slide-bg">
                <img src="images/banner3.jpg" alt="An Image" draggable="false">
            </div>
            <div class="slide-content">
                <h3>Fashion, See More, Do More</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="about.html">Read More</a>
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
            <div class="col-lg-3 col-md-3 col-sm-6 footer-contact">
                <h3>Our Contacts</h3>
                <hr>
                <div class="footer-addr">
                    <div>
                        <span class="fa fa-map" aria-hidden="true"></span>
                        <p class="footer-p">Company Name</p>
                    </div>
                    <div>
                        <span class="fa fa-map-signs" aria-hidden="true"></span>
                        <p class="footer-p">Street Name & Number,</p>
                    </div>
                    <div>
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <p class="footer-p">Town, Zip Code</p>
                    </div>
                    <div>
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <p class="footer-p">0101010101010</p>
                    </div>
                    <div>
                        <a href="mailto:#">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            <p class="footer-p">mail@example.com</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 footer-links">
                <h3>Quick Links</h3>
                <hr>
                <ul class="footer-links-w3ls">
                    <li><a href="index.html"><span class="fa fa-home" aria-hidden="true"></span> <p>Home</p></a></li>
                    <li><a href="about.html"><span class="fa fa-shield" aria-hidden="true"></span> <p>About</p></a></li>
                    <li><a href="service.html"><span class="fa fa-cogs" aria-hidden="true"></span> <p>Services</p></a></li>
                    <li><a href="blog.html"><span class="fa fa-pencil-square-o" aria-hidden="true"></span> <p>Blog</p></a></li>
                    <li><a href="contact.html"><span class="fa fa-globe" aria-hidden="true"></span> <p>Contact</p></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer-blog">
                <h3>From The Blog</h3>
                <hr>
                <div class="footer-blog-w3ls">
                    <h4>Lorem Ipsum Dolor</h4>
                    <p class="footer-blog1">Friday, 6th April 2016</p>
                    <p class="footer-blog2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer-subsc">
                <h3>Keep In Touch</h3>
                <hr>
                <div class="footer-subsc-w3ls">
                    <form action="#" method="post" class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="email" class="form-control" name="email" id="inputEmail1" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="name" id="text1" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn-outline">Subscribe</button>
                            </div>
                        </div>
                    </form><!-- form -->
                </div>
                <ul class="social-icons2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <div class="copyright">
            <p>Copyright &copy; 2016.Company name All rights reserved. <a href="" target="_blank" title="德塔贝斯">德塔贝斯</a>
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
