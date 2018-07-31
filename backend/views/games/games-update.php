<?php
/**

 *Team:德塔贝斯

 *Coding by 吴明亮, 1611331, 2018-07-22

 *前台赛程更新页面

 */ 
use yii\helpers\Url;
    $this->title = '德塔贝斯-赛程更新';
?>

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#update").click(function(){
                let data={};
                data.game_id = $('#form input')[0].value
                data.date = $('#form input')[1].value
                data.time = $('#form input')[2].value
                data.team1 = $('#form input')[3].value
                data.team1_id = '<?php echo $this->params['gameInfo'][0]['team1_id'] ?>'
                data.score1 = $('#form input')[4].value
                data.team2 = $('#form input')[5].value
                data.team2_id = '<?php echo $this->params['gameInfo'][0]['team2_id'] ?>'
                data.score2 = $('#form input')[6].value
                data.groups = $('#form input')[7].value
                data.matchcity = $('#form input')[8].value
                data.round = $('#form input')[9].value
                $.ajax({url:"<?php echo Url::to(['game-update-form']) ?>",
                data:data,
                type:'get'
                ,success:function(result){
                   alert('更新成功')
                },
                error:function(error){
                    alert('失败')
                }});
            });

        });
    </script>
<!-- tile -->
<section class="tile color transparent-black">



    <!-- tile header -->
    <div class="tile-header">
        <h1>
            <strong>赛程</strong> 更新</h1>
        <div class="controls">
            <a href="#" class="refresh">
                <i class="fa fa-refresh"></i>
            </a>
            <a href="#" class="remove">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <!-- /tile header -->

    <!-- tile body -->
    <div class="tile-body">

        <form class="form-horizontal" id="form" role="form">

            <div class="form-group">
                <label for="input01" class="col-sm-4 control-label">比赛id</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" style="background:#333333;" id="input01" disabled="disabled" value="<?php echo $this->params['id']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">比赛日期</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['gameInfo'][0]['date']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input03" class="col-sm-4 control-label">比赛时间</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input03" value="<?php echo $this->params['gameInfo'][0]['time']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">球队1</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['gameInfo'][0]['team1']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">球队1得分</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['gameInfo'][0]['score1']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">球队2</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['gameInfo'][0]['team2']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">球队2得分</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['gameInfo'][0]['score2']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">分组</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['gameInfo'][0]['groups']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">城市</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['gameInfo'][0]['matchcity']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">轮次</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['gameInfo'][0]['round']?>">
                </div>
            </div>


        </form>
        <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8" style="margin-top:30px;margin-bottom:80px;">
                    <button id="update" class="btn btn-primary">更新</button>
                </div>
        </div>
        
    </div>
    <!-- /tile body -->




</section>
<!-- /tile -->