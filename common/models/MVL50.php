<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class MVL50 extends ActiveRecord
{
    public static function getDb() {
        return Yii::$app->get('db2');
    }
}