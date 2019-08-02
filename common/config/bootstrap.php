<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

Yii::$container->set('dvizh\cart\interfaces\Cart', 'dvizh\cart\models\Cart');
Yii::$container->set('dvizh\cart\interfaces\Element', 'dvizh\cart\models\CartElement');
Yii::$container->set('cartElement', 'dvizh\cart\models\CartElement');

