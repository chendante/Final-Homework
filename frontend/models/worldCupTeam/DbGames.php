<?php

namespace frontend\models\worldCupTeam;

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
            'game_id' => Yii::t('app', 'Game ID'),
            'date' => Yii::t('app', 'Date'),
            'time' => Yii::t('app', 'Time'),
            'team1' => Yii::t('app', 'Team1'),
            'team1_id' => Yii::t('app', 'Team1 ID'),
            'team2' => Yii::t('app', 'Team2'),
            'team2_id' => Yii::t('app', 'Team2 ID'),
            'score1' => Yii::t('app', 'Score1'),
            'score2' => Yii::t('app', 'Score2'),
            'groups' => Yii::t('app', 'Groups'),
            'matchcity' => Yii::t('app', 'Matchcity'),
            'round' => Yii::t('app', 'Round'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
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
