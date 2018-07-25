<?php

namespace frontend\models\worldCupTeam;

use Yii;

/**
 * This is the model class for table "db_team_info".
 *
 * @property string $tid
 * @property string $team_name
 * @property string $coach
 * @property string $family
 * @property string $king
 * @property string $honor
 * @property boolean $DeleteStatus
 *
 * @property DbTeams $t
 */
class DbTeamInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_team_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid', 'team_name', 'coach', 'family', 'king', 'honor'], 'required'],
            [['DeleteStatus'], 'boolean'],
            [['tid'], 'string', 'max' => 10],
            [['team_name', 'coach'], 'string', 'max' => 50],
            [['family', 'king', 'honor'], 'string', 'max' => 100],
            [['tid'], 'exist', 'skipOnError' => true, 'targetClass' => DbTeams::className(), 'targetAttribute' => ['tid' => 'sl_team_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => Yii::t('app', 'Tid'),
            'team_name' => Yii::t('app', 'Team Name'),
            'coach' => Yii::t('app', 'Coach'),
            'family' => Yii::t('app', 'Family'),
            'king' => Yii::t('app', 'King'),
            'honor' => Yii::t('app', 'Honor'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getT()
    {
        return $this->hasOne(DbTeams::className(), ['sl_team_id' => 'tid']);
    }

    public static function getTeamInfo($id)
    {
        return self::findOne(['tid'=>$id]);
    }

    public static function getTeamList()
    {
        return self::find()
//            ->innerJoin('db_teams','db_teams.sl_team_id=db_team_info.tid')
//            ->select(['db_team_info.*','db_teams.team_name'])
            ->where(['DeleteStatus'=>1])
            ->asArray()->all();
    }
}
