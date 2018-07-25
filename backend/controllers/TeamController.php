<?php

namespace backend\controllers;

use frontend\models\worldCupTeam\DbPlayers;
use frontend\models\worldCupTeam\DbTeamInfo;
use Yii;

class TeamController extends \yii\web\Controller
{
    public $layout = "main_layout";

    public function actionTeamList()
    {
        $view = Yii::$app->getView();

        $view->params['data']=DbTeamInfo::getTeamList();

        return $this->render('team-list');
    }

    public function actionPlayerList()
    {
        $view=Yii::$app->getView();
        $view->params['data']=DbPlayers::getPlayerList();
        return $this->render('player-list');
    }
}
