<?php
/**
 * Created by PhpStorm.
 * User: 刘子晨
 * Date: 2018/7/23
 * Time: 14:46
 */

$this->title='德塔贝斯-世界杯球队信息';
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
        <div class="team_statistics_nav" ne-role="tab-nav">球员统计</div>
    </div>
    <div class="team_statistics_cons">
        <div class="team_statistics_con current" ne-role="tab-body" style="">
            <ul class="team_statistics_schedule clearfix">
                
                <li>
                    <div class="round_type">
                        小组赛
                    </div>
                    <div class="time">已结束</div>
                    <div class="groups">
                        <div class="home_group"><a href="http://sports.163.com/special/team4694/" target="_blank">俄罗斯</a></div>
                        <div class="home_score">5</div>
                        <div class="away_group"><a href="http://sports.163.com/special/team4834/" target="_blank">沙特阿拉伯</a></div>
                        <div class="away_score">0</div>
                    </div>
                    <div class="links">
                        <a>查看比赛</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
    </div>
</div>