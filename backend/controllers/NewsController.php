<?php
/**

 *Team:德塔贝斯

 *Coding by 张缴怡, 1611400, 20180724

 *此为后台文章模块的controller

 */ 
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
        $model=$view->params['data'] = DbNews::getMyArticles($id);
        $view->params['IsSuccess']=0;
        return $this->render('my-articles',['model'=>$model]);
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
    public function actionEditArticle(){
        $id=Yii::$app->getRequest()->get('id');
        $model=DbNews::getEditArticle($id);
        $view = Yii::$app->getView();
        $view->params['IsSuccess']=0;
        if(yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model['AuthorID']=Yii::$app->user->identity->getId();
            date_default_timezone_set('PRC');
            $model['PublishTime'] = date('Y-m-d H:i:s', time());
            Yii::getLogger()->log(  $model,4);
            if($model->save()){
                $view->params['IsSuccess']=1;
            }
            else{
                $view->params['IsSuccess']=2;
            }
            Yii::getLogger()->log(  $view->params['IsSuccess'],4);
        }
        return $this->render('new-article', [
            'model' => $model]);
    }
//删除文章
    public function actionDeleteArticle(){
        $id=Yii::$app->getRequest()->get('id');
        $model=DbNews::getEditArticle($id);
        $view = Yii::$app->getView();
        $view->params['IsSuccess']=0;
            $model->load(Yii::$app->request->post());
            $model['DeleteStatus']=0;
            if($model->save()){
                $view->params['IsSuccess']=1;
            }
            else{
                $view->params['IsSuccess']=2;
            }
        $view = Yii::$app->getView();
        $id=Yii::$app->getRequest()->get('UserID');
        $model=$view->params['data'] = DbNews::getMyArticles($id);
        return $this->render('my-articles', [
            'model' => $model]);
    }
    public function actionNewArticleEditor()

    {
//
//        $this->layout='main';
        $model = new DbNews();



        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {

                // form inputs are valid, do something here
                return;

            }

        }



        return $this->render('new-article-editor', [

            'model' => $model,

        ]);

    }
}