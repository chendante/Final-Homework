<div class="row">



    <div class="col-md-4">
        <?php $article=null ;$po=0;?>
        <ul class="inbox" id="mail-inbox">
            <li class="heading"><h1>文章</h1></li>
            <li class="search"><i class="fa fa-search"></i> <input type="text" placeholder="Search in inbox..." /></li>
            <?php foreach ($this->params['data'] as $news){?>
            <li class="msg" id="home<?= $po?>" onclick="test(id)">

                <a href="#" class="mail-favourite active"><i class="fa fa-star-o"></i></a>
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

<!--                    <div class="actions">-->
<!--                        <div class="btn-group">-->
<!--                            <button type="button" class="btn btn-default"><i class="fa fa-reply"></i></button>-->
<!--                            <button type="button" class="btn btn-default"><i class="fa fa-mail-reply-all"></i></button>-->
<!--                            <button type="button" class="btn btn-default"><i class="fa fa-share"></i></button>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="btn-group">
                        <form>
                            <div id="message-wysiwyg"></div>
                            <div class="col-md-8">
                            <button type="submit" class="btn btn-greensea">编辑</button></div>
                            <button type="button" class="btn btn-default pull-right"><i class="fa fa-trash-o"></i></button>
                        </form>
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
    console.log("p"+id);
    document.getElementById("preindex").style.display="none";
    document.getElementById("p"+id).style.display="";
    console.log(<?=$tpo ?>);
}
</script>