<?php
/**

 *Team:德塔贝斯

 *Coding by 张缴怡, 1611400, 20180725

 *此为后台文章模块新建文章页面

 */ 
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>


<!DOCTYPE html>
<body>
<!-- row -->
<div class="row">
    <?php if($this->params['IsSuccess']==1){echo "<script>alert('操作成功')</script>";} ?>

    <?php if($this->params['IsSuccess']==2){echo "<script>alert('操作失败')</script>";} ?>
    <!-- col 12 -->
    <div class="col-md-12">
        <!-- tile -->
        <section class="tile color transparent-black filled withoutHeader">
            <!-- tile header -->
            <div class="tile-header">
                <h1><strong>德塔贝斯</strong> 文章</h1>
                <div class="controls">
                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                    <a href="#" class="remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <!-- /tile header -->
            <!-- tile body -->
            <div class="tile-body">

                    <div class="row fileupload-buttonbar filled withoutHeader" >
                        <div class="col-lg-4" style="width: 100%">
                            <?php $form=ActiveForm::begin([
                            ])?>
                            <?= $form->field($model, 'Title',['labelOptions' => ['label' => '文章标题']])->textarea();?>
                            <?= $form->field($model, 'Content',['labelOptions' => ['label' => '文章内容']])->widget(\yii\redactor\widgets\Redactor::className()) ?>
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
    <!-- /col 12 -->
</body>
</html>

