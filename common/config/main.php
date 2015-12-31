<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    //'language' => 'es',
    'modules' => [
        'autorizacion' => [
            'class' => 'common\modules\autorizacion\Autorizacion',
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            //'class' => 'yii\rbac\DbManager',
            'class' => 'yii\rbac\PhpManager',
            'defaultRoles' => ['visita','admin', 'autor'],
            'itemFile' => '@common/components/rbac/items.php',
            'assignmentFile' => '@common/components/rbac/assignments.php',
            'ruleFile' => '@common/components/rbac/rules.php'
        ],
        'thumbnail' => [
            'class' => 'himiklab\thumbnail\EasyThumbnail',
            'cacheAlias' => 'imagenes/miniaturas/',//'assets/thumbnails',
            'defecto' => '@frontend/web/img/photos/image-30.jpg'
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['site/acceso']
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'app\mail\Mailer',

        ],
    ],
];
