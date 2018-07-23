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
                <img src="./2018世界杯专题俄罗斯详情页_files/2018%2F06%2F05%2F5911e89bf17d467fab3d5269386431c9.jpeg" alt="球队图片" onerror="javascript:this.src=&#39;http://static.ws.126.net/f2e/sports/worldcup2018/images/team_img.png&#39;;">
                <div class="cont_wrap">
                    <div class="team_logo logo_m logo_m_4694"></div>
                    <div class="cont">
                        <h2>俄罗斯-A组</h2>
                        <p class="name_en">Russia</p>
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
                        <?=$this->params['data']['team_name']?>
                    </li>
                    <li>
                        <span class="left_title">主教练：</span>
                        <?=$this->params['data']['coach']?>
                    </li>
                    <li>
                        <span class="left_title">重要球星：</span>
                        <?=$this->params['data']['king']?>
                    </li>
                    <li>
                        <span class="left_title">最好成绩：</span>
                        <?=$this->params['data']['honor']?>
                    </li>
                </ul>
            </div>
            <div class="honor_info_wrap info_item_wrap">
                <div class="title">
                    <span class="icon"></span>
                    <span class="txt">主要荣誉</span>
                </div>
                <ul>
                    <li>
                        1次世界杯殿军
                    </li>
                    <li>
                        1次欧洲杯冠军3次亚军2次四强
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
                        <a>aaaa</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
    </div>
</div>