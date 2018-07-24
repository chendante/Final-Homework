<?php

namespace frontend\models\worldCupTeam;

use Yii;

/**
 * This is the model class for table "db_player_datas".
 *
 * @property string $player_id
 * @property string $player_name_cn
 * @property string $home_name_cn
 * @property string $away_name_cn
 * @property string $home_score
 * @property string $away_score
 * @property string $mins_played
 * @property string $goals
 * @property string $goal_assist
 * @property string $total_scoring_att
 * @property string $total_pass
 * @property string $accurate_pass
 * @property string $total_att_assist
 * @property string $fouls
 * @property string $was_fouled
 * @property string $won_tackle
 * @property string $total_clearance
 * @property string $saves
 * @property string $red
 * @property string $yellow
 * @property string $status_cn
 * @property boolean $DeleteStatus
 *
 * @property DbPlayers $player
 */
class DbPlayerDatas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_player_datas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'player_name_cn', 'home_name_cn', 'away_name_cn', 'home_score', 'away_score', 'mins_played', 'goals', 'goal_assist', 'total_scoring_att', 'total_pass', 'accurate_pass', 'total_att_assist', 'fouls', 'was_fouled', 'won_tackle', 'total_clearance', 'saves', 'red', 'yellow', 'status_cn'], 'required'],
            [['DeleteStatus'], 'boolean'],
            [['player_id', 'player_name_cn'], 'string', 'max' => 10],
            [['home_name_cn', 'away_name_cn'], 'string', 'max' => 50],
            [['home_score', 'away_score', 'mins_played', 'goals', 'goal_assist', 'total_scoring_att', 'total_pass', 'accurate_pass', 'total_att_assist', 'fouls', 'was_fouled', 'won_tackle', 'total_clearance', 'saves', 'red', 'yellow', 'status_cn'], 'string', 'max' => 5],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => DbPlayers::className(), 'targetAttribute' => ['player_id' => 'player_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_id' => Yii::t('app', 'Player ID'),
            'player_name_cn' => Yii::t('app', 'Player Name Cn'),
            'home_name_cn' => Yii::t('app', 'Home Name Cn'),
            'away_name_cn' => Yii::t('app', 'Away Name Cn'),
            'home_score' => Yii::t('app', 'Home Score'),
            'away_score' => Yii::t('app', 'Away Score'),
            'mins_played' => Yii::t('app', 'Mins Played'),
            'goals' => Yii::t('app', 'Goals'),
            'goal_assist' => Yii::t('app', 'Goal Assist'),
            'total_scoring_att' => Yii::t('app', 'Total Scoring Att'),
            'total_pass' => Yii::t('app', 'Total Pass'),
            'accurate_pass' => Yii::t('app', 'Accurate Pass'),
            'total_att_assist' => Yii::t('app', 'Total Att Assist'),
            'fouls' => Yii::t('app', 'Fouls'),
            'was_fouled' => Yii::t('app', 'Was Fouled'),
            'won_tackle' => Yii::t('app', 'Won Tackle'),
            'total_clearance' => Yii::t('app', 'Total Clearance'),
            'saves' => Yii::t('app', 'Saves'),
            'red' => Yii::t('app', 'Red'),
            'yellow' => Yii::t('app', 'Yellow'),
            'status_cn' => Yii::t('app', 'Status Cn'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(DbPlayers::className(), ['player_id' => 'player_id']);
    }

    public static function getTeamInfo($id)
    {
        $data=self::find()
            ->innerJoin('db_players','db_players.player_id=db_player_datas.player_id')
            ->where(['db_players.DeleteStatus'=>1,'db_players.team_id'=>$id])
            ->select(['db_players.player_id','position_cn','jersey_num','db_player_datas.player_id','player_name_cn','sum( goals ) as goals',
                'sum(goal_assist) as goal_assist','sum(total_scoring_att) as total_scoring_att','sum(total_pass) as total_pass',
                'sum(fouls) as fouls','sum(won_tackle) as won_tackle','sum(yellow) as yellow','sum(red) as red','sum(total_clearance) as total_clearance',
                'sum(saves) as saves','sum(mins_played) as mins_played','count(db_players.player_id) as on_times'])
            ->groupBy(['db_players.player_id','db_player_datas.player_id','position_cn','jersey_num','player_name_cn'])
            ->asArray()->all();

        return $data;
    }
}
