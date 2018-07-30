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
 * This is the model class for table "db_players".
 *
 * @property string $player_id
 * @property string $team_id
 * @property string $player_name
 * @property string $f_team_name
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
            [['player_id', 'team_id', 'player_name', 'f_team_name', 'position_cn', 'club_cn', 'age', 'birth_date', 'weight', 'height', 'jersey_num', 'pic', 'team_logo'], 'required'],
            [['DeleteStatus'], 'boolean'],
            [['player_id', 'team_id', 'weight', 'height'], 'string', 'max' => 10],
            [['player_name', 'f_team_name', 'position_cn', 'club_cn'], 'string', 'max' => 50],
            [['age', 'birth_date'], 'string', 'max' => 20],
            [['jersey_num'], 'string', 'max' => 5],
            [['pic', 'team_logo'], 'string', 'max' => 255],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => DbTeams::className(), 'targetAttribute' => ['team_id' => 'sl_team_id']],
            [['f_team_name'], 'exist', 'skipOnError' => true, 'targetClass' => DbTeams::className(), 'targetAttribute' => ['f_team_name' => 'team_name']],
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
            'f_team_name' => Yii::t('app', 'Team Name'),
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




    public static function getTeamInfo($id)
    {
        return self::find()
            ->where(['DeleteStatus'=>1])
            ->andWhere(['team_id'=>$id])
            ->asArray()->all();
    }

    public static function getPlayerInfo($id)
    {
        $data=self::find()
            ->innerJoin('db_teams','db_teams.sl_team_id=db_players.team_id')
            ->select(['db_players.*','db_teams.team_name'])
            ->where(['db_players.DeleteStatus'=>1,'db_players.player_id'=>$id])
            ->asArray()->all();

        return $data[0];
    }

    public static function getPlayerList()
    {
        return self::find()
            ->innerJoin('db_teams','db_teams.sl_team_id=db_players.team_id')
            ->select(['db_players.*','db_teams.team_name'])
            ->where(['db_players.DeleteStatus'=>1])
            ->asArray()->all();
    }

    public static function updatePlayerInfo($Query)
    {
        $model=self::findOne(['player_id'=>$Query['player_id']]);
//        $model->load($Query, '');
//        if ($model->save(true, ['player_name', 'position_cn', 'club_cn', 'birth_date','weight','jersey_num','height'])) {
//            return true;
//        }
//        else
//            return false;

        $model->player_name=$Query['player_name'];
        $model->position_cn=$Query['position_cn'];
        $model->club_cn=$Query['club_cn'];
        $model->birth_date=$Query['birth_date'];
        $model->weight=$Query['weight'];
        $model->jersey_num=$Query['jersey_num'];
        $model->height=$Query['height'];

        if($model->save())
            return true;
        else
            return false;
    }
}
