<?php
/**
 * Created by PhpStorm.
 * User: 刘子晨
 * Date: 2018/7/22
 * Time: 23:57
 */

$this->title='德塔贝斯-世界杯球队排行';
?>
<head>
    <link href="css/world-cup-team/team_rank.css" rel="stylesheet" type="text/css" media="all" />
</head>
<div class="main">

    <!-- row -->
    <div class="row">

        <!-- col 12 -->
        <div class="col-md-12 text-center sm-left">


            <h2 class="page-header text-center">球队排行</h2>

            <div data-v-e731f282="" data-v-f4a56ec4="" class="team_rank_data">
                <table data-v-0447defa="" data-v-e731f282="" class="default_table_name data_table">
                    <tr data-v-0447defa="">
                        <th>序号</th>
                        <th data-v-0447defa="" class="new_team">球队</th>
                        <th data-v-0447defa="" class="sort goals">进球</th>
                        <th>射门</th>
                        <th>传球</th>
                        <th>抢断</th>
                        <th>控球率</th>
                        <th>传球成功率</th>
                        <th>红牌</th>
                        <th>黄牌</th>
                    </tr>
                <?php
                $i=1;
                foreach ($this->params['data'] as $team){
                ?>
                    <tr>
                        <td data-v-0447defa="" class=""><?=$i  ?> </td>
                        <td data-v-0447defa="" class=""><a href="http://localhost/Final-Homework/frontend/web/world-cup-team-info?id=<?= $team['sl_team_id']?>"><?=$team['team_name']  ?> </a></td>
                        <td data-v-0447defa="" class=""><?=$team['goals'] ?></td>
                        <td data-v-0447defa="" class=""><?=$team['total_scoring_att']?></td>
                        <td data-v-0447defa="" class=""><?=$team['total_pass']?></td>
                        <td data-v-0447defa="" class=""><?=$team['total_tackle']?></td>
                        <td data-v-0447defa="" class=""><?=$team['possession_percentage']?></td>
                        <td data-v-0447defa="" class=""><?=$team['pass_percentage']?></td>
                        <td data-v-0447defa="" class=""><?=$team['red']?></td>
                        <td data-v-0447defa="" class=""><?=$team['yellow']?></td>
                    </tr>
                <?php $i++;}?>
                </table>
            </div>
        </div>
    </div>
</div>
