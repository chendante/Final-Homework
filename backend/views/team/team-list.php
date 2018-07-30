<?php
/**

 *Team:德塔贝斯

 *Coding by 刘子晨

 *代码介绍：
 * 球队信息列表，在该页面点击想要更改信息的球队，进入球队信息更改页面

 */
use yii\helpers\Url;
$this->title='德塔贝斯-球队列表';
?>

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript"></script>
<section class="tile color transparent-black">

    <!-- tile header -->
    <div class="tile-header">
        <h1>
            <strong>球队</strong> 管理</h1>
        <div class="controls">
            <a href="#" class="refresh">
                <i class="fa fa-refresh"></i>
            </a>
        </div>
    </div>
    <!-- /tile header -->

    <!-- tile body -->
    <div class="tile-body nopadding">

        <table class="table">
            <thead>
            <tr>
                <th>球队id</th>
                <th>球队名称</th>
                <th>教练名</th>
                <th>重要球星</th>
                <th>最好成绩</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->params['data'] as $game) {
                ?>
                <tr>
                    <td><?=$game['tid']?></td>
                    <td><?=$game['team_name']?></td>
                    <td><?=$game['coach']?></td>
                    <td><?=$game['king']?></td>
                    <td><?=$game['honor']?></td>
                    <td><a href="<?php echo Url::to(["team-update",'id' => $game['tid']])?>">更新</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
    <!-- /tile body -->


</section>

