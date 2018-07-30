<?php
/**

 *Team:德塔贝斯

 *Coding by 张缴怡, 1611400, 20180723

 *此为前台文章评论的model

 */ 
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
    public function getN()
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
            ->joinWith('n')
            ->joinWith('user')
            ->where(['db_news_comment.DeleteStatus'=>1])
            ->andWhere(['db_news_comment.NID'=>$id])
            ->orderBy('CommentTime DESC')
            ->select(['db_news_comment.NID','CID','username','db_news_comment.CommentContent','CommentTime','CommentName','UserID','Type'])
            ->asArray()->all();
    }
    //新增评论
    public static function postComment($data)
    {
        $comment = new DbNewsComment();
        $comment->load($data, '');
//        $comment['Content'] = $data['Content'];
//        var_dump($comment['Content']);die;

        yii::getLogger()->log($data['CommentContent'],4);
        yii::getLogger()->log($comment,4);
        if (!$comment->save()) {//若保存不成功，则data记录错误信息
            $res = 2;
            return $res;
        } else {
            $res= 1;
            return $res;
        }
    }
}
