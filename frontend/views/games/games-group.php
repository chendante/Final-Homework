<?php 
/**

 *Team:德塔贝斯

 *Coding by 吴明亮, 1611331, 2018-07-22

 *前台赛程小组赛详情页面

 */ 
  use yii\helpers\Url;

  $this->title = "德塔贝斯-小组赛"
?>
<!-- saved from url=(0044)http://2018.sina.com.cn/schedule/group.shtml -->
<html id="html">
<!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="stylesheet" type="text/css" href="../web/games_group_files/base.css">
  <link rel="stylesheet" type="text/css" href="../web/games_group_files/layout.css">
  <link rel="stylesheet" type="text/css" href="../web/games_group_files/nav-b.css">
  <link rel="stylesheet" type="text/css" href="../web/games_group_files/nav-a.css">
  <link rel="stylesheet" type="text/css" href="../web/games_group_files/nav-c.css">
  <link rel="stylesheet" type="text/css" href="../web/games_group_files/title-c.css">
  <link rel="stylesheet" type="text/css" href="../web/games_group_files/footer-a.css">
  <!--[if lt IE 9]>
    <script src="//n.sinaimg.cn/lib/common/html5shiv-printshiv.min.js"></script>
    <![endif]-->


  <!-- SUDA_CODE_START -->


  <!-- code begin-->
  <link rel="stylesheet" href="../web/games_group_files/scheduleGroup.css">


  <div class="scheduleGroup">
    <p class="scheduleTitle">赛程</p>
    <div class="nav2" style="margin-left:180px">
      <ul class="clearfix">
        <li class="current">小组赛赛程</li>
        <li>
          <a href="<?php echo Url::to(['games/games']) ?>">淘汰赛赛程</a>
        </li>
        <li>
          <a href="<?php echo Url::to(['games/games-time']) ?>">按时间查询</a>
        </li>
      </ul>
    </div>
    <link rel="stylesheet" type="text/css" href="../web/games_files/scheduleGroup.css">
    <link rel="stylesheet" type="text/css" href="../web/games_files/scheduleElimination.css">
    <div class="contury_group layout-mb-d" style="margin-top:40px;">
            <div class="clearfix gc">
                <dl class="first">
                    <dt>A</dt>
                    <dd>
                        <a style="color:#333333;" target="_blank" class="eluo">
                            <span>
                                <!--<img src="http://i2.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100474F1325DT20171127113902.png"  alt="">-->
                            </span>
                            <p>俄罗斯</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="sate no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100477F1327DT20171127114146.png" alt="">
                            </span>
                            <p>沙特</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="aiji no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100476F1091DT20171127114058.png" alt="">
                            </span>
                            <p>埃及</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="wlagui">
                            <span>
                                <!--<img src="http://i1.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100475F1325DT20171127114008.png" alt="">-->
                            </span>
                            <p>乌拉圭</p>
                        </a>
                    </dd>
                </dl>
                <dl>
                    <dt>B</dt>
                    <dd>
                        <a style="color:#333333;" target="_blank" class="putaoya">
                            <span>
                                <!--<img src="http://i0.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100474F1327DT20171127113902.png"  alt="">-->
                            </span>
                            <p>葡萄牙</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="xibanya">
                            <span>
                                <!--<img src="http://i2.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100475F1326DT20171127114008.png" alt="">-->
                            </span>
                            <p>西班牙</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="molouge no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100477F1323DT20171127114146.png" alt="">
                            </span>
                            <p>摩洛哥</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="yilang">
                            <span>
                                <!--<img src="http://i1.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100476F1327DT20171127114058.png" alt="">-->
                            </span>
                            <p>伊朗</p>
                        </a>
                    </dd>
                </dl>
                <dl>
                    <dt>C</dt>
                    <dd>
                        <a style="color:#333333;" target="_blank" class="faguo no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100474F1326DT20171127113902.png" alt="">
                            </span>
                            <p>法国</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="aodaliya">
                            <span>
                                <!--<img src="http://i2.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100477F1091DT20171127114146.png" alt="">-->
                            </span>
                            <p>澳大利亚</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="milu no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100475F1322DT20171201214708.png" alt="">
                            </span>
                            <p>秘鲁</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="danmei no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100476F1322DT20171127114058.png" alt="">
                            </span>
                            <p>丹麦</p>
                        </a>
                    </dd>
                </dl>
                <dl>
                    <dt>D</dt>
                    <dd>
                        <a style="color:#333333;" target="_blank" class="agenting">
                            <span>
                                <!--<img src="http://i2.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100474F1091DT20171127113902.png"  alt="">-->
                            </span>
                            <p>阿根廷</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="bingdao no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100476F1094DT20171127114058.png" alt="">
                            </span>
                            <p>冰岛</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="keluodiya">
                            <span>
                                <!--<img src="http://i0.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100475F1094DT20171127114008.png" alt="">-->
                            </span>
                            <p>克罗地亚</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="niriliya">
                            <span>
                                <!--<img src="http://i1.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100477F1324DT20171127114146.png" alt="">-->
                            </span>
                            <p>尼日利亚</p>
                        </a>
                    </dd>
                </dl>
                <dl>
                    <dt>E</dt>
                    <dd>
                        <a style="color:#333333;" target="_blank" class="baxi">
                            <span>
                                <!--<img src="http://i1.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100474F1094DT20171127113902.png"  alt="">-->
                            </span>
                            <p>巴西</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="rishi">
                            <span>
                                <!--<img src="http://i0.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100475F1324DT20171127114008.png" alt="">-->
                            </span>
                            <p>瑞士</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="geshidali">
                            <span>
                                <!--<img src="http://i1.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100476F1323DT20171127114058.png" alt="">-->
                            </span>
                            <p>哥斯达黎加</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="shaierweiya no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100477F1326DT20171127114146.png" alt="">
                            </span>
                            <p>塞尔维亚</p>
                        </a>
                    </dd>
                </dl>
                <dl>
                    <dt>F</dt>
                    <dd>
                        <a style="color:#333333;" target="_blank" class="deguo">
                            <span>
                                <!--<img src="http://i1.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100474F1324DT20171127113902.png"  alt="">-->
                            </span>
                            <p>德国</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="moxige">
                            <span>
                                <!--<img src="http://i3.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100475F1323DT20171127114008.png" alt="">-->
                            </span>
                            <p>墨西哥</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="ridian no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100476F1324DT20171127114058.png" alt="">
                            </span>
                            <p>瑞典</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="hanguo">
                            <span>
                                <!--<img src="http://i3.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100477F1322DT20171127114146.png" alt="">-->
                            </span>
                            <p>韩国</p>
                        </a>
                    </dd>
                </dl>
                <dl>
                    <dt>G</dt>
                    <dd>
                        <a style="color:#333333;" target="_blank" class="bilishi">
                            <span>
                                <!--<img src="http://i3.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100474F1322DT20171127113902.png"  alt="">-->
                            </span>
                            <p>比利时</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="banama no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100477F1094DT20171127114146.png" alt="">
                            </span>
                            <p>巴拿马</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="tunishi no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100476F1326DT20171127114058.png" alt="">
                            </span>
                            <p>突尼斯</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="yigelan">
                            <span>
                                <!--<img src="http://i3.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100475F1327DT20171127114008.png" alt="">-->
                            </span>
                            <p>英格兰</p>
                        </a>
                    </dd>
                </dl>
                <dl>
                    <dt>H</dt>
                    <dd>
                        <a style="color:#333333;" target="_blank" class="bolan no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100474F1323DT20171127113902.png" alt="">
                            </span>
                            <p>波兰</p>

                        </a>
                        <a style="color:#333333;" target="_blank" class="saineijiaer no">
                            <span>
                                <img src="../web/games_files/U8691P6T64D100476F1325DT20171127114058.png" alt="">
                            </span>
                            <p>塞内加尔</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="gelunbiya">
                            <span>
                                <!--<img src="http://i1.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100475F1091DT20171127114008.png" alt="">-->
                            </span>
                            <p>哥伦比亚</p>
                        </a>
                        <a style="color:#333333;" target="_blank" class="riben">
                            <span>
                                <!--<img src="http://i2.sinaimg.cn/ty/temp/up/2017-11-27/U8691P6T64D100477F1325DT20171127114146.png" alt="">-->
                            </span>
                            <p>日本</p>
                        </a>
                    </dd>
                </dl>
            </div>
        </div>
    <!-- main -->
    <!-- Part begin -->
    <div class="schedule-group" id="part">
      <div class="part">
        <?php foreach($this->params['games_group'] as $key => $games) {?>
        <div class="title-c layout-mb-b">
          <h3 class="label">
            <a style="color:#bb6161" target="_blank"><?=$key?>组</a>
          </h3>
          <span class="extra"></span>
        </div>
        <div class="pc">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tb_01">
              <tbody>
                  <tr>
                      <th scope="col">比赛日期</th>
                      <th scope="col">时间</th>
                      <th scope="col">对阵</th>
                      <th scope="col">比赛地</th>
                      <th scope="col">相关信息</th>
                  </tr>
                  <?php $count = 1?>
                  <?php foreach($games as $game) {?>
                  <tr class="<?php echo $count%2==1?'white':'grey'?>">
                      <td><?=$game['date']?></td>
                      <td><?=$game['time']?></td>
                      <td>
                          <span class="tar t_c">
                              <a target="_blank" href="<?php echo Url::to(['world-cup-team/world-cup-team-info','id'=>$game['team1_id']]) ?>"><?=$game['team1']?></a>
                          </span>
                          <span class="vs">
                              <a href="<?php echo Url::to(['games-detail','id'=>$game['game_id']]) ?>" target="_black"><?=$game['score1']?>&nbsp<?= $game['score2']?></a>
                          </span>
                          <span class="tal t_c">
                              <a target="_blank" href="<?php echo Url::to(['world-cup-team/world-cup-team-info','id'=>$game['team2_id']]) ?>"><?=$game['team2']?></a>
                          </span>
                      </td>
                      <td class="tal"><?=$game['matchcity']?></td>
                      <td class="tal gray">
                          <a href="<?php echo Url::to(['games-detail','id'=>$game['game_id']]) ?>" style="" target="_blank">战报 </a>
                      </td>
                  </tr>
                  <?php $count++;} ?>
              </tbody>
          </table>
        </div>
        <?php } ?>
      </div>
      
      
    <!-- Part end -->
    <div class="part_notice">注：[01]等数字为比赛场次编号，“圣保罗”等地名为比赛地点，所有时间均为北京时间。</div>
    <!-- end main -->
  </div>