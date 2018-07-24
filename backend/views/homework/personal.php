<?php
/**
 * Created by PhpStorm.
 * User: PAI
 * Date: 2018/7/20
 * Time: 23:30
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;

$this->title = '团队作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">

<body>
<div class="main vertical-mail">




    <!-- row -->
    <div class="row" id="koko">

        <div class="col-md-4">
        <?php $work=null ;$po=0;?>

            <ul class="inbox" id="mail-inbox">
                <li class="heading"><h1><?=$this->params['data'][0]['StudentName'] ?></h1></li>
                <li class="search"><i class="fa fa-search"></i> <input type="text" placeholder="Search in inbox..." /></li>
                <?php foreach ($this->params['data'] as $homework){?>
                    <li class="msg" id="home<?= $po?>" onclick="test(id)">
                        <a href="#"  class="mail-favourite active"><i class="fa fa-star-o"></i></a>
                        <div>
                            <h5><strong><?=$this->params['data'][0]['StudentName'] ?></strong></h5>
                            <p><strong><?=$homework['HomeworkName'] ?></strong></p>
                            <div class="mail-label bg-red"></div>
                        </div>
                    </li>
                <?php $po++;}?>
            </ul>
        </div>




        <div class="col-md-8" >
            <div class="mail-content" id="mail-content">

                <div class="message" id="preindex" style="display:">
                    <div class="header">
                        <h1><strong>
                            作业简介
                            </strong></h1>
                        <ul class="message-info">
                            <li></li>
                        </ul>
                    </div>
                    <div class="content">
                        <p>
                            -------------此处为作业的相关信息和下载链接,请在左边选择一个作业-------------
                        </p>
                        </div>
                </div>
                <?php $tpo=0;foreach ($this->params['data'] as $homework){?>
                <div class="message" id="phome<?= $tpo?>" style="display: none">
                        <div class="header">
                            <h1><strong>
                                    <?=$homework['HomeworkName']?>
                                </strong></h1>
                        </div>
                        <div class="content">
                            <p><?=$homework['Mark']?>
                                  </p>

                            <h4 class="filled"><i class="icon-tags"></i> Attachments</h4>
                            <div class="filled">
                                <ul class="attachments">
                                    <li><span class="label label-warning">zip</span> <em>zipped_file.zip (2,9MB) <span class="att-actions"><i class="fa fa-download att-download"></i></span></em></li>
                                </ul>
                            </div>
                        </div>
                </div>
                    <?php $tpo++;}?>
            </div>
        </div>


    </div>
    <!-- /row -->



</div>
<!-- /content container -->

</div>
<!-- Top content -->
</body>
<script>
function test(id) {
    var p=<?=$tpo ?>;
    for(var i=0;i<p;i++){
        document.getElementById("phome"+i).style.display="none";
    }
    console.log("p"+id);
    document.getElementById("preindex").style.display="none";
    document.getElementById("p"+id).style.display="";
    console.log(<?=$tpo ?>);
}
</script>
</html>