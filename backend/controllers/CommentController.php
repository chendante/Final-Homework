<?php

namespace backend\controllers;
use Yii;
use backend\models\comment\DbNewsComment;
class CommentController extends \yii\web\Controller
{
    public function actionManage()
    {
        $this->layout="main_layout";
        $id=Yii::$app->getRequest()->get('id');
        $view = Yii::$app->getView();
        $mid=DbNewsComment::getComment($id);
        if($mid['success']){
            $view->params['data'] =$mid['data'];
        }
        else{
            $view->params['data'] =null;
    }
        Yii::getLogger()->log($mid['data'],4);
        return $this->render('index');
    }
}
