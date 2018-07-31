<?php
/**

 *Team:德塔贝斯

 *Coding by 吴明亮, 1611331, 2018-07-22

 *前台赛程比赛详情页面。展示比赛详情。

 */ 
	$this->title = '德塔贝斯-比赛详情';
	$gameInfo = $this->params['game_detail'];
	$team1_player = $gameInfo['team1_player'];
	$team2_player = $gameInfo['team2_player'];
	$round = array('第一轮','第二轮','第三轮','1/8决赛','1/4决赛','1/2决赛','季军赛','冠军赛');
?>

<head>
	<link rel="stylesheet" type="text/css" href="css/world-cup-game/game-detail.css" />
</head>


<div class="contTopW">
	<!--分割-->
	<div class="conttop">
		<!--时间-->
		<div class="conttopTime">
			<span><?= $gameInfo['match'][0]['date']?>&nbsp;&nbsp;<?= $gameInfo['match'][0]['time']?></span>
			<span>&nbsp;&nbsp;<?php echo $round[$gameInfo['match'][0]['round']-1]?></span>
		</div>
		<!--进球状态-->
		<div class="contCount">
			<span class="spanCount spanCount1"><?php echo $gameInfo['match'][0]['team1']?></span>
			<p class="contimg contimg1">
				<img src="<?php echo $team1_player[0]['team_logo']?>" alt="">
			</p>
			<span class="spanvs spanvs2">
				<span><?php echo $gameInfo['match'][0]['score1']?>&nbsp;&nbsp;<?php echo $gameInfo['match'][0]['score2']?></span>
				<!--<span class="spandq">点球(0-0)</span>--></span>
			<span class="spanCount spanCount2"><?php echo $gameInfo['match'][0]['team2']?></span>
			<p class="contimg contimg2">
				<img src="<?php echo $team2_player[0]['team_logo']?>" alt="">
			</p>
			
		</div>
		
		<!--阵型-->
		<div class="forW">
			<div class="fortit">
				<span class="fortitl"><?php echo $gameInfo['match'][0]['team1']?></span>
				<span class="fortitl2"><?php echo $gameInfo['match'][0]['team2']?></span>
			</div>
			<div class="fortCont">
				<ul class="fortLeft">
				<?php foreach($team1_player as $player){ ?>
					<li>
						<div class="shirts"><?=$player['jersey_num']?></div>
						<!--<div class="position">门将</div>-->
						<div class="fname"><?=$player['player_name']?></div>
					</li>
				<?php } ?>
					
				</ul>
				<div class="fortcent">
					<div class="fortleftc">
						<div class="playul">
							<div class="playli" style="margin-right: 17px;">
								<div class="playli2" style="margin-top: 211px;">
									<div class="forW2">
										<img src="<?=$team1_player[0]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[0]['player_name']?></div>
								</div>
							</div>
							<div class="playli" style="margin-right: 17px;">
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team1_player[1]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[1]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team1_player[2]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[2]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team1_player[3]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[3]['player_name']?></div>
								</div>
							</div>
							<div class="playli" style="margin-right: 17px;">
								<div class="playli2" style="margin-top: 122px;">
									<div class="forW2">
										<img src="<?=$team1_player[4]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[4]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 122px;">
									<div class="forW2">
										<img src="<?=$team1_player[5]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[5]['player_name']?></div>
								</div>
							</div>
							<div class="playli" style="margin-right: 17px;">
								<div class="playli2" style="margin-top: 52px;">
									<div class="forW2">
										<img src="<?=$team1_player[6]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[6]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 52px;">
									<div class="forW2">
										<img src="<?=$team1_player[7]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[7]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 52px;">
									<div class="forW2">
										<img src="<?=$team1_player[8]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[8]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 52px;">
									<div class="forW2">
										<img src="<?=$team1_player[9]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[9]['player_name']?></div>
								</div>
							</div>
							<div class="playli" style="margin-right: 17px;">
								<div class="playli2" style="margin-top: 211px;">
									<div class="forW2">
										<img src="<?=$team1_player[10]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team1_player[10]['player_name']?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="fortrgc">
						<div class="playul">
							<div class="playli" style="margin-left: 34px;">
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team2_player[0]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[0]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team2_player[1]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[1]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team2_player[2]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[2]['player_name']?></div>
								</div>
							</div>
							<div class="playli" style="margin-left: 34px;">
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team2_player[3]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[3]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team2_player[4]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[4]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 80px;">
									<div class="forW2">
										<img src="<?=$team2_player[5]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[5]['player_name']?></div>
								</div>
							</div>
							<div class="playli" style="margin-left: 34px;">
								<div class="playli2" style="margin-top: 52px;">
									<div class="forW2">
										<img src="<?=$team2_player[6]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[6]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 52px;">
									<div class="forW2">
										<img src="<?=$team2_player[7]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[7]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 52px;">
									<div class="forW2">
										<img src="<?=$team2_player[8]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[8]['player_name']?></div>
								</div>
								<div class="playli2" style="margin-top: 52px;">
									<div class="forW2">
										<img src="<?=$team2_player[9]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[9]['player_name']?></div>
								</div>
							</div>
							<div class="playli" style="margin-left: 34px;">
								<div class="playli2" style="margin-top: 211px;">
									<div class="forW2">
										<img src="<?=$team2_player[10]['pic']?>" alt=""> </div>
									<div class="forW3"></div>
									<div class="forW4"><?=$team2_player[10]['player_name']?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<ul class="fortRig">
				<?php foreach($team2_player as $player){ ?>
					<li>
						<div class="shirts"><?=$player['jersey_num']?></div>
						<!--<div class="position">门将</div>-->
						<div class="fname"><?=$player['player_name']?></div>
					</li>
				<?php } ?>
				</ul>
			</div>
		</div>
		
</div>