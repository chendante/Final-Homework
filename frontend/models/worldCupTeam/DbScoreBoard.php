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
 * This is the model class for table "db_score_board".
 *
 * @property string $sl_id
 * @property string $team_cn
 * @property string $team_order
 * @property string $count
 * @property string $win
 * @property string $lose
 * @property string $draw
 * @property string $goal
 * @property string $losegoal
 * @property string $truegoal
 * @property string $score
 * @property string $groups
 * @property string $logo
 * @property integer $row_id
 * @property boolean $DeleteStatus
 *
 * @property DbTeams[] $dbTeams
 */
class DbScoreBoard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_score_board';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sl_id', 'team_cn', 'team_order', 'count', 'win', 'lose', 'draw', 'goal', 'losegoal', 'truegoal', 'score', 'groups', 'logo', 'row_id'], 'required'],
            [['row_id'], 'integer'],
            [['DeleteStatus'], 'boolean'],
            [['sl_id'], 'string', 'max' => 10],
            [['team_cn'], 'string', 'max' => 50],
            [['team_order', 'count', 'win', 'lose', 'draw', 'goal', 'losegoal', 'truegoal', 'score', 'groups'], 'string', 'max' => 5],
            [['logo'], 'string', 'max' => 255],
            [['sl_id', 'team_cn'], 'unique', 'targetAttribute' => ['sl_id', 'team_cn'], 'message' => 'The combination of Sl ID and Team Cn has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sl_id' => Yii::t('app', 'Sl ID'),
            'team_cn' => Yii::t('app', 'Team Cn'),
            'team_order' => Yii::t('app', 'Team Order'),
            'count' => Yii::t('app', 'Count'),
            'win' => Yii::t('app', 'Win'),
            'lose' => Yii::t('app', 'Lose'),
            'draw' => Yii::t('app', 'Draw'),
            'goal' => Yii::t('app', 'Goal'),
            'losegoal' => Yii::t('app', 'Losegoal'),
            'truegoal' => Yii::t('app', 'Truegoal'),
            'score' => Yii::t('app', 'Score'),
            'groups' => Yii::t('app', 'Groups'),
            'logo' => Yii::t('app', 'Logo'),
            'row_id' => Yii::t('app', 'Row ID'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbTeams()
    {
        return $this->hasMany(DbTeams::className(), ['sl_team_id' => 'sl_id']);
    }

    public static function getTeamInfo($id)
    {
        return self::findOne(['sl_id'=>$id]);
    }
}
