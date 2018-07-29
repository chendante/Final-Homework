

    <?php
        use yii\helpers\Url;
        $this->title = "德塔贝斯-比赛管理";
    ?>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        function deleteGame(id){
          $.ajax({url:"<?php echo Url::to(['game-delete']) ?>",
            data:id,
            type:'get'
            ,success:function(result){
                alert('删除成功')
            },
            error:function(error){
                alert('删除失败')
          }});
        }
    </script>
    <section class="tile color transparent-black">
                
    <!-- tile header -->
    <div class="tile-header">
        <h1>
            <strong>比赛</strong> 管理</h1>
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
                    <th>比赛id</th>
                    <th>日期</th>
                    <th>时间</th>
                    <th>球队1</th>
                    <th>得分1</th>
                    <th>球队2</th>
                    <th>得分2</th>
                    <th>分组</th>
                    <th>比赛地</th>
                    <th>轮次</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->params['games'] as $game) {
                    ?>
                <tr>
                    <td><?=$game['game_id']?></td>
                    <td><?=$game['date']?></td>
                    <td><?=$game['time']?></td>
                    <td><?=$game['team1']?></td>
                    <td><?=$game['score1']?></td>
                    <td><?=$game['team2']?></td>
                    <td><?=$game['score2']?></td>
                    <td><?=$game['groups']?></td>
                    <td><?=$game['matchcity']?></td>
                    <td><?=$game['round']?></td>
                    <td><a href="<?php echo Url::to(["game-update",'id' => $game['game_id']])?>">更新</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>
    <!-- /tile body -->


</section>
