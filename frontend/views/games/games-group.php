<?php 
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

    <!-- main -->
    <!-- Part begin -->
    <div class="schedule-group" id="part">
      <div class="part">
        <?php foreach($this->params['games_group'] as $key => $games) {?>
        <div class="title-c layout-mb-b">
          <h3 class="label">
            <a href="#/schedule/group.shtml#url" target="_blank"><?=$key?>组</a>
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
                              <a target="_blank" href="http://2018.sina.com.cn/fra/"><?=$game['team1']?></a>
                          </span>
                          <span class="vs">
                              <a href="#/zt_d/1c-2d/" target="_black"><?=$game['score1']?>&nbsp<?= $game['score2']?></a>
                          </span>
                          <span class="tal t_c">
                              <a target="_blank" href="http://2018.sina.com.cn/arg/"><?=$game['team2']?></a>
                          </span>
                      </td>
                      <td class="tal"><?=$game['matchcity']?></td>
                      <td class="tal gray">
                          <a href="#/fra/2018-06-30/doc-ihespqrx7173896.shtml" style="" target="_blank">战报 </a>
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