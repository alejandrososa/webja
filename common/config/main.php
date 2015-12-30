<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
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
            'class' => 'yii\rbac\PhpManager',
            //'class' => 'yii\rbac\DbManager',
            //'defaultRoles' => ['guest']

            //'class' => 'yii\rbac\PhpManager',
            //'defaultRoles' => ['user','moder','admin'],
            //'itemFile' => '@common/components/rbac/items.php',
            //'assignmentFile' => '@common/components/rbac/assignments.php',
            //'ruleFile' => '@common/components/rbac/rules.php'
        ],
        'thumbnail' => [
            'class' => 'himiklab\thumbnail\EasyThumbnail',
            'cacheAlias' => 'imagenes/miniaturas/',//'assets/thumbnails',
            'defecto' => '@frontend/web/img/photos/image-30.jpg'
        ],
    ],
];
