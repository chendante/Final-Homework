<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->title = '德塔贝斯-文章';
?>
<!DOCTYPE html>
<html>
<body>
<?php if($this->params['IsSuccess']==1){echo "<script>alert('评论成功')</script>";} ?>

<?php if($this->params['IsSuccess']==2){echo "<script>alert('评论失败')</script>";} ?>

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
                <p class="blogpost-w3ls"><i class="fa fa-clock-o"></i> 发布于 <?= $news['PublishTime']?></p>
                <?= $news['Content']?>
                <hr>
                <?php }?>
                <!-- Blog Comments -->

                <!-- Comments Form -->
                    <div class="well">
                        <?php $form=ActiveForm::begin([
                        ])?>
                        <h4>留言</h4>
                            <div class="form-group">
                                <?= $form->field($model, 'CommentContent',['labelOptions' => ['label' => '']]);?>
                            </div>
                            <button type="submit" class="btn btn-primary">提交</button>
                        <?php ActiveForm::end(); ?>
                    </div>


                <hr>
                <!-- Posted Comments -->
                <?php foreach ($this->params['data3'] as $comments){
                    ?>.
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left">
                        <div class="hover01 column">
                            <div>
                                <figure><img class="media-object" src="images/timg.jpg" alt=""></figure>
                            </div>
                        </div>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?= $comments['username']?>
                            <small> 回复 </small>
                            <small>
                                <?php if($comments['Type']==0){?>本文<?php }?></small>
                            <small>
                                <?php if($comments['Type']!=0){?><?= $comments['CommentName']?><?php }?></small>
                            <small><?= $comments['CommentTime']?></small>
                        </h4>
                        <p class="blogpost-agileits"><?= $comments['CommentContent']?></p>
                    </div>
                </div><hr>
                <?php }?>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4" style="float: right">
                <section class="blogwell-w3ls">
                    <!-- Blog Categories Well -->
                    <div class="well">
                        <h4>最新文章</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled">
                                    <?php  $i=0;
                                    foreach ($this->params['data2'] as $news){
                                        $i++;?>
                                        <li><a href="<?php echo Url::to(['news/article', 'id' =>$news['NID']])?>"><span class="fa fa-hand-o-right" aria-hidden="true"  style="font-size: 11px"></span><span  style="font-size: 12px"><?= $news['Title']?></span><span style="font-size: 11px" class="fa fa-hand-o-left" aria-hidden="true"></span></a></li>
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
                </section>
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
<style>
    endText {
        width: auto;
        margin: 0;
        font: 18px/32px "Microsoft Yahei","Hiragino Sans GB","sans-serif";
        color: #404040;
    }
    endText {
        font-size: 16px;
        line-height: 28px;
    }
    endText {
        width: 580px;
        margin-right: 10px;
        overflow: hidden;
        text-align: justify;
        text-justify: inter-ideograph;
        clear: both;
        font-size: 14px;
        line-height: 24px;
        padding-bottom: 20px;
        word-wrap: break-word;
    }
    div {
        display: block;
    }
    #endText p{
        font-size: 16px;
        text-indent: 2em;
        margin: 26px 0;
    }
</style>