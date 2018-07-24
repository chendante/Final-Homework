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
        return $this->render('my-articles');
    }
}
