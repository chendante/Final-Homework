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

<!-- Top content -->
<section class="tile transparent">


    <!-- tile header -->
    <div class="tile-header transparent">
        <h1><strong>团队</strong> 作业</h1>
    </div>
    <!-- /tile header -->

    <!-- tile body -->
    <div class="tile-body color transparent-black rounded-corners">

        <div class="table-responsive">
            <table  class="table table-datatable table-custom" id="advancedDataTable">
                <thead>
                <tr>
                    <th class="sort-alpha">文档名称</th>
                    <th class="sort-alpha">简介</th>
                    <th class="sort-amount">大小</th>
                    <th class="sort-numeric">预览</th>
                    <th class="sort-numeric">下载</th>

                </tr>

                </thead>
                <tbody>
                <?php foreach ($this->params['data'] as $homework){?>
                <tr class="odd gradeX">
                    <td><?= $homework['HomeworkName']?></td>
                    <td>Internet Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td class="text-center"> 4</td>

                    <td>    <a href= <?= dirname(dirname(Yii::$app->getHomeUrl())). $this->params['data'][0]['Path'] ?> >下载</a>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>

    </div>
    <!-- /tile body -->



</section>
<!-- Javascript -->

</body>

</html>