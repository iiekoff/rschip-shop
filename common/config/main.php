<?php

use dvizh\shop\models\Category;
use League\Flysystem\Adapter;
use League\Flysystem\Filesystem;

return [
    'name' => 'RSCHIP',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
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
            'adminRoles' => ['admin'],
            'defaultPriceTypeId' => 1, //Цена по умолчанию
        ],
        'filter' => [
            'class' => 'dvizh\filter\Module',
            'adminRoles' => ['admin'],
            'relationFieldName' => 'category_id',
            'relationFieldValues' =>
                function () {
                    return Category::buildTextTree();
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
        'cart' => [
            'class' => 'dvizh\cart\Module',
        ],
        'order' => [
            'class' => 'dvizh\order\Module',
            'successUrl' => '/site/thanks', //Страница, куда попадает пользователь после успешного заказа
            'adminNotificationEmail' => 'chernozor@yandex.ru', //Мыло для отправки заказов
//            'as use_certificate' => '\common\aspects\UseCertificate',
            'as order_filling' => '\common\aspects\OrderFilling',
        ],
        'tree' => [
            'class' => 'dvizh\tree\Module',
            'adminRoles' => ['@'],
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'treeSettings' => [
            'class' => 'dvizh\tree\TreeSettings',
            'models' => [
                'dvizh\shop\models\Category' => [],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'auth_item',
            'itemChildTable' => 'auth_item_child',
            'assignmentTable' => 'auth_assignment',
            'ruleTable' => 'auth_rule',
            'defaultRoles' => ['guest'],
        ],
        'fileStorage' => [
            'class' => '\trntv\filekit\Storage',
            'baseUrl' => '@storageUrl/source',
            'filesystem' => function () {
                $adapter = new Adapter\Local(dirname(dirname(__DIR__)) . '/frontend/web/images/source');
                return new Filesystem($adapter);
            },
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages', //
                    'sourceLanguage' => 'ru',
                    'fileMap' => [
                    ],
                ],
            ],
        ],
        'cart' => [
            'class' => 'dvizh\cart\Cart',
            'currency' => 'eur', //Валюта
            'currencyPosition' => 'after', //after или before (позиция значка валюты относительно цены)
            'priceFormat' => [2, '.', ''], //Форма цены
//            'as set_discount' => ['class' => 'common\aspects\SetDiscount'],
//            'as set_certificate_discount' => '\common\aspects\SetCertificateDiscount'
        ],
        'assetManager' => [
            'forceCopy' => false,
        ],
    ],
];
