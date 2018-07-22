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
    <div class="row">
        <?php $work=null ?>

        <div class="col-md-5">

            <ul class="inbox" id="mail-inbox">
                <li class="heading"><h1><?=$this->params['data'][0]['StudentName'] ?></h1></li>
                <li class="search"><i class="fa fa-search"></i> <input type="text" placeholder="Search in inbox..." /></li>
                <?php foreach ($this->params['data'] as $homework){
                    ?>
                    <li class="msg">
                        <a href="#" class="mail-favourite active"><i class="fa fa-star-o"></i></a>
                        <div>
                            <h5><strong><?=$this->params['data'][0]['StudentName'] ?></strong></h5>
                            <p><strong>Mail Message Subject</strong>, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="mail-label bg-red"></div>
                        </div>
                    </li>
                <?php }?>
            </ul>
        </div>


        <div class="col-md-7">


            <div class="mail-content" id="mail-content">

                <div class="message">

                    <div class="header">
                        <h1><strong>< ></strong></h1>

                        <ul class="message-info">
                            <li>简介</li>
                        </ul>
                    </div>

                    <div class="content">

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>


                        <h4 class="filled"><i class="icon-tags"></i> Attachments</h4>
                        <div class="filled">
                            <ul class="attachments">
                                <li><span class="label label-warning">zip</span> <em>zipped_file.zip (2,9MB) <span class="att-actions"><i class="fa fa-eye att-show"></i><i class="fa fa-share att-forward"></i><i class="fa fa-download att-download"></i></span></em></li>
                                <li><span class="label label-success">doc</span> <em>word_document.docx (1,2MB) <span class="att-actions"><i class="fa fa-eye att-show"></i><i class="fa fa-share att-forward"></i><i class="fa fa-download att-download"></i></span></em></li>
                                <li><span class="label label-primary">xls</span> <em>excel_document.xlsx (459KB) <span class="att-actions"><i class="fa fa-eye att-show"></i><i class="fa fa-share att-forward"></i><i class="fa fa-download att-download"></i></span></em></li>
                            </ul>
                        </div>


                    </div>

                </div>
            </div>


        </div>

    </div>
    <!-- /row -->



</div>
<!-- /content container -->






</div>
<!-- Top content -->
</body>

</html>