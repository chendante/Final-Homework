<?php
/**

 *Team:德塔贝斯

 *Coding by 刘子晨

 *代码介绍：
 * 球队球员信息管理controller

 */

namespace backend\controllers;

use frontend\models\worldCupTeam\DbPlayers;
use frontend\models\worldCupTeam\DbTeamInfo;
use frontend\models\worldCupTeam\DbTeams;
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

    public function actionTeamUpdate()
    {
        $view=Yii::$app->getView();
        $id = Yii::$app->getRequest()->get('id');
        $view->params['data']=DbTeamInfo::getTeamInfo($id);

        return $this->render('team-update');
    }

    public function actionTeamUpdateForm()
    {
        $Query=Yii::$app->request->getQueryParams();

        var_dump(DbTeamInfo::updateTeamInfo($Query));
        var_dump(DbTeams::updateTeam($Query));
    }

    public function actionPlayerUpdate()
    {
        $view=Yii::$app->getView();
        $id = Yii::$app->getRequest()->get('id');
        $view->params['data']=DbPlayers::getPlayerInfo($id);

        return $this->render('player-update');
    }

    public function actionPlayerUpdateForm()
    {
        $Query=Yii::$app->request->getQueryParams();

        var_dump(DbPlayers::updatePlayerInfo($Query));
    }
}
