<?php

namespace frontend\controllers;

use frontend\models\games\DbGames;
use frontend\models\worldCupTeam\DbPlayerDatas;
use frontend\models\worldCupTeam\DbPlayers;
use frontend\models\worldCupTeam\DbScoreBoard;
use frontend\models\worldCupTeam\DbTeamInfo;
use frontend\models\worldCupTeam\DbTeams;
use frontend\models\worldCupTeam\DbTopScorer;
use Yii;

class WorldCupTeamController extends \yii\web\Controller
{

    public function actionWorldCupTeamData()
    {
        $view = Yii::$app->getView();
        $view->params['data'] = DbTeams::getAll();
        return $this->render('world-cup-team-data');
    }

    public function actionWorldCupTeamInfo()
    {
        $view = Yii::$app->getView();
        $id=Yii::$app->getRequest()->get('id');
        $view->params['data']['teamInfo'] = DbTeamInfo::getTeamInfo($id);
        $view->params['data']['scoreBoard']=DbScoreBoard::getTeamInfo($id);
        $view->params['data']['teams']=DbTeams::getTeamInfo($id);
        $view->params['data']['games']=DbGames::getTeamInfo($id);
        $view->params['data']['players']=DbPlayers::getTeamInfo($id);
        $view->params['data']['player_datas']=DbPlayerDatas::getTeamInfo($id);

        return $this->render('world-cup-team-info');
    }

    public function actionWorldCupPlayerData()
    {
        $view = Yii::$app->getView();
        $view->params['data'] = DbTopScorer::getAllPlayer();

        return $this->render('world-cup-player-data');
    }

    public function actionWorldCupPlayerInfo()
    {
        $view = Yii::$app->getView();
        $id=Yii::$app->getRequest()->get('id');

        $view->params['data']['players']=DbPlayers::getPlayerInfo($id);
        $view->params['data']['player_datas']=DbPlayerDatas::getPlayerInfo($id);
        $view->params['data']['detail']=DbPlayerDatas::getPlayerDetailInfo($id);

        return $this->render('world-cup-player-info');
    }
}
