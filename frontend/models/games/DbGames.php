<?php
/**

 *Team:德塔贝斯

 *Coding by 吴明亮, 1611331, 2018-07-22

 *前台赛程部分的model

 */ 

namespace frontend\models\games;
use frontend\models\worldCupTeam\DbTeams;
use frontend\models\worldCupTeam\DbPlayers;
use Yii;

/**
 * This is the model class for table "db_games".
 *
 * @property string $game_id
 * @property string $date
 * @property string $time
 * @property string $team1
 * @property string $team1_id
 * @property string $team2
 * @property string $team2_id
 * @property string $score1
 * @property string $score2
 * @property string $groups
 * @property string $matchcity
 * @property string $round
 * @property boolean $DeleteStatus
 *
 * @property DbTeams $team10
 * @property DbTeams $team20
 */
class DbGames extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_games';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_id', 'date', 'time', 'team1', 'team1_id', 'team2', 'team2_id', 'groups', 'matchcity', 'round'], 'required'],
            [['DeleteStatus'], 'boolean'],
            [['game_id'], 'string', 'max' => 11],
            [['date'], 'string', 'max' => 20],
            [['time', 'team1_id', 'team2_id'], 'string', 'max' => 10],
            [['team1', 'team2', 'matchcity'], 'string', 'max' => 50],
            [['score1', 'score2', 'groups', 'round'], 'string', 'max' => 5],
            [['team1_id', 'team1'], 'exist', 'skipOnError' => true, 'targetClass' => DbTeams::className(), 'targetAttribute' => ['team1_id' => 'sl_team_id', 'team1' => 'team_name']],
            [['team2_id', 'team2'], 'exist', 'skipOnError' => true, 'targetClass' => DbTeams::className(), 'targetAttribute' => ['team2_id' => 'sl_team_id', 'team2' => 'team_name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'game_id' => 'Game ID',
            'date' => 'Date',
            'time' => 'Time',
            'team1' => 'Team1',
            'team1_id' => 'Team1 ID',
            'team2' => 'Team2',
            'team2_id' => 'Team2 ID',
            'score1' => 'Score1',
            'score2' => 'Score2',
            'groups' => 'Groups',
            'matchcity' => 'Matchcity',
            'round' => 'Round',
            'DeleteStatus' => '1：未删除，0：已删除',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam10()
    {
        return $this->hasOne(DbTeams::className(), ['sl_team_id' => 'team1_id', 'team_name' => 'team1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam20()
    {
        return $this->hasOne(DbTeams::className(), ['sl_team_id' => 'team2_id', 'team_name' => 'team2']);
    }

    //获取淘汰赛的信息
    public static function getGames(){
        $eight = self::find()->where(['round' => 4,'DeleteStatus' => 1])->asArray()->all();
        $four = self::find()->where(['round' => 5,'DeleteStatus' => 1])->asArray()->all();
        $two = self::find()->where(['round' => 6,'DeleteStatus' => 1])->asArray()->all();
        $champion = self::find()->where(['round' => 8,'DeleteStatus' => 1])->asArray()->all();
        $three = self::find()->where(['round' => 7,'DeleteStatus' => 1])->asArray()->all();
        return ['eight' => $eight,'four' => $four,'two' => $two,'champion' => $champion,'three' => $three];
    }
    
    //获取小组赛信息
    public static function getGroupGames(){
        $A = self::find()->where(['groups' => 'A','DeleteStatus' => 1])->asArray()->all();
        $B = self::find()->where(['groups' => 'B','DeleteStatus' => 1])->asArray()->all();
        $C = self::find()->where(['groups' => 'C','DeleteStatus' => 1])->asArray()->all();
        $D = self::find()->where(['groups' => 'D','DeleteStatus' => 1])->asArray()->all();
        $E = self::find()->where(['groups' => 'E','DeleteStatus' => 1])->asArray()->all();
        $F = self::find()->where(['groups' => 'F','DeleteStatus' => 1])->asArray()->all();
        $G = self::find()->where(['groups' => 'G','DeleteStatus' => 1])->asArray()->all();
        $H = self::find()->where(['groups' => 'H','DeleteStatus' => 1])->asArray()->all();
        return ['A' => $A,'B' => $B,'C' => $C,'D' => $D,'E' => $E,'F' => $F,'G' => $G,'H' => $H];
    }

    //获取按时间排序的比赛信息
    public static function getTimeGames(){
        $group = self::find()->where(['DeleteStatus' => 1])->orderBy('date asc')->andWhere('round < 4')->asArray()->all();
        $eight = self::find()->where(['round' => 4,'DeleteStatus' => 1])->orderBy('date asc')->asArray()->all();
        $four = self::find()->where(['round' => 5,'DeleteStatus' => 1])->orderBy('date asc')->asArray()->all();
        $two = self::find()->where(['round' => 6,'DeleteStatus' => 1])->orderBy('date asc')->asArray()->all();
        $champion = self::find()->where(['round' => 8,'DeleteStatus' => 1])->orderBy('date asc')->asArray()->all();
        $three = self::find()->where(['round' => 7,'DeleteStatus' => 1])->orderBy('date asc')->asArray()->all();
        return ['小组赛' => $group,'1/8决赛' => $eight,'1/4决赛' => $four,'1/2决赛' => $two,'冠军赛' => $champion,'季军赛' => $three];
    }

    // 获取某一场比赛的详细信息
    public static function getGameDetail($id){
        $match = self::find()->where(['DeleteStatus' => 1,'game_id' => $id])->asArray()->all();
        $teamid1 = $match[0]['team1_id'];
        $teamid2 = $match[0]['team2_id'];
        $team1_player = DbPlayers::getTeamInfo($teamid1);
        $team2_player = DbPlayers::getTeamInfo($teamid2);
        return ['match' => $match,'team1_player' => $team1_player,'team2_player' => $team2_player];
    }

    //更新比赛信息
    public static function updateGame($data){
        $model = self::findOne($data['game_id']);
        $model->load($data, '');
        if($model -> save()){
            return 'success';
        }else{
            return 'fail';
        }
    }

    public static function getTeamInfo($id)
    {
        $data= self::find()
            ->where(['or',['team1_id'=>$id],['team2_id'=>$id]])
            ->asArray()->all();

        foreach ($data as &$value)
        {
            if($value['groups']!=NULL)
            {
                $value['round_type']='小组赛';
            }
            else
            {
                $value['round_type']='淘汰赛';
            }
        }

        return $data;
    }
}
