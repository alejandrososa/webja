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
    'bootstrap' => ['log', 'thumbnail'],
    'modules' => [
        'paginas' => [
            'class' => 'backend\modules\paginas\Paginas',
            'defaultRoute' => 'paginas',
        ],
    ],
    'defaultRoute' => 'site/acceso',
    'homeUrl' => '/admin/site/index',
    'components' => [
        'request' => [
            'baseUrl' => '/admin',
        ],
        'urlManager' => [
            'scriptUrl'=>'/admin',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'enableStrictParsing' => true,
            'rules' =>[
                /*[
                    'pattern' => 'login',
                    'route' => 'site/login',
                    //'suffix' => '.htm',
                ],
                [
                    'pattern' => 'paginas',
                    'route' => 'paginas/paginas/indes',
                    //'suffix' => '.htm',
                ],
*/              /*'index'     => 'site/index',
                'login' => 'site/login',
                'logout' => 'site/logout',
                *///paginas
                /*'<module:(paginas)>/<id:\d+>' => '<module>/default/view',
                '<module:(paginas)>/<action:(index|view|me|delete|create|update|login|logout)>/<id:\d+>' => '<module>/default/<action>',
                '<module:(paginas)>/<action:(index|view|me|delete|create|update|login|logout)>' => '<module>/default/<action>',
*//*
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'controller/controller/action',*/
            ],
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
    ],
    'params' => $params,
];
