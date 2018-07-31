<?php
/**

 *Team:德塔贝斯

 *Coding by 吴轩羽 1611332

 *评论模块 Model层

 */
namespace backend\models\comment;

use Yii;
use common\models\User;
use frontend\models\news\DbNews;
/**
 * This is the model class for table "db_news_comment".
 *
 * @property integer $CID
 * @property integer $NID
 * @property integer $UserID
 * @property string $CommentContent
 * @property string $CommentTime
 * @property boolean $Type
 * @property boolean $DeleteStatus
 * @property string $CommentName
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
            [['NID', 'UserID', 'CommentContent', 'CommentTime'], 'required'],
            [['NID', 'UserID'], 'integer'],
            [['CommentTime'], 'safe'],
            [['Type', 'DeleteStatus'], 'boolean'],
            [['CommentContent', 'CommentName'], 'string', 'max' => 255],
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
            'CommentContent' => Yii::t('app', 'Comment Content'),
            'CommentTime' => Yii::t('app', 'Comment Time'),
            'Type' => Yii::t('app', 'Type'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
            'CommentName' => Yii::t('app', 'Comment Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
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
    public static function getComment($id){

        $res=self::find()->joinWith('news')->joinWith('user')->where(['AuthorID'=>$id])->asArray()->all();
        if($res==null){
            return ['success'=>false,'data'=>$res];
        }
        else{
            return ['success'=>true,'data'=>$res];
        }
    }
}
