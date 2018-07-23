<?php

namespace frontend\controllers;

use frontend\models\worldCupTeam\DbTeamInfo;
use frontend\models\worldCupTeam\DbTeams;
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
        $view->params['data'] = DbTeamInfo::getTeamInfo($id);

        return $this->render('world-cup-team-info');
    }
}
