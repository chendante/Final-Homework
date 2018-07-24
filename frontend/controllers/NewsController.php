<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\news\DbNews;
use frontend\models\news\DbNewsComment;
class NewsController extends \yii\web\Controller
{
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error','all-article'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post','get'],
//                ],
//            ],
//        ];
//    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionAllArticle()
    {
        $view = Yii::$app->getView();
        $view->params['data'] =DbNews::getNews();
        return $this->render('all-article');
    }

    public function actionArticle($id)
    {
        $view = Yii::$app->getView();
        $id=Yii::$app->getRequest()->get('id');
        $view->params['data1'] =DbNews::getOneNews($id);
        $view->params['data2'] =DbNews::getNews();
        $view->params['data3'] =DbNewsComment::getNewsComments($id);
        $model=new DbNewsComment();

        $view->params['IsSuccess']=0;
        if(yii::$app->request->isPost) {
            $data=Yii::$app->request->post('DbNewsComment');
            $view->params['IsSuccess']=DbNewsComment::postComment($data);
        }
        return $this->render('article',['model'=>$model]);

    }


    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = false;
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return
                $this->render('login', [
                    'model' => $model,
                ]);
        }

    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}


