<?php

namespace backend\models\news;

use Yii;
use common\models\User;
use yii\data\Pagination;
/**
 * This is the model class for table "db_news".
 *
 * @property integer $NID
 * @property string $Title
 * @property string $Keywords
 * @property integer $AuthorID
 * @property string $PublishTime
 * @property string $Content
 * @property integer $Hits
 * @property string $UpdateTime
 * @property boolean $DeleteStatus
 *
 * @property User $author
 * @property DbNewsComment[] $dbNewsComments
 */
class DbNews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Title', 'Content'], 'required'],
            [['AuthorID', 'Hits'], 'integer'],
            [['PublishTime', 'UpdateTime'], 'safe'],
            [['DeleteStatus'], 'boolean'],
            [['Title', 'Keywords'], 'string', 'max' => 255],
            [['AuthorID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['AuthorID' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NID' => Yii::t('app', 'Nid'),
            'Title' => Yii::t('app', 'Title'),
            'Keywords' => Yii::t('app', 'Keywords'),
            'AuthorID' => Yii::t('app', 'Author ID'),
            'PublishTime' => Yii::t('app', 'Publish Time'),
            'Content' => Yii::t('app', 'Content'),
            'Hits' => Yii::t('app', 'Hits'),
            'UpdateTime' => Yii::t('app', 'Update Time'),
            'DeleteStatus' => Yii::t('app', 'Delete Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'AuthorID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDbNewsComments()
    {
        return $this->hasMany(DbNewsComment::className(), ['NID' => 'NID']);
    }

    static public function getMyArticles($id){;
        return self::find()
            ->joinWith('author')
            ->where(['DeleteStatus'=>1])
            ->andWhere(['AuthorID'=>$id])
            ->orderBy('PublishTime DESC')
            ->select(['NID','Title','Keywords','AuthorID','username','PublishTime','Content'])
            ->asArray()->all();
    }

    static public function getOneArticle($id){
        return self::find()
            ->joinWith('author')
            ->where(['DeleteStatus'=>1])
            ->andWhere(['NID'=>$id])
            ->select(['NID','Title','Keywords','AuthorID','username','PublishTime','Content'])
            ->asArray()->all();
    }

    //更新文章
    public static function updataArticle($data)
    {
        $art = self::findOne(['NID' => $data['NID']]);
        if ($art == NULL) {
            $res = 2;
            return $res;
        }
        $res['success'] = true;
        if (!$art->load($data, '')) {
            $res = 2;
            return $res;
        } else{
            $res= 1;
            return $res;
        }
    }

    //新增文章
    public static function postArticle($data)
    {
        $article = new DbNews();
        $article->load($data, '');
//        yii::getLogger()->log($data['CommentContent'],4);
//        yii::getLogger()->log($comment,4);
        if (!$article->save()) {//若保存不成功，则data记录错误信息
            $res = 2;
            return $res;
        } else {
            $res= 1;
            return $res;
        }
    }
}
