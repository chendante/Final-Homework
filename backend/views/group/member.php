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
use yii\helpers\Url;
$this->title = '成员展示';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">

<body>
<div class="main">
    <!-- row -->
    <div class="row">
        <!-- col 12 -->
        <div class="col-md-12 text-center sm-left">
            <h1 class="timeline-heading"><strong>德塔贝斯</strong> 成员信息</h1>
            <ol class="timeline">
                <?php
                $trans=1;
                foreach ($this->params['data'] as $member){
                    if(($trans/2)%2){
                    ?>
                    <li class="color transparent-black">
                        <div class="pointer slategray">
                            <i class="fa fa-compass"></i>
                        </div>
                        <div class="el-container">
                            <div class="side bg-greensea"><i class="fa fa-user"></i></div>
                            <div class="content">

                                <h1><strong><?=$member['StudentName'] ?></strong> <a href="<?php echo Url::to(['group/edit', 'id' => $member["StudentID"] ])?>"  class="btn small button btn-slategray">编辑</a></h1>

                                <p>来自<?=$member['StudentMajor'] ?>专业,负责<?=$member['ResponsiblePart'] ?></p>

                                <p><?=$member['PersonalProfile'] ?>

                            </div>

                        </div>
                    </li>
                    <?php $trans++;} else{?>
                        <li class="color transparent-white">
                            <div class="pointer slategray">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="el-container">
                                <div class="side"><img src="images/carousel/carousel1.jpg" alt></div>
                                <div class="content">
                                    <h1><strong><?=$member['StudentName'] ?></strong> <a href="<?php echo Url::to(['edit', 'id' => $member["StudentID"] ])?>" class="btn small button btn-slategray">编辑</a></h1>
                                    <p>来自<?=$member['StudentMajor'] ?>专业,负责<?=$member['ResponsiblePart'] ?></p>
                                    <p><?=$member['PersonalProfile'] ?></p>
                                </div>
                            </div>
                        </li>
                <?php $trans++;}}?>

            </ol>

            <h1 class="timeline-heading"><strong>Older</strong></h1>


        </div>
        <!-- /col 12 -->



    </div>
    <!-- /row -->




</div>
</body>

</html>