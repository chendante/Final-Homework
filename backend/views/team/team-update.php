<?php
/**

 *Team:德塔贝斯

 *Coding by 刘子晨

 *代码介绍：
 * 球队信息更改页面，在该页面更新球队基本信息

 */

use yii\helpers\Url;
$this->title='德塔贝斯-球队信息更新';

?>

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#update").click(function(){
            let data={};
            data.tid=$('#form input')[0].value
            data.team_name=$('#form input')[1].value
            data.coach=$('#form input')[2].value
            data.king=$('#form input')[3].value
            data.honor=$('#form input')[4].value
            //data.game_id = $('#form input')[0].value
            //data.date = $('#form input')[1].value
            //data.time = $('#form input')[2].value
            //data.team1 = $('#form input')[3].value
            //data.team1_id = '<?php //echo $this->params['gameInfo'][0]['team1_id'] ?>//'
            //data.score1 = $('#form input')[4].value
            //data.team2 = $('#form input')[5].value
            //data.team2_id = '<?php //echo $this->params['gameInfo'][0]['team2_id'] ?>//'
            //data.score2 = $('#form input')[6].value
            //data.groups = $('#form input')[7].value
            //data.matchcity = $('#form input')[8].value
            //data.round = $('#form input')[9].value
            $.ajax({url:"<?php echo Url::to(['team-update-form']) ?>",
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
            <strong>球队信息</strong> 更新</h1>
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
                <label for="input01" class="col-sm-4 control-label">球队id</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" style="background:#333333;" id="input01" disabled="disabled" value="<?php echo $this->params['data']['tid']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">球队名称</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['team_name']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input03" class="col-sm-4 control-label">教练名</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input03" value="<?php echo $this->params['data']['coach']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">重要球星</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['king']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">最好成绩</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['honor']?>">
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
