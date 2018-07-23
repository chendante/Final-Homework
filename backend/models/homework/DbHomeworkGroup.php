<?php

namespace backend\models\homework;

use yii\base\Model;
use 	yii\base\Configurable;
use Yii;

/**
 * This is the model class for table "db_homework_group".
 *
 * @property integer $HID
 * @property string $HomeworkName
 * @property string $Path
 *@property string $Mark
 * @property integer $MemberID
 */
class DbHomeworkGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_homework_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HomeworkName', 'Path','Mark'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HID' => Yii::t('app', 'Hid'),
            'HomeworkName' => Yii::t('app', 'Homework Name'),
            'Path' => Yii::t('app', 'Path'),
            'Mark' => Yii::t('app', 'Mark'),
            'MemberID' => Yii::t('app', 'MemberID'),
        ];
    }
    static public function getHomework(){
        return self::find()->asArray()->all();
    }
}
