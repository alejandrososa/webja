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
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest']
        ],
        'thumbnail' => [
            'class' => 'himiklab\thumbnail\EasyThumbnail',
            'cacheAlias' => 'imagenes/miniaturas/',//'assets/thumbnails',
            'defecto' => '@frontend/web/img/photos/image-30.jpg'
        ],
    ],
];
