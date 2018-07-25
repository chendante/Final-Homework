<?php

namespace frontend\models\worldCupTeam;

use Yii;

/**
 * This is the model class for table "db_players".
 *
 * @property string $player_id
 * @property string $team_id
 * @property string $player_name
 * @property string $team_name
 * @property string $position_cn
 * @property string $club_cn
 * @property string $age
 * @property string $birth_date
 * @property string $weight
 * @property string $height
 * @property string $jersey_num
 * @property string $pic
 * @property string $team_logo
 * @property boolean $DeleteStatus
 *
 * @property DbPlayerDatas[] $dbPlayerDatas
 * @property DbTeams $team
 * @property DbTeams $teamName
 */
class DbPlayers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_players';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'team_id', 'player_name', 'team_name', 'position_cn', 'club_cn', 'age', 'birth_date', 'weight', 'height', 'jersey_num', 'pic', 'team_logo'], 'required'],
            [['DeleteStatus'], 'boolean'],
            [['player_id', 'team_id', 'weight', 'height'], 'string', 'max' => 10],
            [['player_name', 'team_name', 'position_cn', 'club_cn'], 'string', 'max' => 50],
            [['age', 'birth_date'], 'string', 'max' => 20],
            [['jersey_num'], 'string', 'max' => 5],
            [['pic', 'team_logo'], 'string', 'max' => 255],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => DbTeams::className(), 'targetAttribute' => ['team_id' => 'sl_team_id']],
            [['team_name'], 'exist', 'skipOnError' => true, 'targetClass' => DbTeams::className(), 'targetAttribute' => ['team_name' => 'team_name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_id' => Yii::t('app', 'Player ID'),
            'team_id' => Yii::t('app', 'Team ID'),
            'player_name' => Yii::t('app', 'Player Name'),
            'team_name' => Yii::t('app', 'Team Name'),
            'position_cn' => Yii::t('app', 'Position Cn'),
            'club_cn' => Yii::t('app', 'Club Cn'),
            'age' => Yii::t('app', 'Age'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'weight' => Yii::t('app', 'Weight'),
            'height' => Yii::t('app', 'Height'),
            'jersey_num' => Yii::t('app', 'Jersey Num'),
            'pic' => Yii::t('app', 'Pic'),
            'team_logo' => Yii::t('app', 'Team Logo'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbPlayerDatas()
    {
        return $this->hasMany(DbPlayerDatas::className(), ['player_id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(DbTeams::className(), ['sl_team_id' => 'team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamName()
    {
        return $this->hasOne(DbTeams::className(), ['team_name' => 'team_name']);
    }

    public static function getTeamInfo($id)
    {
        return self::find()
            ->where(['DeleteStatus'=>1])
            ->andWhere(['team_id'=>$id])
            ->asArray()->all();
    }

    public static function getPlayerInfo($id)
    {
        return self::findOne(['player_id'=>$id]);
    }
}
