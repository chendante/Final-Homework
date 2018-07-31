<?php
/**

 *Team:德塔贝斯

 *Coding by 吴明亮, 1611331, 2018-07-22

 *后台赛程部分的controller

 */ 
namespace backend\controllers;
use Codeception\Module\Db;
use yii\web\Controller;
use frontend\models\games\DbGames;

use Yii;

class GamesController extends \yii\web\Controller
{

    public $layout = "main_layout";

    //获取所有的比赛信息
    public function actionGames(){
        $view = Yii::$app->getView();
        $view->params['games'] = DbGames::find()->asArray()->all();
        return $this->render('games');
    }

    //更新赛程信息,页面
    public function actionGameUpdate($id){
        $view = Yii::$app->getView();
        $id = Yii::$app->getRequest()->get('id');
        $view->params['gameInfo'] = DbGames::find()->where(['game_id'=>$id])->asArray()->all();
        $view->params['id']=$id;
        return $this->render('games-update');
    }

    //新增赛程信息,页面
    public function actionGameInsert(){
        $view = Yii::$app->getView();
        return $this->render('games-insert');
    }
    //接受赛程信息并更新
    public function actionGameUpdateForm(){
        $Query=Yii::$app->request->getQueryParams();
        var_dump(DbGames::updateGame($Query));
    }
}
