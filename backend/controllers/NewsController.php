<?php

namespace backend\controllers;

use backend\models\news\DbNews;
use Yii;
class NewsController extends \yii\web\Controller
{
    public $layout = "main_layout";

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMyArticles(){
        $view = Yii::$app->getView();
        $id=Yii::$app->getRequest()->get('id');
        $view->params['data'] = DbNews::getMyArticles($id);
        $view->params['IsSuccess']=0;
        if (yii::$app->request->isPut) {
            $data['CommentContent']=Yii::$app->request->post('DbNewsComment')['CommentContent'];
            $data['NID']=$view->params['data1'][0]['NID'];
            $view->params['IsSuccess']=DbNews::updataArticle($data);
            $view->params['data'] =DbNews::getMyArticles($id);
        }
        return $this->render('my-articles');
    }

    public function actionNewArticle(){
        $view = Yii::$app->getView();
        $id=Yii::$app->getRequest()->get('id');
        $view->params['data'] = DbNews::getMyArticles($id);
        $model=new DbNews();
        $view->params['IsSuccess']=0;
        if(yii::$app->request->isPost) {
            $data['Content']=Yii::$app->request->post('DbNews')['Content'];
            $data['Title']=Yii::$app->request->post('DbNews')['Title'];
            $data['AuthorID']=Yii::$app->user->identity->getId();
            $data['Type']=0;
            date_default_timezone_set('PRC');
            $data['PublishTime'] = date('Y-m-d H:i:s', time());
            yii::getLogger()->log($data,4);
            $view->params['IsSuccess']=DbNews::postArticle($data);
        }
        return $this->render('new-article',['model'=>$model]);
    }

//    public function actionArticle($id)
//    {
//        $view = Yii::$app->getView();
//        $id=Yii::$app->getRequest()->get('id');
//        $view->params['data1'] =DbNews::getOneNews($id);
//        $view->params['data2'] =DbNews::getNews();
//        $view->params['data3'] =DbNewsComment::getNewsComments($id);
//        $model=new DbNewsComment();
//        $view->params['IsSuccess']=0;
//        if(yii::$app->request->isPost) {
//            $data['CommentContent']=Yii::$app->request->post('DbNewsComment')['CommentContent'];
//            $data['NID']=$view->params['data1'][0]['NID'];
//            $data['UserID']=Yii::$app->user->identity->getId();
//            $data['Type']=0;
//            date_default_timezone_set('PRC');
//            $data['CommentTime'] = date('Y-m-d H:i:s', time());
//            yii::getLogger()->log($data,4);
//            $view->params['IsSuccess']=DbNewsComment::postComment($data);
//            $view->params['data3'] =DbNewsComment::getNewsComments($id);
//        }
//        return $this->render('article',['model'=>$model]);
//    }
}