<?php
/**

 *Team:德塔贝斯

 *Coding by 刘子晨

 *代码介绍：
 * 对应表model

 */
namespace frontend\models\worldCupTeam;

use Yii;

/**
 * This is the model class for table "db_top_scorer".
 *
 * @property integer $row_id
 * @property string $num
 * @property string $player_name
 * @property string $player_id
 * @property string $team_name
 * @property string $goals
 * @property string $penalty
 * @property string $owngoal
 * @property string $assists
 * @property string $minutes
 * @property string $sl_team_id
 * @property string $pic
 * @property boolean $DeleteStatus
 *
 * @property DbTeams $slTeam
 */
class DbTopScorer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_top_scorer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['row_id', 'num', 'player_name', 'player_id', 'team_name', 'goals', 'penalty', 'owngoal', 'assists', 'minutes', 'sl_team_id', 'pic'], 'required'],
            [['row_id'], 'integer'],
            [['DeleteStatus'], 'boolean'],
            [['num', 'goals', 'penalty', 'owngoal', 'assists', 'minutes'], 'string', 'max' => 5],
            [['player_name', 'team_name'], 'string', 'max' => 50],
            [['player_id', 'sl_team_id'], 'string', 'max' => 10],
            [['pic'], 'string', 'max' => 255],
            [['sl_team_id', 'team_name'], 'exist', 'skipOnError' => true, 'targetClass' => DbTeams::className(), 'targetAttribute' => ['sl_team_id' => 'sl_team_id', 'team_name' => 'team_name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'row_id' => Yii::t('app', 'Row ID'),
            'num' => Yii::t('app', 'Num'),
            'player_name' => Yii::t('app', 'Player Name'),
            'player_id' => Yii::t('app', 'Player ID'),
            'team_name' => Yii::t('app', 'Team Name'),
            'goals' => Yii::t('app', 'Goals'),
            'penalty' => Yii::t('app', 'Penalty'),
            'owngoal' => Yii::t('app', 'Owngoal'),
            'assists' => Yii::t('app', 'Assists'),
            'minutes' => Yii::t('app', 'Minutes'),
            'sl_team_id' => Yii::t('app', 'Sl Team ID'),
            'pic' => Yii::t('app', 'Pic'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlTeam()
    {
        return $this->hasOne(DbTeams::className(), ['sl_team_id' => 'sl_team_id', 'team_name' => 'team_name']);
    }

    public static function getAllPlayer()
    {
        return self::find()
            ->innerJoin('db_players','db_players.player_id=db_top_scorer.player_id')
            ->innerJoin('db_teams','db_players.team_id=db_teams.sl_team_id')
            ->select(['db_top_scorer.*','db_teams.team_name','db_players.player_name','db_teams.sl_team_id'])
            ->where(['db_players.DeleteStatus'=>1])
            ->orderBy('row_id')
            ->asArray()->all();
    }
}
