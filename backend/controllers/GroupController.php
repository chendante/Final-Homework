<?php

namespace backend\controllers;
use Codeception\Module\Db;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use Yii;
use backend\models\group\DbGroupMember;
use backend\models\UploadedForm;
use yii\web\UploadedFile;
class GroupController extends \yii\web\Controller
{

    public $layout = "main_layout";


    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionMember(){
        $view = Yii::$app->getView();
        $view->params['data'] = DbGroupMember::getGroupMember();
        return $this->render('member');
    }


}
