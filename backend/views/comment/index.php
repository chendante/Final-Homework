<?php
/* @var $this yii\web\View */
/**

 *Team:德塔贝斯

 *Coding by 吴轩羽 1611332

 *评论模块 view层

 */
$this->title = 'My Yii Application';
?>
<!-- content main container -->
<div class="main">




    <!-- row -->

    <div class="row">
    <?php
        $trans=-1;
        foreach ($this->params['data'] as $comment){
            $trans++;
            switch(($trans)%3){
            case 0:{
        ?>
    </div>
    <div class="row">
                <div class="col-md-4">
                    <!-- tile -->
                    <section class="tile color transparent-white">


                        <!-- tile header -->
                        <div class="tile-header">
                            <h1><strong>来自 <?=$comment['user']['username'] ?> 的留言</strong></h1>
                            <div class="controls">
                                <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                <a href="#" class="remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <!-- /tile header -->

                        <!-- tile widget -->
                        <div class="tile-widget">

                            <p><?=$comment['CommentTime']?></p>

                        </div>
                        <!-- /tile widget -->

                        <!-- tile body -->
                        <div class="tile-body">

                            <p><?=$comment['CommentContent']?></p>

                        </div>
                        <!-- /tile body -->
                    </section>
                </div>
        <!-- col 4 -->
        <?php
        break;
        }case 1:{?>

                <div class="col-md-4">
                    <section class="tile">
                        <div class="tile-header">
                            <h1><strong>来自 <?=$comment['user']['username'] ?> 的留言</strong></h1>
                            <div class="controls">
                                <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                                <a href="#" class="remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <!-- /tile header -->

                        <!-- tile widget -->
                        <div class="tile-widget">

                            <p><?=$comment['CommentTime']?></p>

                        </div>
                        <!-- /tile widget -->

                        <!-- tile body -->
                        <div class="tile-body">

                            <p><?=$comment['CommentContent']?></p>

                        </div>
                    </section>
                    <!-- /tile -->
                </div>

            <?php
            break;
            }case 2:{?>
    <div class="col-md-4">
        <section class="tile color transparent-black">
            <div class="tile-header">
                <h1><strong>来自 <?=$comment['user']['username'] ?> 的留言</strong></h1>
                <div class="controls">
                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                    <a href="#" class="remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <!-- /tile header -->

            <!-- tile widget -->
            <div class="tile-widget">

                <p><?=$comment['CommentTime']?></p>

            </div>
            <!-- /tile widget -->

            <!-- tile body -->
            <div class="tile-body">

                <p><?=$comment['CommentContent']?></p>

            </div>
        </section>
    </div>

            <?php
            break;
        }}}?>
            <!-- /tile -->
</div>
</div>
    </div>