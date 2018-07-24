<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
$this->title = '德塔贝斯-所有文章';
?>
<!DOCTYPE html>
<html>
<body>

<!-- Page Content -->
<section class="blog-w3ls">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header text-center">文章</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">主页</a>
                    </li>
                    <li class="active">所有文章</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- First Blog Post -->
                <?php $i=0;$image1="images/all-article-1.jpeg";$image2="images/all-article-2.png";$image3="images/all-article-3.jpg";?>
                <?php foreach ($this->params['data'] as $news){
                    if($i%3==0)
                        $image=$image1;
                    else if($i%3==1)
                        $image=$image2;
                    else
                        $image=$image3;
                    $i++;
                    ?>
                    <h3><a href="<?php echo Url::to(['news/article', 'id' =>$news['NID']])?>"><?= $news['Title']?></a></h3>
                    <p class="lead">by <a><?= $news['username']?></a></p>
                    <p class="blog-agile1"><i class="fa fa-clock-o"></i> 发布于 <?= $news['PublishTime']?></p>
                    <hr>
                    <a href="<?php echo Url::to(['news/article', 'id' =>$news['NID']])?>">
                        <div class="hover01 column">
                            <div>
                                <figure><img class="img-responsive img-hover" src="<?= $image ?>" alt=""></figure>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <p class="blog-agile2"><?= $news['Keywords']?></p>
                    <a class="btn btn-primary" href="<?php echo Url::to(['news/article', 'id' =>$news['NID']])?>">Read More <i class="fa fa-angle-right"></i></a>
                <hr>
                <?php }?>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <section class="blogwell-w3ls">
                    <!-- Blog Categories Well -->
                    <div class="well">
                        <h4>最新文章</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled">
                                    <?php  $i=0;
                                    foreach ($this->params['data'] as $news){
                                        $i++;?>
                                        <li><a href="<?php echo Url::to(['news/article', 'id' =>$news['NID']])?>"><span class="fa fa-hand-o-right" aria-hidden="true"  style="font-size: 11px"></span><span  style="font-size: 12px"><?= $news['Title']?></span><span style="font-size: 11px" class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php
                                        if($i==10)
                                            break;
                                    }?>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <hr>
    </div>
</section>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for banner section -->
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
<!-- /js for banner section -->
<!-- /js files -->
</body>
</html>