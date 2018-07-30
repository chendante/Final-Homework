<?php
/**

 *Team:德塔贝斯

 *Coding by 刘子晨

 *代码介绍：
 * 球员信息更改页面，在该页面更新球员基本信息

 */
use yii\helpers\Url;
$this->title='德塔贝斯-球员信息更新';

?>

<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#update").click(function(){
            let data={};
            data.team_name=$('#form input')[0].value
            data.player_name=$('#form input')[1].value
            data.position_cn=$('#form input')[2].value
            data.club_cn=$('#form input')[3].value
            data.birth_date=$('#form input')[4].value
            data.weight=$('#form input')[5].value
            data.height=$('#form input')[6].value
            data.jersey_num=$('#form input')[7].value
            data.player_id='<?php echo $this->params['data']['player_id'] ?>'

            $.ajax({url:"<?php echo Url::to(['player-update-form']) ?>",
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
            <strong>球员信息</strong> 更新</h1>
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
                <label for="input01" class="col-sm-4 control-label">球队</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" style="background:#333333;" id="input01" disabled="disabled" value="<?php echo $this->params['data']['team_name']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">球员名称</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['player_name']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input03" class="col-sm-4 control-label">场上位置</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input03" value="<?php echo $this->params['data']['position_cn']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">俱乐部</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['club_cn']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">生日</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['birth_date']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">体重</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['weight']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">身高</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['height']?>">
                </div>
            </div>

            <div class="form-group">
                <label for="input02" class="col-sm-4 control-label">球衣号码</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="input02" value="<?php echo $this->params['data']['jersey_num']?>">
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