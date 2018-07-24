<?php
/**
 * Created by PhpStorm.
 * User: 刘子晨
 * Date: 2018/7/24
 * Time: 23:07
 */
$this->title='德塔贝斯-世界杯球员信息';
?>
<head>
    <link href="css/world-cup-team/player_detail.css" rel="stylesheet" type="text/css" media="all" />
</head>

<div style="height: 100px">
    <span style="height: 100px"></span>
</div>

<div data-v-767a809e="" class="main_wrap" style="margin-left: 150px">
    <div data-v-744ab658="" data-v-767a809e="" class="player_info_wrap">
        <div data-v-744ab658="" class="player_big_img_wrap">
            <img data-v-744ab658="" src="<?= $this->params['data']['players']['pic'] ?>" ;" class="logo">
        </div> <div data-v-744ab658="" class="cont_wrap">
            <div data-v-744ab658="" class="name_wrap">
                <div data-v-744ab658="" class="name"><?= $this->params['data']['players']['player_name'] ?></div>
            </div> <div data-v-744ab658="" class="info_wrap">
                <div data-v-744ab658="" class="info selfInfo">
                    <h3 data-v-744ab658="" class="title">个人信息</h3>
                    <ul data-v-744ab658="" class="detail_info">
                        <li data-v-744ab658="">
                            <span data-v-744ab658="" class="item_title">生日：</span>
                            <?= $this->params['data']['players']['birth_date'] ?>
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">身高：</span>
                            <?= $this->params['data']['players']['height'] ?>cm
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">体重：</span>
                            <?= $this->params['data']['players']['weight'] ?>kg
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">位置：</span>
                            <?= $this->params['data']['players']['position_cn'] ?>
                        </li></ul></div> <div data-v-744ab658="" class="info techInfo"><h3 data-v-744ab658="" class="title">技术汇总</h3> <ul data-v-744ab658="" class="detail_info">
                        <li data-v-744ab658=""><span data-v-744ab658="" class="item_title">出场：</span>
                            <?= $this->params['data']['player_datas']['on_times'] ?>
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">助攻：</span>
                            <?= $this->params['data']['player_datas']['goal_assist'] ?>
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">出场时间：</span>
                            <?= $this->params['data']['player_datas']['mins_played'] ?>分钟
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">黄牌：</span>
                            <?= $this->params['data']['player_datas']['yellow'] ?>
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">场均出场：</span>
                            <?= $this->params['data']['player_datas']['mins_played']/$this->params['data']['player_datas']['on_times'] ?>分钟
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">红牌：</span>
                            <?= $this->params['data']['player_datas']['red'] ?>
                        </li><li data-v-744ab658=""><span data-v-744ab658="" class="item_title">进球：</span>
                            <?= $this->params['data']['player_datas']['goals'] ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-v-47b99066="" data-v-767a809e="" class="player_tech_stat" style="margin-left: 150px">
    <div data-v-47b99066="" class="title_wrap">
        <h2 data-v-47b99066="" class="title" style=" line-height: 50px">球员技术统计</h2>
        <a data-v-47b99066="" target="_blank" class="more" href="http://2018.163.com/special/team4713/">
            <span data-v-47b99066="" class="icon">+</span>
        </a>
    </div> <table data-v-0447defa="" data-v-47b99066="" class="default_table_name data_table">
        <tr data-v-0447defa=""><th data-v-0447defa="" class="new_match">比赛</th>
            <th data-v-0447defa="" class="minsPlayed">出场时间</th>
            <th data-v-0447defa="" class="goals">进球</th>
            <th data-v-0447defa="" class="goalAssist">助攻</th>
            <th data-v-0447defa="" class="totalScoringAtt">射门</th>
            <th data-v-0447defa="" class="fouls">犯规</th>
            <th data-v-0447defa="" class="totalTackle">抢断</th>
            <th data-v-0447defa="" class="yellowCard">黄牌</th>
            <th data-v-0447defa="" class="redCard">红牌</th>
            <th data-v-0447defa="" class="saves">扑救</th>
            <th data-v-0447defa="" class="goalsConceded">解围</th>
        </tr>

        <?php
        foreach ($this->params['data']['detail'] as $player){
        ?>

        <tr data-v-0447defa="">
            <td data-v-0447defa="" class="">
                <?= $player['home_name_cn'] ?>

                <?= $player['home_score'] ?>-<?= $player['away_score'] ?>
                <?= $player['away_name_cn'] ?>
            </td>
            <td data-v-0447defa="" class=""><?= $player['mins_played'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['goals'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['goal_assist'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['total_scoring_att'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['fouls'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['won_tackle'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['yellow'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['red'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['saves'] ?></td>
            <td data-v-0447defa="" class=""><?= $player['total_clearance'] ?></td>
        </tr>

<!--        <tr data-v-0447defa="">-->
<!--            <td data-v-0447defa="" class="">-->
<!--                <a href="http://2018.163.com/special/team4729/" target="_blank">突尼斯</a> 1-2 <a href="http://2018.163.com/special/team4713/" target="_blank">英格兰</a>-->
<!--            </td>-->
<!--            <td data-v-0447defa="" class="">90'</td>-->
<!--            <td data-v-0447defa="" class="">2</td>-->
<!--            <td data-v-0447defa="" class="">0</td>-->
<!--            <td data-v-0447defa="" class="">2</td>-->
<!--            <td data-v-0447defa="" class="">1</td>-->
<!--            <td data-v-0447defa="" class="">4</td>-->
<!--            <td data-v-0447defa="" class="">0</td>-->
<!--            <td data-v-0447defa="" class="">0</td>-->
<!--            <td data-v-0447defa="" class="">0</td>-->
<!--            <td data-v-0447defa="" class="">1</td>-->
<!--        </tr>-->
        <?php }?>

    </table>
</div>

<div style="height: 100px">
    <span style="height: 100px"></span>
</div>
