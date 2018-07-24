<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            // 路由路径化
            'enablePrettyUrl' => true,
            // 隐藏入口脚本
            'showScriptName' => false,
            'rules' => [
                'login'=>'site/login',
                'logout'=>'site/logout',
                'manage'=>'site/manage',
                'games' => 'site/games',
                'games-group' => 'site/games-group',
                'games-time' => 'site/games-time',
                'article'=>'news/article',
                'all-article'=>'news/all-article',
                'world-cup-team-data'=>'world-cup-team/world-cup-team-data',
                'world-cup-team-info'=>'world-cup-team/world-cup-team-info',
                'world-cup-player-data'=>'world-cup-team/world-cup-player-data',
                'world-cup-player-info'=>'world-cup-team/world-cup-player-info'
            ],
           ],
        'urlManagerFrontend' => [
            'class' => 'yii\web\urlManager',
            'scriptUrl' => '/Final-Homework/backend/web/', //代替'baseUrl'
            'enablePrettyUrl' => false,
            'showScriptName' => true,
        ],
    ],
    'params' => $params,
];
