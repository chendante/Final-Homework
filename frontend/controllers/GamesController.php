<?php
/**

 *Team:德塔贝斯

 *Coding by 吴明亮, 1611331, 2018-07-22

 *前台赛程部分的controller

 */ 
namespace frontend\controllers;

use frontend\models\games\DbGames;
use Yii;

class GamesController extends \yii\web\Controller
{

    
    //赛程首页
    public function actionGames(){
        $view = Yii::$app->getView();
        $view->params['games'] = DbGames::getGames();
        return $this->render('games');
    }

    //小组赛页面
    public function actionGamesGroup(){
        $view = Yii::$app->getView();
        $view->params['games_group'] = DbGames::getGroupGames();
        return $this->render('games-group');
    }

    //按时间查询
    public function actionGamesTime(){
        $view = Yii::$app->getView();
        $view->params['games_time'] = DbGames::getTimeGames();
        return $this->render('games-time');
    }

    //比赛详情页面
    public function actionGamesDetail($id){
        $view = Yii::$app->getView();
        $id = Yii::$app->getRequest()->get('id');
        $view->params['game_detail'] = DbGames::getGameDetail($id);
        return $this->render('games-detail');
    }
}
