<?php
/**

 *Team:德塔贝斯

 *Coding by 张缴怡, 1611400, 20180723

 *此为前台文章模块中所有文章的model

 */ 
namespace frontend\models\news;

use Yii;
use common\models\User;
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
            [['Content'], 'string'],
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

    static public function getNews(){
        return self::find()
            ->joinWith('author')
            ->where(['DeleteStatus'=>1])
            ->orderBy('PublishTime DESC')
            ->select(['NID','Title','Keywords','AuthorID','username','PublishTime','Content'])
            ->asArray()->all();
    }
    static public function getOneNews($id){
        return self::find()
            ->joinWith('author')
            ->where(['DeleteStatus'=>1])
            ->andWhere(['NID'=>$id])
            ->select(['NID','Title','Keywords','AuthorID','username','PublishTime','Content'])
            ->asArray()->all();
    }
}
