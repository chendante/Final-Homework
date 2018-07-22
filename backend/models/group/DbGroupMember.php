<?php

namespace backend\models\group;

use Yii;

/**
 * This is the model class for table "db_group_member".
 *
 * @property integer $StudentID
 * @property string $StudentName
 * @property string $StudentMajor
 * @property string $PersonalProfile
 * @property string $ResponsiblePart
 * @property string $Sex
 * @property string $Birthday
 * @property string $Polity
 * @property string $Email
 * @property string $Tel
 * @property integer $DeleteStatus
 */
class DbGroupMember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_group_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['StudentID', 'StudentName'], 'required'],
            [['StudentID', 'DeleteStatus'], 'integer'],
            [['PersonalProfile', 'ResponsiblePart'], 'string'],
            [['Birthday'], 'safe'],
            [['StudentName'], 'string', 'max' => 24],
            [['StudentMajor', 'Tel'], 'string', 'max' => 11],
            [['Sex'], 'string', 'max' => 2],
            [['Polity', 'Email'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'StudentID' => Yii::t('app', 'Student ID'),
            'StudentName' => Yii::t('app', 'Student Name'),
            'StudentMajor' => Yii::t('app', 'Student Major'),
            'PersonalProfile' => Yii::t('app', 'Personal Profile'),
            'ResponsiblePart' => Yii::t('app', 'Responsible Part'),
            'Sex' => Yii::t('app', 'Sex'),
            'Birthday' => Yii::t('app', 'Birthday'),
            'Polity' => Yii::t('app', 'Polity'),
            'Email' => Yii::t('app', 'Email'),
            'Tel' => Yii::t('app', 'Tel'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
        ];
    }
    static public function getGroupMember(){
        return self::find()->asArray()->all();
    }
}
