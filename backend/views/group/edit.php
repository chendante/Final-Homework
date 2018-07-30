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
/**

 *Team:德塔贝斯

 *Coding by 吴轩羽 1611332

 *成员模块-修改成员信息 view层

 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->title = '成员展示';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">

<body>
<div class="row">
    <?php if($this->params['IsSuccess']==1){echo "<script>alert('修改成功，请点击 团队-介绍 进行查看')</script>";} ?>

    <?php if($this->params['IsSuccess']==2){echo "<script>alert('修改失败')</script>";} ?>
    <!-- col 12 -->
    <div class="col-md-12">
        <!-- tile -->
        <section class="tile color transparent-black filled withoutHeader">
            <!-- tile header -->
            <div class="tile-header">
                <h1><strong>德塔贝斯</strong> 个人信息</h1>
                <div class="controls">
                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                    <a href="#" class="remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <!-- /tile header -->
            <!-- tile body -->
            <div class="tile-body">

                <div class="row fileupload-buttonbar filled withoutHeader" >
                    <div class="col-lg-4" style="width: 50%">
                        <?php $form=ActiveForm::begin([
                        ])?>
                        <?= $form->field($model, 'StudentName',['labelOptions' => ['label' => '成员姓名' ]])->textarea();?>
                        <?= $form->field($model, 'ResponsiblePart',['labelOptions' => ['label' => '负责部分']])->textarea();?>
                        <?= $form->field($model, 'StudentMajor',['labelOptions' => ['label' => '学生专业']])->textarea();?>
                    </div>
                        <div class="col-lg-4" style="width: 100%">
                        <?= $form->field($model, 'PersonalProfile',['labelOptions' => ['label' => '个人简介']])->widget(\yii\redactor\widgets\Redactor::className()) ?>
                        <button type="submit" class="btn btn-primary">提交</button>
                        <?php ActiveForm::end(); ?>
                        <span class="fileupload-process"></span>
                    </div>
                </div>
                <br>
            </div>
        </section>
    </div>
</div>
</body>

</html>