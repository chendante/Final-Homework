<?php
/**

 *Team:德塔贝斯

 *Coding by chendante

 *代码介绍

 */

namespace frontend\models\worldCupTeam;

use Yii;

/**
 * This is the model class for table "db_teams".
 *
 * @property string $sl_team_id
 * @property string $team_name
 * @property string $goals
 * @property string $total_scoring_att
 * @property string $total_pass
 * @property string $total_tackle
 * @property string $possession_percentage
 * @property string $pass_percentage
 * @property string $yellow
 * @property string $red
 * @property string $fk_foul_won
 * @property string $won_corners
 * @property string $total_cross
 * @property string $total_offside
 * @property string $total_throws
 * @property string $post_door
 * @property boolean $DeleteStatus
 *
 * @property DbGames[] $dbGames
 * @property DbGames[] $dbGames0
 * @property DbPlayers[] $dbPlayers
 * @property DbPlayers[] $dbPlayers0
 * @property DbTeamInfo $dbTeamInfo
 * @property DbScoreBoard $slTeam
 * @property DbTopScorer[] $dbTopScorers
 * @property FUsers[] $fUsers
 */
class DbTeams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sl_team_id', 'team_name', 'goals', 'total_scoring_att', 'total_pass', 'total_tackle', 'possession_percentage', 'pass_percentage', 'yellow', 'red', 'fk_foul_won', 'won_corners', 'total_cross', 'total_offside', 'total_throws', 'post_door'], 'required'],
            [['DeleteStatus'], 'boolean'],
            [['sl_team_id', 'total_pass', 'possession_percentage', 'pass_percentage'], 'string', 'max' => 10],
            [['team_name'], 'string', 'max' => 50],
            [['goals', 'total_scoring_att', 'total_tackle', 'yellow', 'red', 'fk_foul_won', 'won_corners', 'total_cross', 'total_offside', 'total_throws', 'post_door'], 'string', 'max' => 5],
            [['sl_team_id'], 'exist', 'skipOnError' => true, 'targetClass' => DbScoreBoard::className(), 'targetAttribute' => ['sl_team_id' => 'sl_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sl_team_id' => Yii::t('app', 'Sl Team ID'),
            'team_name' => Yii::t('app', 'Team Name'),
            'goals' => Yii::t('app', 'Goals'),
            'total_scoring_att' => Yii::t('app', 'Total Scoring Att'),
            'total_pass' => Yii::t('app', 'Total Pass'),
            'total_tackle' => Yii::t('app', 'Total Tackle'),
            'possession_percentage' => Yii::t('app', 'Possession Percentage'),
            'pass_percentage' => Yii::t('app', 'Pass Percentage'),
            'yellow' => Yii::t('app', 'Yellow'),
            'red' => Yii::t('app', 'Red'),
            'fk_foul_won' => Yii::t('app', 'Fk Foul Won'),
            'won_corners' => Yii::t('app', 'Won Corners'),
            'total_cross' => Yii::t('app', 'Total Cross'),
            'total_offside' => Yii::t('app', 'Total Offside'),
            'total_throws' => Yii::t('app', 'Total Throws'),
            'post_door' => Yii::t('app', 'Post Door'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbGames()
    {
        return $this->hasMany(DbGames::className(), ['team1_id' => 'sl_team_id', 'team1' => 'team_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbGames0()
    {
        return $this->hasMany(DbGames::className(), ['team2_id' => 'sl_team_id', 'team2' => 'team_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbPlayers()
    {
        return $this->hasMany(DbPlayers::className(), ['team_id' => 'sl_team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbPlayers0()
    {
        return $this->hasMany(DbPlayers::className(), ['team_name' => 'team_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbTeamInfo()
    {
        return $this->hasOne(DbTeamInfo::className(), ['tid' => 'sl_team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlTeam()
    {
        return $this->hasOne(DbScoreBoard::className(), ['sl_id' => 'sl_team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbTopScorers()
    {
        return $this->hasMany(DbTopScorer::className(), ['sl_team_id' => 'sl_team_id', 'team_name' => 'team_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFUsers()
    {
        return $this->hasMany(FUsers::className(), ['prefer_team_id' => 'sl_team_id', 'prefer_team' => 'team_name']);
    }

    public static function getAll()
    {
        return self::find()->asArray()->all();
    }

    public static function getTeamInfo($id)
    {
        return self::findOne(['sl_team_id'=>$id]);
    }
}
