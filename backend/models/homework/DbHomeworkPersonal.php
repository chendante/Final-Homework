<?php

namespace backend\models\homework;

use Yii;
use backend\models\group\DbGroupMember;
/**
 * This is the model class for table "db_homework_personal".
 *
 * @property string $HomeworkName
 * @property string $Path
 * @property string $Mark
 * @property integer $MemberID
 * @property integer $HID
 */
class DbHomeworkPersonal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_homework_personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MemberID'], 'integer'],
            [['HomeworkName', 'Path','Mark'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HomeworkName' => Yii::t('app', 'Homework Name'),
            'Path' => Yii::t('app', 'Path'),
            'MemberID' => Yii::t('app', 'Member ID'),
            'HID' => Yii::t('app', 'Hid'),
            'Mark' => Yii::t('app', 'Mark'),
        ];
    }
    public function getMember()
    {
        return $this->hasOne(DbGroupMember::className(), ['StudentID' => 'MemberID']);
    }
    static public function getHomework($id){
        return self::find()->joinWith('member')
            ->select(['StudentName','HomeworkName','Path','MemberID','Mark'])
            ->where(['MemberID'=>$id])->asArray()->all();
    }
}
