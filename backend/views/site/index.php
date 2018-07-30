<?php
/**

 *Team:德塔贝斯

 *Coding by 张缴怡, 1611400, 20180726
 *Coding by 吴轩羽, 1611332, 20180726

 *此为后台的首页

 */ 
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>


<!-- work section -->

    <div class="col-md-12">

        <section id="work" class="col-md-12">
        <div class="row col-md-12">
                    <h1 class="heading bold">Welcome to the background system</h1>
                    <hr>
        </div>
        <div class="row">
            <a href="<?php echo Url::to(['news/my-articles', 'id' =>Yii::$app->user->identity->getId()])?>">
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                <h2><i class="fa fa-file-text"></i></h2>
                <h3>查看发布的文章</h3>
                <hr>
                <p>可以查看您发布的文章，并进行修改、删除或新建。</p>
            </div></a>
            <a href="<?php echo Url::to(['comment/manage','id' =>Yii::$app->user->identity->getId()])?>">
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
                <h2><i class="fa fa-keyboard-o"></i></h2>
                <h3>查看留言</h3>
                <hr>
                <p> 您可以查看您发布的所有文章收到的留言。</p>
            </div>
            </a>

            <a href="group-member">
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                <h2><i class="fa fa-user"></i></h2>
                <h3>团队介绍</h3>
                <hr>
                <p> 在本模块中，您可以查看德塔贝斯团队相关信息。</p>
            </div>
            </a>

            <a href="homework-group">
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                <h2><i class="fa fa-tachometer"></i></h2>
                <h3>团队作业</h3>
                <hr>
                <p>在本模块中，您可以查看德塔贝斯团队的作业，并进行下载或预览。</p>
            </div>
            </a>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                <h2><i class="fa fa-pencil-square"></i></h2>
                <h3>球队</h3>
                <hr>
                <p>在本模块中，您可以查看球队相关的信息，并对其进行相应的操作。您的操作均会修改数据库相关内容，并改变前台显示的内容。</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                <h2><i class="fa fa-folder"></i></h2>
                <h3>赛程</h3>
                <hr>
                <p>在本模块中，您可以查看赛程相关信息，并对其进行相应操作。您的操作均会修改数据库相关内容，并改变前台显示的内容。</p>
            </div>
        </div>

        </section>
    </div>

<style>
    #work {
        padding-top: 25px;
        padding-bottom: 25px;
    }

    /* ==========================================================================
    work section
    ========================================================================== */
    #work {
        text-align: center;
        background-color: #F5F5F5;
    }
    #work .col-md-4 {
        padding: 20px;
        position: relative;
        transition: all 0.4s ease-in-out;
    }
    #work .col-md-4:hover {
        background-color: #ffffff;
        box-shadow: 0px 2px 8px 0px rgba(50, 50, 50, 0.20);
    }
    #work h3 {
        font-size: 24px;
        font-family: "微软雅黑";
    }
     h1 {
        font-size: 3em;
        padding: 0 0.5em 0em 0.5em;
        border-bottom: solid 2px #ffffff;
        font-weight: 200;
        font-family: "Adobe Garamond Pro", cursive;
        text-transform: none;
        letter-spacing: 0;
    }
    a{
        color:black;
    }
   </style>
