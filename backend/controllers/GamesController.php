<?php

namespace backend\controllers;
use Codeception\Module\Db;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use Yii;
use backend\models\UploadedForm;
use yii\web\UploadedFile;
class GamesController extends \yii\web\Controller
{

    public $layout = "main_layout";

    public function actionGames(){
        $view = Yii::$app->getView();
        return $this->render('games');
    }


}
