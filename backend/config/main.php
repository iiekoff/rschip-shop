<?php

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'defaultRoute' => 'shop/default/index',
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'usernameField' => 'username',
                    'extraColumns' => [
                        ['attribute' => 'id',],
                        ['attribute' => 'email',],
                    ],
                    'searchClass' => 'backend\models\UserSearch',
                ],
            ],
        ],
        'gallery' => [
            'class' => 'dvizh\gallery\Module',
            'imagesStorePath' => dirname(dirname(__DIR__)) . '/frontend/web/images/store', //path to origin images
            'imagesCachePath' => dirname(dirname(__DIR__)) . '/frontend/web/images/cache', //path to resized copies
            'graphicsLibrary' => 'GD',
            'placeHolderPath' => '@webroot/images/placeHolder.png',
            'adminRoles' => ['administrator', 'admin', 'superadmin'],
        ],
        'shop' => [
            'class' => 'dvizh\shop\Module',
            'adminRoles' => ['@'],
            'defaultPriceTypeId' => 1, //Цена по умолчанию
        ],
        'filter' => [
            'class' => 'dvizh\filter\Module',
            'adminRoles' => ['admin'],
            'relationFieldName' => 'category_id',
            'relationFieldValues' =>
                function () {
                    return dvizh\shop\models\Category::buildTextTree();
                },
        ],
        'field' => [
            'class' => 'dvizh\field\Module',
            'relationModels' => [
                'dvizh\shop\models\Product' => 'Продукты',
                'dvizh\shop\models\Category' => 'Категории',
                'dvizh\shop\models\Producer' => 'Производители',
            ],
            'adminRoles' => ['admin'],
        ],
        'relations' => [
            'class' => 'dvizh\relations\Module',
            'fields' => ['code'],
        ],
        'tree' => [
            'class' => 'dvizh\tree\Module',
            'adminRoles' => ['@'],
        ],
    ],
    'components' => [
        'fileStorage' => [
            'class' => '\trntv\filekit\Storage',
            'baseUrl' => '@storageUrl/source',
            'filesystem' => function () {
                $adapter = new Adapter\Local(dirname(dirname(__DIR__)) . '/frontend/web/images/source');
                return new Filesystem($adapter);
            },
        ],
        'treeSettings' => [
            'class' => 'dvizh\tree\TreeSettings',
            'models' => [
                '\dvizh\shop\models\Category' => [],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
//        'urlManager' => [
//            'enablePrettyUrl' => false,
//            'showScriptName' => false,
//            'rules' => [
////                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
////                'shop/<action:cart|order>'=>'shop/<action>',
//                'shop/<category:[\w_-]+>/<id:[\d]+>'=>'shop/show',
//                'shop/<category:[\w_-]+>'=>'shop/category',
//                'shop'=>'shop/index',
//            ],
//        ],
    ],
    'params' => $params,
];
