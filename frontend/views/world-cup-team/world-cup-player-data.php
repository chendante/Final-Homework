<?php
/**
 * Created by PhpStorm.
 * User: 刘子晨
 * Date: 2018/7/24
 * Time: 16:59
 */
$this->title='德塔贝斯-世界杯射手榜';
?>
<head>
    <link href="css/world-cup-team/scoreboardPage.css" rel="stylesheet" type="text/css" media="all" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<div class="scoreboard-page" >
<!--    <p class="scoreTitle scoreboardTitle">射手榜</p>-->
    <h2 class="page-header text-center">射手榜</h2>
    <!-- int-box-one -->
    <div class="int-box-one clearfix">
        <table class="gp-content bg" style="">
            <thead>
            <tr>
                <th style="text-align: center">排名</th>
                <th style="text-align: center" class="queue">球员</th>
                <th style="text-align: center" class="queue">球队</th>
                <th style="text-align: center" >进球</th>
                <th style="text-align: center">助攻</th>
                <th style="text-align: center">出场时间</th>
                <th style="text-align: center">点球</th>
                <th style="text-align: center">乌龙</th>
            </tr>
            </thead>
            <tbody id="scorer">

            <?php
            foreach ($this->params['data'] as $player){
                ?>

            <tr class="gp-one gp-grey">
                <td><?= $player['row_id'] ?></td>
                <td><a class="scorer" target="_blank" href="world-cup-player-info?id=<?= $player['player_id']?>"><?= $player['player_name'] ?></a></td>
                <td><a class="scorer" target="_blank" href="world-cup-team-info?id=<?= $player['sl_team_id']?>"><?= $player['team_name'] ?></a></td>
                <td><?= $player['goals'] ?></td>
                <td><?= $player['assists'] ?></td>
                <td><?= $player['minutes'] ?></td>
                <td><?= $player['penalty'] ?></td>
                <td><?= $player['owngoal'] ?></td>
            </tr>

            <?php }?>

            </tbody>
        </table>
    </div>
    <!-- int-box-one end -->
</div>