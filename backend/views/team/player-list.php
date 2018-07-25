<?php
/**
 * Created by PhpStorm.
 * User: 刘子晨
 * Date: 2018/7/25
 * Time: 23:12
 */
$this->title='德塔贝斯-球员列表'
?>

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript"></script>
<section class="tile color transparent-black">

    <!-- tile header -->
    <div class="tile-header">
        <h1>
            <strong>球员</strong> 管理</h1>
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
                <th>球员id</th>
                <th>球员</th>
                <th>球队</th>
                <th>场上位置</th>
                <th>俱乐部名</th>
                <th>生日</th>
                <th>体重</th>
                <th>身高</th>
                <th>球衣号码</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->params['data'] as $game) {
                ?>
                <tr>
                    <td><?=$game['player_id']?></td>
                    <td><?=$game['player_name']?></td>
                    <td><?=$game['team_name']?></td>
                    <td><?=$game['position_cn']?></td>
                    <td><?=$game['club_cn']?></td>
                    <td><?=$game['birth_date']?></td>
                    <td><?=$game['weight']?></td>
                    <td><?=$game['height']?></td>
                    <td><?=$game['jersey_num']?></td>
                    <td><a href="">更新</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
    <!-- /tile body -->


</section>

