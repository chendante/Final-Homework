<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>
<?php if($this->params['IsSuccess']==1){echo "<script>alert('编辑成功')</script>";} ?>

<?php if($this->params['IsSuccess']==2){echo "<script>alert('编辑失败')</script>";} ?>
<div class="row">
    <div class="col-md-4">
        <?php $article=null ;$po=0;?>
        <ul class="inbox" id="mail-inbox">
            <li class="heading"><h1>文章</h1></li>
            <?php foreach ($this->params['data'] as $news){?>
            <li class="msg" id="home<?= $po?>" onclick="test(id)">

                <a href="#" class="mail-favourite acti
ve"><i class="fa fa-star-o"></i></a>
                <div>
                    <h5><strong><?= $news['Title']?></strong> </h5>
                    <p><?= $news['Keywords']?></p>
                    <span class="delivery-time"><?= $news['PublishTime']?></span>
                    <div class="mail-label bg-red"></div>
                    <div class="mail-actions">
                        <a href="#" class="delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
            </li><?php $po++;}?>
        </ul>
    </div>


    <div class="col-md-8">

        <div class="mail-content" id="mail-content">
            <div class="message" id="preindex" style="display:">
                <div class="header">
                    <h1><strong>
                            栏目简介
                        </strong></h1>
                    <ul class="message-info">
                        <li></li>
                    </ul>
                </div>
                <div class="content">
                    <p>
                        -------------此处为您发表的文章,请在左边选择一个文章进行相关操作-------------
                    </p>
                </div>
            </div>

            <?php $tpo=0;foreach ($this->params['data'] as $news){?>
            <div class="message" id="phome<?= $tpo?>" style="display: none">
                <div class="header">
                    <h1><strong><?= $news['Title']?></strong></h1>

                    <ul class="message-info">
                        <li>发布日期： <em><?= $news['PublishTime']?></em></li>
                    </ul>

                    <div class="btn-group">
                        <div id="message-wysiwyg"></div>
                            <div class="col-md-4">
                                <a href=" <?php echo Url::to(['news/edit-article','id' =>$news['NID']]) ?>" class="btn btn-greensea">编辑</a></div>
                        <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">删除</button>

                        </div>
                    </div>
                </div>



                <div class="content">
                    <p><?= $news['Content']?></p>

                </div>
            </div>
                <?php $tpo++;}?>
        </div>



    </div>



</div>
<script>
function test(id) {
    var p=<?=$tpo ?>;
    for(var i=0;i<p;i++){
    document.getElementById("phome"+i).style.display="none";
    }
    document.getElementById("preindex").style.display="none";
    document.getElementById("p"+id).style.display="";
}
</script>