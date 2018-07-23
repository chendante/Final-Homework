<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
$this->title = '上传页面';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<body>




    <!-- row -->
    <div class="row">

        <!-- col 12 -->
        <div class="col-md-12">



            <!-- tile -->
            <section class="tile color transparent-black">



                <!-- tile header -->
                <div class="tile-header">
                    <h1><strong>德塔贝斯</strong> 后台上传页面</h1>
                    <div class="controls">
                        <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <?php if($this->params['IsUp']==1){echo "<script>alert('上传成功')</script>";} ?>

                <?php if($this->params['IsUp']==2){echo "<script>alert('上传失败')</script>";} ?>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body">

                    <blockquote class="filled withoutHeader">
                        <p>
                      这里是后台上传页面，在这里你可以上传个人作业、团队作业等内容。
                        </p>
                    </blockquote>

                    <!-- The file upload form used as target for the file upload widget -->
                    <form id="fileupload" action="upload-file" method="POST" enctype="multipart/form-data">
                        <!-- Redirect browsers with JavaScript disabled to the origin page -->
                        <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->

                        <div class="row fileupload-buttonbar">
                            <div class="col-lg-4">
                                <?php $form=ActiveForm::begin([
                                ])?>
                                <?= $form->field($model, 'file')->fileInput(['multiple' => true]);?>
                                <?= $form->field($model, 'category')->dropdownList([
                                            1 => '个人作业',
                                            2 => '团队作业'
                                ]);?>
                                <?= $form->field($model, 'student',['labelOptions' => ['label' => '成员序号(个人作业必填)']]);?>
                                <?= $form->field($model, 'mark',['labelOptions' => ['label' => '简介']]);?>
                                <?php ActiveForm::end(); ?>
                                <button type="submit" class="btn btn-cyan start">
                                    <i class="fa fa-upload"></i>
                                    <span> Start upload</span>
                                </button>

                                <!-- The global file processing state -->
                                <span class="fileupload-process"></span>

                            </div>

                            <!-- The global progress state -->
                            <div class="col-lg-5 fileupload-progress fade">
                                <!-- The global progress bar -->
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </form>
                    <br>
                </div>
            </section>
        </div>
        <!-- /col 12 -->

</body>
</html>


