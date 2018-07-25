<?php
/**
 * Created by PhpStorm.
 * User: 刘子晨
 * Date: 2018/7/23
 * Time: 14:46
 */

$this->title='德塔贝斯-世界杯球队信息'.'--'.$this->params['data']['teamInfo']['team_name'];
?>
<head>
    <link href="css/world-cup-team/team_logo.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/world-cup-team/sitehead.css" rel="stylesheet" type="text/css" media="all" />

    <link href="css/world-cup-team/head_SenZTZaJwaIQ.css" rel="stylesheet" type="text/css" media="all" />
</head>

</div>
<!-- 球队介绍 -->
<div ne-module="modules/team_intro/block.js">
    <div class="top_wrap area">
        <div class="top_wrap_con clearfix">
            <div class="img_wrap">
                <img src="<?=$this->params['data']['teamInfo']['family'] ?>" alt="球队图片" onerror="javascript:this.src=&#39;http://static.ws.126.net/f2e/sports/worldcup2018/images/team_img.png&#39;;">
                <div class="cont_wrap">
<!--                    <div class="team_logo logo_m logo_m_4694"></div>-->
                    <img src="<?=$this->params['data']['scoreBoard']['logo'] ?>" style="width: 45px;height: 30px">
                    <div class="cont">
                        <h2><?=$this->params['data']['teamInfo']['team_name'] ?> <?=$this->params['data']['scoreBoard']['groups'] ?>组</h2>
                    </div>

                </div>
            </div>
            <div class="base_info_wrap info_item_wrap">
                <div class="title">
                    <span class="icon"></span>
                    <span class="txt">基本信息</span>
                </div>
                <ul>
                    <li>
                        <span class="left_title">国家：</span>
                        <?=$this->params['data']['teamInfo']['team_name']?>
                    </li>
                    <li>
                        <span class="left_title">主教练：</span>
                        <?=$this->params['data']['teamInfo']['coach']?>
                    </li>
                    <li>
                        <span class="left_title">重要球星：</span>
                        <?=$this->params['data']['teamInfo']['king']?>
                    </li>
                    <li>
                        <span class="left_title">最好成绩：</span>
                        <?=$this->params['data']['teamInfo']['honor']?>
                    </li>
                </ul>
            </div>
            <div class="honor_info_wrap info_item_wrap">
                <div class="title">
                    <span class="icon"></span>
                    <span class="txt">本届表现</span>
                </div>
                <ul>
                    <li>
                        <span class="left_title">进球：</span>
                        <?=$this->params['data']['teams']['goals']?>
                    </li>
                    <li>
                        <span class="left_title">控球率：</span>
                        <?=$this->params['data']['teams']['possession_percentage']?>
                    </li>
                    <li>
                        <span class="left_title">小组赛净胜球：</span>
                        <?=$this->params['data']['scoreBoard']['truegoal']?>
                    </li>
                </ul>
                <div class="color_icon"></div>
                <!-- <a href="#" target="_blank"><div class="detail">详细&gt;&gt;</div></a> -->

            </div>
        </div>
    </div>
</div>

<div class="area clearfix">

    <div class="col_l">

<div class="team_statistics" ne-module="tabs" ne-state="showhide:true;events:click;">
    <div class="team_statistics_navs clearfix">
        <div class="team_statistics_nav current" ne-role="tab-nav">赛程</div>
    </div>
    <div class="team_statistics_cons">

        <div class="team_statistics_con current" ne-role="tab-body" style="">
            <ul class="team_statistics_schedule clearfix">
                <?php
                $i=1;
                foreach ($this->params['data']['games'] as $game){
                ?>
                <li>
                    <div class="round_type">
                        <?= $game['round_type'] ?>
                    </div>
                    <div class="time">已结束</div>
                    <div class="groups">
                        <div class="home_group">
                            <a href="http://localhost/Final-Homework/frontend/web/world-cup-team-info?id=<?= $game['team1_id']?>" target="_blank">
                                <?= $game['team1'] ?>
                            </a></div>
                        <div class="home_score">
                            <?= $game['score1'] ?>
                        </div>
                        <div class="away_group">
                            <a href="http://localhost/Final-Homework/frontend/web/world-cup-team-info?id=<?= $game['team2_id']?>" target="_blank">
                                <?= $game['team2'] ?>
                            </a></div>
                        <div class="away_score">
                            <?= $game['score2'] ?>
                        </div>
                    </div>
                    <div class="links">
                        <a>查看比赛</a>
                    </div>
                </li>
                    <?php }?>

            </ul>
        </div>
    </div>
</div>

        <div class="team_statistics" ne-module="tabs" ne-state="showhide:true;events:click;">
            <div class="team_statistics_navs clearfix">
                <div class="team_statistics_nav current" ne-role="tab-nav">球员统计</div>
            </div>
            <div class="team_statistics_cons">

                <div class="team_statistics_con" ne-role="tab-body" style="">
                    <div class="team_statistics_box">
                            <table class="team_statistics_player">
                                <colgroup>
                                    <col class="player_list1">
                                    <col class="player_list2">
                                    <col class="player_list3">
                                    <col class="player_list4">
                                    <col class="player_list5">
                                    <col class="player_list6">
                                    <col class="player_list7">
                                    <col class="player_list8">
                                    <col class="player_list9">
                                    <col class="player_list10">
                                    <col class="player_list11">
                                    <col class="player_list12">
                                    <col class="player_list13">
                                    <col class="player_list14">
                                    <col class="player_list15">
                                </colgroup>
                                <thead>
                                <tr><th>号码</th>
                                    <th>球员</th>
                                    <th>位置</th>
                                    <th>出场</th>
                                    <th>时间</th>
                                    <th>进球</th>
                                    <th>助攻</th>
                                    <th>射门</th>
                                    <th>传球</th>
                                    <th>犯规</th>
                                    <th>抢断</th>
                                    <th>黄牌</th>
                                    <th>红牌</th>
                                    <th>扑救</th>
                                    <th>解围</th>
                                </tr></thead>
                                <tbody>
                                <?php
                                $i=1;
                                foreach ($this->params['data']['player_datas'] as $player){
                                    ?>

                                <tr>
                                    <td><?= $i ?></td>
                                    <td><a href="http://localhost/Final-Homework/frontend/web/world-cup-player-info?id=<?= $player['player_id']?>" target="_blank"><p><?= $player['player_name_cn'] ?></p></a></td>
                                    <td> <?= $player['position_cn'] ?></td>
                                    <td><?= $player['on_times'] ?> </td>
                                    <td><?= $player['mins_played'] ?></td>
                                    <td><?= $player['goals'] ?></td>
                                    <td><?= $player['goal_assist'] ?></td>
                                    <td><?= $player['total_scoring_att'] ?></td>
                                    <td><?= $player['total_pass'] ?></td>
                                    <td><?= $player['fouls'] ?></td>
                                    <td><?= $player['won_tackle'] ?></td>
                                    <td><?= $player['yellow'] ?></td>
                                    <td><?= $player['red'] ?></td>
                                    <td><?= $player['saves'] ?></td>
                                    <td><?= $player['total_clearance'] ?></td>
                                </tr>
                                <?php $i++;}?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>