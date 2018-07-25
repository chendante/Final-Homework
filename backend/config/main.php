<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'redactor' => [
            'class' => 'yii\redactor\RedactorModule',
            'uploadDir' => '',
            'uploadUrl' => '',
            'imageAllowExtensions'=>['jpg','png','gif']
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
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
                'homework-group'=>'homework/group',
                'group-member'=>'group/member',
                'group-edit'=>'group/edit',
                'homework-personal'=>'homework/personal',
                'upload-file'=>'site/upload',
                'login'=>'site/login',
                'my-articles'=>'news/my-articles',
                'games' => 'games/games',
                'games-update' => 'games/game-update',
                'new-article'=>'news/new-article',
                'edit-article'=>'news/edit-article',
                'comment-manage'=>'comment/manage',
                'team-list'=>'team/team-list',
                'player-list'=>'team/player-list'
            ],
        ],
        'urlManagerBackend' => [
            'class' => 'yii\web\urlManager',
            'scriptUrl' => '/Final-Homework/frontend/web/', //代替'baseUrl'
            'enablePrettyUrl' => false,
            'showScriptName' => true,
        ],
    ],
    'params' => $params,
];
