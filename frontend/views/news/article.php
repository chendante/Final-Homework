<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
$this->title = '德塔贝斯-文章';
?>
<!DOCTYPE html>
<html>
<body>

<section class="blog-post">
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($this->params['data1'] as $news){
                ?>
                <h2 class="page-header text-center"><?= $news['Title']?>
                    <small>by <a ><?= $news['username']?></a>
                    </small>
                </h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">主页</a>
                    </li>
                    <li><a href="<?php echo Url::to('all-article')?>">所有文章</a></li>
                    <li class="active">文章</li>
                </ol>
                <?php }?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <p class="blogpost-w3ls"><i class="fa fa-clock-o"></i> Posted on May 28, 2016 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <div class="hover01 column">
                    <div>
                        <figure><img class="img-responsive blogpost-img-w3ls" src="images/blogpost-img.jpg" alt=""></figure>
                    </div>
                </div>

                <hr>

                <!-- Post Content -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
                <p class="blogpost-agile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p class="blogpost-agile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="#" method="post" role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" id="comments" name="comments"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
                .
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <div class="hover01 column">
                            <div>
                                <figure><img class="media-object" src="images/blogpost1.jpg" alt=""></figure>
                            </div>
                        </div>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Vanity Fair
                            <small>May 28, 2016 at 9:30 PM</small>
                        </h4>
                        <p class="blogpost-agileits">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <div class="hover01 column">
                            <div>
                                <figure><img class="media-object" src="images/blogpost2.jpg" alt=""></figure>
                            </div>
                        </div>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Vanity Fair
                            <small>May 29, 2016 at 9:30 PM</small>
                        </h4>
                        <p class="blogpost-agileits">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <div class="hover01 column">
                                    <div>
                                        <figure><img class="media-object" src="images/blogpost3.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Vanity Fair
                                    <small>May 30, 2016 at 9:30 PM</small>
                                </h4>
                                <p class="blogpost-agileits">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 blog-post-w3layouts">
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>最新文章</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php  $i=0;
                                foreach ($this->params['data2'] as $news){
                                    $i++;?>
                                    <li><a href="#"><span class="fa fa-hand-o-right" aria-hidden="true"  style="font-size: 11px"></span><span  style="font-size: 12px"><?= $news['Title']?></span><span style="font-size: 11px" class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
                                    <?php
                                    if($i==10)
                                        break;
                                }?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>


    </div>
    <!-- /.container -->

</section>
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