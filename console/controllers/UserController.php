<?php

namespace console\controllers;

use common\models\User;
use Yii;
use yii\console\Controller;
use yii\helpers\Console;


/**
 * Управление пользователями из консоли.
 * Примеры использования некоторых команд:
 * # создание нового пользователя
 * yii user/create username password
 */
class UserController extends Controller
{
    /**
     * Добавление нового пользователя с заданой ролью
     * @param string $username Имя пользователя
     * @param string $password Пароль Пользователя
     * @param int $role Роль прям сразу
     * @return int
     */
    public function actionCreate($username, $password, $role = null)
    {
        $model = new User();
        $model->username = $username;
        $model->email = 'admin@localhost.ru';
        $model->setPassword($password);
        $model->generateAuthKey();
        $model->role = $role;

        if ($model->save()) {
            $this->stdout("OK\n", Console::FG_GREEN);
            return Controller::EXIT_CODE_NORMAL;
        } else {
            foreach ($model->getErrors() as $key => $error) {
                $this->stdout("Attribute {$key}: \n\t" . implode("\n\t", $error) . "\n", Console::FG_RED);
            }
            return Controller::EXIT_CODE_ERROR;
        }
    }
}
