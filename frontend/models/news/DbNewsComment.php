<?php

namespace frontend\models\news;

use Yii;
use common\models\User;

/**
 * This is the model class for table "db_news_comment".
 *
 * @property integer $CID
 * @property integer $NID
 * @property integer $UserID
 * @property string $Content
 * @property string $CommentTime
 * @property boolean $Type
 * @property boolean $DeleteStatus
 * @property integer $CommentID
 *
 * @property DbNews $n
 * @property User $user
 */
class DbNewsComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_news_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NID', 'UserID', 'Content', 'CommentTime'], 'required'],
            [['NID', 'UserID', 'CommentID'], 'integer'],
            [['Content'], 'string'],
            [['CommentTime'], 'safe'],
            [['Type', 'DeleteStatus'], 'boolean'],
            [['NID'], 'exist', 'skipOnError' => true, 'targetClass' => DbNews::className(), 'targetAttribute' => ['NID' => 'NID']],
            [['UserID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UserID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CID' => Yii::t('app', 'Cid'),
            'NID' => Yii::t('app', 'Nid'),
            'UserID' => Yii::t('app', 'User ID'),
            'Content' => Yii::t('app', 'Content'),
            'CommentTime' => Yii::t('app', 'Comment Time'),
            'Type' => Yii::t('app', 'Type'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
            'CommentID' => Yii::t('app', 'Comment ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsID()
    {
        return $this->hasOne(DbNews::className(), ['NID' => 'NID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'UserID']);
    }
    static public function getNewsComments($id){
        return self::find()
            ->joinWith('newsID')
            ->joinWith('user')
            ->where(['db_news_comment.DeleteStatus'=>1])
            ->andWhere(['db_news_comment.NID'=>$id])
            ->orderBy('CommentTime')
            ->select(['db_news_comment.NID','CID','username','db_news_comment.Content','CommentTime','CommentID','UserID'])
            ->asArray()->all();
    }
}
