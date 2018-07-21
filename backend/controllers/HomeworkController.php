<?php

namespace backend\controllers;
use backend\models\homework\DbHomeworkPersonal;
use Codeception\Module\Db;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use Yii;
use backend\models\homework\DbHomeworkGroup;
use backend\models\UploadedForm;
use yii\web\UploadedFile;
class HomeworkController extends \yii\web\Controller
{

    public $layout = "main_layout";


    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionGroup(){
        $model = new UploadedForm();
        $view = Yii::$app->getView();
        $view->params['data'] =DbHomeworkGroup::getHomework();
       if(yii::$app->request->isPost){
           $model->file=UploadedFile::getInstance($model,'file');
          if($model->upload()){
              return $this->render('group', ['model' => $model]);
          }
       }
        return $this->render('group', ['model' => $model]);
    }
    public function actionPersonal($id){
        $view = Yii::$app->getView();
        $id=Yii::$app->getRequest()->get('id');
        $view->params['data'] =DbHomeworkPersonal::getHomework($id);
        return $this->render('personal');
    }


}
